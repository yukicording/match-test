<?php
//SESSIONはプリペアする必要あり？
function fetch_conversation_summery($mysqli) {
    //自分が送ったメッセージ新しいもの順で並んでいる
    
	$sql = "SELECT 
        MemberA.message_text, 
        MemberA.message_date, 
        MemberA.conversation_id, 
        conversations_members.opponent_id, 
        conversations_members.conversation_last_view 
        FROM conversations_messages AS MemberA 
        INNER JOIN 
        (SELECT conversation_id, MAX(message_date) AS MaxAge FROM conversations_messages GROUP BY conversation_id) AS MemberB 
        ON MemberA.conversation_id = MemberB.conversation_id 
        AND MemberA.message_date = MemberB.MaxAge 
        INNER JOIN conversations_members 
        ON MemberA.conversation_id = conversations_members.conversation_id 
        WHERE conversations_members.user_id = ?
        AND conversations_members.conversation_deleted = 0
        ORDER BY MemberA.message_date DESC";
    //var_dump($sql);
	$stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i",$_SESSION['user_id']);
    $stmt->execute();
     $result = $stmt->get_result();
	$conversations = array();

	while ($row = $result->fetch_assoc()) {
		$conversations[] = $row;
	} 
	return $conversations;

}

function fetch_users_summery($mysqli) {

    $sql = "SELECT users.user_name,users.user_id,images.body,users.sex,users.age,users.place,users.work
    FROM users 
    JOIN images 
    ON users.user_id=images.image_id
    ";
   $result = $mysqli->query($sql);
	$users = array();

	while ($row = $result->fetch_assoc()) {
		$users[] = $row;
	} 
	return $users;

}
//

function fetch_conversation_messages($conversation_id, $mysqli) {
	$conversation_id = (int)$conversation_id;

	$sql = "SELECT
					conversations_messages.message_date,
					conversations_messages.message_date > conversations_members.conversation_last_view AS message_unread,
					conversations_messages.message_text,
					users.user_name,
                    conversations_messages.user_id
				FROM conversations_messages
				INNER JOIN users ON conversations_messages.user_id = users.user_id
				INNER JOIN conversations_members ON conversations_messages.conversation_id = conversations_members.conversation_id

				WHERE conversations_messages.conversation_id = ?
				-- 下記を削るとデータが重複する（実際にクエリ結果を見比べると分かりやすい）
				AND conversations_members.user_id = ?
				ORDER BY conversations_messages.message_date DESC";
$stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ii", $conversation_id, $_SESSION['user_id']);
    $stmt->execute();
     $result = $stmt->get_result();
	$messages = array();

	while ($row = $result->fetch_assoc()) { 
		$messages[] = $row;
	}
	return $messages;
}

function update_conversation_last_view($conversation_id, $mysqli) {
	$conversation_id = (int)$conversation_id;
	$sql = "UPDATE conversations_members
				SET conversation_last_view = UNIX_TIMESTAMP()
				WHERE conversation_id = ?
				AND user_id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ii",$conversation_id, $_SESSION['user_id']);
    $stmt->execute();
     $result = $stmt->get_result();
}


function create_conversation($id, $body, $mysqli) {
    $date = date('Y-m-d H:i:s');

	// conversationsテーブルに情報を挿入する
	$sql = "INSERT INTO conversations (date) VALUES (?)";
	$stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i",$date);
    $stmt->execute();
     $result = $stmt->get_result();
	// conversationsテーブルへ最後に挿入したIDを取得する
	$conversation_id = mysqli_insert_id($mysqli);

	$sql = "INSERT INTO
				conversations_messages (
					conversation_id,
					user_id,
					message_date,
					message_text
				)
				VALUES (
					?,
					?,
					?,
					?)";
	$stmt = $mysqli->prepare($sql);
    $time = time();
    $stmt->bind_param("iiis", $conversation_id, $_SESSION['user_id'], $time, $body);
    $stmt->execute();
     $result = $stmt->get_result();
	// conversations_membersテーブルに情報を挿入する
	// 下記は複数ユーザーに対応するための処理
	$values = array();
    
	$time = time();
    
    $sql = "INSERT INTO
				conversations_members (
					conversation_id,
					user_id,
                    opponent_id,
					conversation_last_view,
					conversation_deleted
				)
				VALUES (
					?,
					?,
                    ?,
					?,
					0)";
    
   $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("iiii",$conversation_id, $_SESSION['user_id'], $id, $time);
    $stmt->execute();
     $result = $stmt->get_result();
    $time = time()-1;
    
    $sql = "INSERT INTO
				conversations_members (
					conversation_id,
					user_id,
                    opponent_id,
					conversation_last_view,
					conversation_deleted
				)
				VALUES (
					?,
                    ?,
					?,
					?,
					0)";
$stmt = $mysqli->prepare($sql);
    $stmt->bind_param("iiii", $conversation_id, $id, $_SESSION['user_id'], $time);
    $stmt->execute();
     $result = $stmt->get_result();
}

function validate_conversation_id($conversation_id, $mysqli) {
	$conversation_id = (int)$conversation_id;
	$sql = "SELECT COUNT(1)
				FROM conversations_members
				WHERE conversation_id = ?
				AND user_id = ?
				AND conversation_deleted = 0";

	$stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ii",$conversation_id,$_SESSION['user_id']);
    $stmt->execute();
     $result = $stmt->get_result();
	if ($result->num_rows === 1) {
		return true;
	}
}

function add_conversation_message($conversation_id, $text, $mysqli) {
	$conversation_id = (int)$conversation_id;


	$sql = "INSERT INTO conversations_messages (
					conversation_id,
					user_id,
					message_date,
					message_text
				)
				VALUES (
					?,
					?,
					UNIX_TIMESTAMP(),
					?
				)";
    
	$stmt = $mysqli->prepare($sql);
    $stmt->bind_param("iis",$conversation_id,$_SESSION['user_id'],$text);
    $stmt->execute();
     $result = $stmt->get_result();
    
    
    
    
    $sql = "UPDATE `conversations_members` SET `conversation_flag` = '1' WHERE `conversations_members`.`conversation_id` = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i",$conversation_id);
    $stmt->execute();
     $result = $stmt->get_result();

}

function delete_conversation($conversation_id, $mysqli) {
	$conversation_id = (int)$conversation_id;

	// conversation_deletedを選択する（DISTINCTはグループメッセージに対応する為に挿入）
	$sql = "SELECT DISTINCT conversation_deleted
				FROM conversations_members
				WHERE conversation_id = ?
				AND user_id != ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ii",$conversation_id,$_SESSION['user_id']);
    $stmt->execute();
     $result = $stmt->get_result();
	// conversation_deletedのフラグ（1 or 0）を取得する
	while ($row = mysqli_fetch_assoc($result)) {
		$conversation_deleted = $row['conversation_deleted'];
	}

	if ($result->num_rows === 1 && $conversation_deleted == 1) {
		// 全てのメッセージを完全消去
		$sql01 = "DELETE FROM conversations WHERE conversation_id = ?";
        $stmt = $mysqli->prepare($sql01);
    $stmt->bind_param("i",$conversation_id);
    $stmt->execute();
    $result = $stmt->get_result();
		$sql02 = "DELETE FROM conversations_members WHERE conversation_id = ?";
        $stmt = $mysqli->prepare($sql02);
    $stmt->bind_param("i",$conversation_id);
    $stmt->execute();
     $result = $stmt->get_result();
		$sql03 = "DELETE FROM conversations_messages WHERE conversation_id = ?";
$stmt = $mysqli->prepare($sql03);
    $stmt->bind_param("i",$conversation_id);
    $stmt->execute();
     $result = $stmt->get_result();
        
	} else {
		// conversation_deletedのフラグだけアップデート（データは残る）
		$sql = "UPDATE conversations_members
					SET conversation_deleted = 1
					WHERE conversation_id = ?
					AND user_id = ?";
		$stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ii",$conversation_id,$_SESSION['user_id']);
    $stmt->execute();
     $result = $stmt->get_result();
	}

}


function opponent_id_get($conversation_id, $mysqli) {
    $id = (int)$conversation_id;
    $sql = "SELECT opponent_id FROM conversations_members WHERE conversation_id = ? AND user_id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ii",$id,$_SESSION['user_id']);
    $stmt->execute();
     $result = $stmt->get_result();
	$opponent_id = array();
    while ($row = $result->fetch_assoc()) {
		$opponent_id[] = $row;
	} 
	return $opponent_id;

}
function update_profile($age, $place, $income, $work, $education, $holiday, $size, $cigarette, $alchool, $cohabitants, $request, $id, $mysqli) {
    $id = (int)$id;
    $age = (int) $age;
    $place = (int) $place;
    $income = (int) $income;
    $work = (int) $work;
    $education = (int) $education;
    $holiday = (int) $holiday;
    $size = (int) $size;
    $cigarette = (int) $cigarette;
    $alchool = (int) $alchool;
    $cohabitants = (int) $cohabitants;
    $request = (int) $request;
	$sql = "UPDATE `users` SET `place` = ?, age = ?, income = ?, work = ?, education = ?, holiday = ?, size = ?, cigarette = ?, cohabitants = ?, request = ?, alchool = ? WHERE `users`.`user_id` = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("iiiiiiiiiiii",$place,$age,$income,$work,$education,$holiday,$size,$cigarette,$cohabitants,$request,$alchool,$id);
    $stmt->execute();
     $result = $stmt->get_result();
    $result = $mysqli->query($sql);
    
}

function update_profile_text($text, $id, $mysqli) {
    $sql = "UPDATE users SET profile_text = ? WHERE user_id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("si",$text,$id);
    $stmt->execute();
     $result = $stmt->get_result();
    $result = $mysqli->query($sql);
}

function my_profile_get($id, $mysqli) {
    $id = (int)$id;
    $sql = "SELECT user_name,place,age,place,income,work,education,holiday,size,cigarette,alchool,cohabitants,request,sex,profile_text,login FROM users WHERE user_id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i",$id);
    $stmt->execute();
     $result = $stmt->get_result();
	$users = array();
    while ($row = $result->fetch_assoc()) {
		$users[] = $row;
	} 
	return $users;
}

function refinement_get($id, $mysqli) {
    $id = (int)$id;
    $sql = "SELECT sex,place,age1,age2,place,income,work,education,holiday,size,cigarette,alchool,cohabitants,request FROM refinement WHERE user_id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i",$id);
    $stmt->execute();
     $result = $stmt->get_result();
	$users = array();
    while ($row = $result->fetch_assoc()) {
		$users[] = $row;
	} 
	return $users;
}

function update_images($id, $new_img, $mysqli) {
    $id = (int) $id;
    $date = date('Y-m-d H:i:s');
	$sql = "UPDATE `images` SET `body` = ? WHERE `images`.`image_id` = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("si",$new_img,$id);
    $stmt->execute();
     $result = $stmt->get_result();
    $sql = "UPDATE `images` SET `date` = ? WHERE `images`.`image_id` = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ii",$id,$date);
    $stmt->execute();
     $result = $stmt->get_result();
    }
//まだ
function update_refinement($id, $sex, $age1, $age2, $place, $income, $work, $education, $size, $holiday, $cigarette, $alchool, $cohabitants, $request, $mysqli) {
     $id = (int) $id;
    $age1 = (int) $age1;
    $age2 = (int) $age2;
    $place = (int) $place;
    $income = (int) $income;
    $work = (int) $work;
    $education = (int) $education;
    $holiday = (int) $holiday;
    $size = (int) $size;
    $cigarette = (int) $cigarette;
    $alchool = (int) $alchool;
    $cohabitants = (int) $cohabitants;
    $request = (int) $request;
    $sex = (int)$sex;
	$sql = "UPDATE refinement SET sex = '$sex', place = '$place', age1 = '$age1', age2 = '$age2', income = '$income', work = '$work', education = '$education', holiday = '$holiday', size = '$size', cigarette = '$cigarette', cohabitants = '$cohabitants', request = '$request', alchool = '$alchool' WHERE user_id = '$id'";
    $result = $mysqli->query($sql);
}

function insert_member_data($name, $password1, $email, $sex, $age, $place, $request, $mysqli) {
    $date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `registration_date`, `iine_count`, `email`, `sex`, `place`, `images_id`, `profile_text`, `age`, `income`, `work`, `education`, `holiday`, `size`, `cigarette`, `alchool`, `cohabitants`, `request`, `login`) VALUES (NULL, '$name', '$password1', '$date', '0', '$email', '$sex', '$place', '0', '', '$age', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2020-12-07 00:58:44')";
    if($mysqli->query($sql)){
        return TRUE;
    }else {
        return FALSE;
    }
}



function check_words($word, $length) {

    if(mb_strlen($word) === 0){
        return FALSE;
    }elseif(mb_strlen($word) > $length){
        return FALSE;
    }else{
        return TRUE;
    }
}
function select_image_id($password1, $mysqli) {
    $sql = "SELECT user_id FROM users WHERE user_password = '{$password1}'";
    $result = $mysqli->query($sql);
	$users = array();
    while ($row = $result->fetch_assoc()) {
		$users[] = $row;
	} 
	return $users;
}

function check_words1($word, $length) {

    if(mb_strlen($word) === 0){
        return FALSE;
    }elseif(mb_strlen($word) < $length){
        return FALSE;
    }else{
        return TRUE;
    }
}

function insert_default_image($id, $mysqli) {
    $date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO `images` (`id`, `image_id`, `body`, `date`, `kind`, `flag`) VALUES (NULL, ?, 'default.png', ?, '0', '0')";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("is",$id,$date);
    $stmt->execute();
     $result = $stmt->get_result();
    $sql = "INSERT INTO `images` (`id`, `image_id`, `body`, `date`, `kind`, `flag`) VALUES (NULL, ?, 'default.png', ?, '1', '0')";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("is",$id,$date);
    $stmt->execute();
     $result = $stmt->get_result();
    $sql = "INSERT INTO `images` (`id`, `image_id`, `body`, `date`, `kind`, `flag`) VALUES (NULL, ?, 'default.png', ?, '2', '0')";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("is",$id,$date);
    $stmt->execute();
     $result = $stmt->get_result();
    $sql = "INSERT INTO `images` (`id`, `image_id`, `body`, `date`, `kind`, `flag`) VALUES (NULL, ?, 'default.png', ?, '3', '0')";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("is",$id,$date);
    $stmt->execute();
     $result = $stmt->get_result();
}

function insert_refinement($id, $mysqli) {
    $sql = "INSERT INTO `refinement` (`id`, `user_id`, `sex`, `age1`, `age2`, `place`, `income`, `work`, `education`, `holiday`, `size`, `cigarette`, `alchool`, `cohabitants`, `request`) VALUES (NULL, ?, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0')";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i",$id);
    $stmt->execute();
     $result = $stmt->get_result();
}

function select_profile_img($id, $mysqli) {
    
    $sql = "SELECT images.body,kind,flag
    FROM users 
    JOIN images 
    ON users.user_id=images.image_id
    WHERE users.user_id = ?
    ORDER BY kind";
       $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i",$id);
    $stmt->execute();
     $result = $stmt->get_result();
	$users = array();

	while ($row = $result->fetch_assoc()) {
		$users[] = $row;
	} 
	return $users;

}

function select_profile_img1($id, $mysqli) {
    
    $sql = "SELECT images.body,kind
    FROM users 
    JOIN images 
    ON users.user_id=images.image_id
    WHERE users.user_id = ?
    AND kind = 0";
       $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i",$id);
    $stmt->execute();
     $result = $stmt->get_result();
	$users = array();

	while ($row = $result->fetch_assoc()) {
		$users[] = $row;
	} 
	return $users;

}

function select_other_profile_img($id, $mysqli) {

    $sql = "SELECT images.body,images.kind,login
    FROM users 
    JOIN images 
    ON users.user_id=images.image_id
    WHERE users.user_id = ?
    ORDER BY kind";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i",$id);
    $stmt->execute();
     $result = $stmt->get_result();
	$users = array();

	while ($row = $result->fetch_assoc()) {
		$users[] = $row;
	} 
	return $users;

}

function check_exist_message_member($mysqli, $id) {
    
    $sql = "SELECT conversation_id 
    FROM conversations_members 
    WHERE user_id = {$_SESSION['user_id']}
    AND opponent_id = '$id'";
    $result = $mysqli->query($sql);
	$users1 = array();

	while ($row = $result->fetch_assoc()) {
		$users1[] = $row;
	} 
	return $users1;
    
}

function check_exist_iine($mysqli, $id) {
    
    $sql = "SELECT user_id 
    FROM iine
    WHERE user_id = ?
    AND opponent_id = ?
    AND flag = 0";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ii",$_SESSION['user_id'],$id);
    $stmt->execute();
    $result = $stmt->get_result();
	$users2 = array();

	while ($row = $result->fetch_assoc()) {
		$users2[] = $row;
	} 
	return $users2;
    
}

function iine_table($mysqli) {
    
    $sql = "SELECT opponent_id 
    FROM iine
    WHERE user_id = ?
    AND flag = 0";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i",$_SESSION['user_id']);
    $stmt->execute();
    $result = $stmt->get_result();
	$users = array();

	while ($row = $result->fetch_assoc()) {
		$users[] = $row;
	} 
	return $users;
    
}

function delete_iine($opponent_id, $mysqli) {
    $sql = "DELETE FROM iine
    WHERE user_id = ?
    AND opponent_id = ?
    AND flag = 0";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ii",$_SESSION['user_id'],$opponent_id);
    $stmt->execute();
    $result = $stmt->get_result();
}

function delete_iine_1($iine_id, $mysqli) {
    $sql = "DELETE FROM iine
    WHERE id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i",$iine_id);
    $stmt->execute();
    $result = $stmt->get_result();
}

function not_diplay($mysqli) {
    $sql = "SELECT opponent_id 
    FROM conversations_members
    WHERE user_id = ?
    AND conversation_deleted = 1";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i",$_SESSION['user_id']);
    $stmt->execute();
    $result = $stmt->get_result();
	$users = array();

	while ($row = $result->fetch_assoc()) {
		$users[] = $row;
	} 
	return $users;
}

function repair_converastion($opponent_id, $mysqli){
    $sql = "UPDATE conversations_members SET conversation_deleted = 0 WHERE user_id = ? AND opponent_id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ii",$_SESSION['user_id'],$opponent_id);
    $stmt->execute();
     $result = $stmt->get_result();
}

function check_exist_arigato($mysqli, $id) {
    
    $sql = "SELECT user_id 
    FROM iine
    WHERE user_id = ?
    AND opponent_id = ?
    AND flag = 0";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ii",$id,$_SESSION['user_id']);
    $stmt->execute();
     $result = $stmt->get_result();
	$users2 = array();

	while ($row = $result->fetch_assoc()) {
		$users2[] = $row;
	} 
	return $users2;
    
}

function email_exists($email, $mysqli) {

    $sql = "SELECT COUNT(user_id) FROM users where email = '$email'";
    $result = $mysqli->query($sql);
    $row = $result->fetch_assoc();
    if($row['COUNT(user_id)'] > 0 ){
        return TRUE;
    }else{
        return FALSE;
    }
}

function insert_iine($id, $id1, $mysqli) {
    $date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO `iine` (`id`, `user_id`, `opponent_id`, `date`, `flag`) VALUES (NULL, ?, ?, ?, '0')";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("iis",$id1,$id,$date);
    $stmt->execute();
     $result = $stmt->get_result();
    $sql = "UPDATE users SET iine_count = iine_count + 1 WHERE user_id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i",$id);
    $stmt->execute();
     $result = $stmt->get_result();
}

function select_iine($mysqli){
     $sql = "SELECT user_id,id FROM iine 
    WHERE opponent_id = ?
    AND flag = 0";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i",$_SESSION['user_id']);
    $stmt->execute();
     $result = $stmt->get_result();
	$iine = array();

	while ($row = $result->fetch_assoc()) {
		$iine[] = $row;
	} 
	return $iine;
}

function select_match($mysqli){
     $sql = "SELECT id,user_id,opponent_id FROM iine 
    WHERE (opponent_id = ?
    AND flag = 1)
    OR (user_id = ?
    AND flag = 1)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ii",$_SESSION['user_id'],$_SESSION['user_id']);
    $stmt->execute();
     $result = $stmt->get_result();
	$iine = array();

	while ($row = $result->fetch_assoc()) {
		$iine[] = $row;
	} 
	return $iine;
}

function check_exist_matting($mysqli, $id){
     $sql = "SELECT user_id,opponent_id FROM iine 
    WHERE (opponent_id = ? AND user_id = ?
    AND flag = 1)
    OR (user_id = ? AND opponent_id = ?
    AND flag = 1)";
     $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("iiii",$_SESSION['user_id'], $id, $_SESSION['user_id'], $id);
    $stmt->execute();
     $result = $stmt->get_result();
	$iine = array();

	while ($row = $result->fetch_assoc()) {
		$iine[] = $row;
	} 
	return $iine;
}

function success_matti($arigato, $mysqli) {
    $id = (int) $arigato;
	$sql = "UPDATE `iine` SET `flag` = '1' WHERE `iine`.`id` = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i",$id);
    $stmt->execute();
     $result = $stmt->get_result();
    }

//ごめんなさいはflagを２
function false_matti($sorry, $mysqli) {
    $id = (int) $sorry;
	$sql = "UPDATE `iine` SET `flag` = '2' WHERE `iine`.`id` = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i",$id);
    $stmt->execute();
     $result = $stmt->get_result();
    }

function html_escape($word){
	return htmlspecialchars($word, ENT_QUOTES, 'UTF-8');
}


function count_hobby($hobby, $mysqli) {

    $sql = "SELECT COUNT(user_id) FROM hobby 
				WHERE hobby_id = ?
				AND user_id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ii",$hobby, $_SESSION['user_id']);
    $stmt->execute();
     $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    if($row['COUNT(user_id)'] > 0 ){
        return FALSE;
    }else{
        return TRUE;
    }
}


function insert_hobby($hobby, $mysqli) {
    $sql = "INSERT `hobby` (`id`, `hobby_id`, `user_id`, `flag`) VALUES (NULL, ?, ?, '1')";
     $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ii",$hobby, $_SESSION['user_id']);
    $stmt->execute();
     $result = $stmt->get_result();
}

function delete_hobby($hobby, $mysqli) {
    $sql = "UPDATE hobby SET flag = '0' WHERE `hobby`.`user_id` = ?
    AND `hobby`.`hobby_id` = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ii",$_SESSION['user_id'], $hobby);
    $stmt->execute();
     $result = $stmt->get_result();
    }
function update_hobby($hobby, $mysqli) {
    $sql = "UPDATE hobby SET flag = '1' WHERE `hobby`.`user_id` = ?
    AND `hobby`.`hobby_id` = ?";
        $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ii",$_SESSION['user_id'], $hobby);
    $stmt->execute();
     $result = $stmt->get_result();
    }
function select_profile_hobby($id, $mysqli) {

    $sql = "SELECT hobby_id
    FROM hobby 
    WHERE flag = 1
    AND user_id = ?
    ";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i",$id);
    $stmt->execute();
     $result = $stmt->get_result();
	$hobbys = array();

	while ($row = $result->fetch_assoc()) {
		$hobbys[] = $row;
	} 
	return $hobbys;
    

}

function update_login($mysqli) {
    $date = date('Y-m-d H:i:s');
    $sql = "UPDATE users SET login = '{$date}' WHERE `users`.`user_id` = '{$_SESSION['user_id']}'";
    $mysqli->query($sql);
    $result = $mysqli->query($sql);
}


//年齢確認

function check_exist_ageconfig($mysqli) {
    
    $sql = "SELECT flag 
    FROM age_confirmation
    WHERE user_id = {$_SESSION['user_id']}";
    $result = $mysqli->query($sql);
	$users1 = array();

	while ($row = $result->fetch_assoc()) {
		$users1[] = $row;
	} 
	return $users1;
    
}
//informationお知らせ
function common_information_get($mysqli) {
    
    $sql = "SELECT title,body,id 
    FROM common_information
    WHERE user_id = 0
    OR user_id = {$_SESSION['user_id']}";
    $result = $mysqli->query($sql);
	$users1 = array();

	while ($row = $result->fetch_assoc()) {
		$users1[] = $row;
	} 
	return $users1;
    
}

function common_information_get_content($mysqli,$id) {
    
    $sql = "SELECT title,body,id 
    FROM common_information WHERE id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i",$id);
    $stmt->execute();
     $result = $stmt->get_result();
	$users1 = array();

	while ($row = $result->fetch_assoc()) {
		$users1[] = $row;
	} 
	return $users1;
    
}

//お問い合わせ

function specific_information_get($title,$body,$mysqli) {
$time = time();
    $sql = "INSERT INTO
				specific_information (
					id,
                    user_id,
					title,
                    body,
					date,
                    reply_id,
                    flag
				)
				VALUES (
					NULL,
                    ?,
					?,
                    ?,
					?,
                    0,
                    0)";
    
   $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("issi",$_SESSION['user_id'] ,$title, $body, $time);
    $stmt->execute();
     $result = $stmt->get_result();
}

function image_count($user_id, $mysqli) {
    
    $sql = "SELECT COUNT(id) FROM images 
				WHERE image_id = ?
				AND body != 'default.png'";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i",$user_id);
    $stmt->execute();
     $result = $stmt->get_result();
    $row = $result->fetch_assoc();
        return $row['COUNT(id)'];
}

