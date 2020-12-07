<?php
$conversations = fetch_conversation_summery($mysqli);
$a = 0;?>
<?php foreach ($conversations as $conversation) {?>
        <?php if ($conversation['message_date'] > $conversation['conversation_last_view']) {
    $a += 1;
        } ?>
<?php } ?>
<?php
    $age1 = (int) $_POST['age1'];
    $age2 = (int) $_POST['age2'];
    $place = (int) $_POST['place'];
    $income = (int) $_POST['income'];
    $work = (int) $_POST['work'];
    $education = (int) $_POST['education'];
    $holiday = (int) $_POST['holiday'];
    $size = (int) $_POST['size'];
    $cigarette = (int) $_POST['cigarette'];
    $alchool = (int) $_POST['alchool'];
    $cohabitants = (int) $_POST['cohabitants'];
    $request = (int) $_POST['request'];
    $id = (int) $_SESSION['user_id'];
    update_refinement($id, $age1, $age2, $place, $income, $work, $education, $size, $holiday, $cigarette, $alchool, $cohabitants, $request, $mysqli)
?>



<?php 
$id = (int) $_SESSION['user_id'];
$user1 = my_profile_get($id, $mysqli);
$sex = $user1[0]['sex'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>MATURE（４０代からの恋活マッチング）</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="core/pages/css/member.css">
    <link rel="stylesheet" href="core/pages/css/member_responsible.css">
</head>
<body>
    <header>
        
        <a href="index.php?page=member_top"><img src="http://localhost/pm_simple-master/core/pages/pg_img/icons.png"></a>
        <a href="index.php?page=iine"><img src="http://localhost/pm_simple-master/core/pages/pg_img/iine1.png"></a>
        <a href="index.php?page=inbox"><img src="http://localhost/pm_simple-master/core/pages/pg_img/<?php if ($a == 0) { echo 'icon2.png'; }
            elseif ($a != 0) { echo 'icon7.png'; }?>"></a>
        <a href="index.php?page=my_profile"><img src="http://localhost/pm_simple-master/core/pages/pg_img/icon3.png"></a>
    </header>
    <main>
<h2>検索結果</h2>
<?php

$where = [];

 //居住地
        
    if(!empty($_POST['age1'])){
		$where[] = 'age >= ' . $_POST['age1'];
	}
    
    if(!empty($_POST['age2'])){
		$where[] = 'age <= ' . $_POST['age2'];
	}
        
        
    if(!empty($_POST['place'])){
		$where[] = 'place = ' . $_POST['place'];
	}
   //年収
    if(!empty($_POST['income'])){
		$where[] = 'income = ' . $_POST['income'];
	}
    //職業
    if(!empty($_POST['work'])){
		$where[] = 'work = ' . $_POST['work'];
	}
    //学歴
    if(!empty($_POST['education'])){
		$where[] = 'education = ' . $_POST['education'];
	}
    //体型
    if(!empty($_POST['size'])){
		$where[] = 'size = ' . $_POST['size'];
	}
    //休日
    if(!empty($_POST['holiday'])){
		$where[] = 'holiday = ' . $_POST['holiday'];
	}
    //煙草
    if(!empty($_POST['cigarette'])){
		$where[] = 'cigarette = ' . $_POST['cigarette'];
	}
    //お酒
    if(!empty($_POST['alchool'])){
		$where[] = 'alchool = ' . $_POST['alchool'];
	}
    //同居人
    if(!empty($_POST['cohabitants'])){
		$where[] = 'cohabitants = ' . $_POST['cohabitants'];
	}
    //出会うまで
    if(!empty($_POST['request'])){
		$where[] = 'request = ' . $_POST['request'];
	}

   
    
	if($where){
		$whereSql = implode(' AND ', $where);
		$sql = 'select users.user_name,users.user_id,images.body,users.sex,users.place,users.age from users
        JOIN images
        ON users.user_id=images.image_id
        where ' . $whereSql ;
	}else{
		$sql = 'select users.user_name,users.user_id,images.body,users.sex,users.place,users.age from users
                JOIN images
                ON users.user_id=images.image_id';
	}
    $result = $mysqli->query($sql);
	$users1 = array();

	while ($row = $result->fetch_assoc()) {
		$users1[] = $row;
	} 

?>

<a href="index.php?page=member_search" class="search"><img src="http://localhost/pm_simple-master/core/pages/pg_img/icon4.png"></a><br>
<div class="login_content">
<?php foreach ($users1 as $user) { ?>
<?php if ($sex == 1) { ?>
<?php if ($user['sex'] == 2) { ?>
<div class="img">
<a href="index.php?page=other_profile_view&id=<?php echo $user['user_id'] ?>"><?php echo $user['user_name'] ?></a>
    
    年齢：<?php
if ($user['age'] === '1') echo "18";
if ($user['age'] === '2') echo "19";                                
if ($user['age'] === '3') echo "20";
if ($user['age'] === '4') echo "21";
if ($user['age'] === '5') echo "22";
if ($user['age'] === '6') echo "23";
if ($user['age'] === '7') echo "24";
if ($user['age'] === '8') echo "25";
if ($user['age'] === '9') echo "26";
if ($user['age'] === '10') echo "27";
if ($user['age'] === '11') echo "28";
if ($user['age'] === '12') echo "29";
if ($user['age'] === '13') echo "30";                                
if ($user['age'] === '14') echo "31";
if ($user['age'] === '15') echo "32";
if ($user['age'] === '16') echo "33";
if ($user['age'] === '17') echo "34";
if ($user['age'] === '18') echo "35";
if ($user['age'] === '19') echo "36";
if ($user['age'] === '20') echo "37";
if ($user['age'] === '21') echo "38";
if ($user['age'] === '22') echo "39";
if ($user['age'] === '23') echo "40";
if ($user['age'] === '24') echo "41";
if ($user['age'] === '25') echo "42";
if ($user['age'] === '26') echo "43";
if ($user['age'] === '27') echo "44";
if ($user['age'] === '28') echo "45";
if ($user['age'] === '29') echo "46";
if ($user['age'] === '30') echo "47";
if ($user['age'] === '31') echo "48";
if ($user['age'] === '32') echo "49";
if ($user['age'] === '33') echo "50";                                
if ($user['age'] === '34') echo "51";
if ($user['age'] === '35') echo "52";
if ($user['age'] === '36') echo "53";
if ($user['age'] === '37') echo "54";
if ($user['age'] === '38') echo "55";
if ($user['age'] === '39') echo "56";
if ($user['age'] === '40') echo "57";
if ($user['age'] === '41') echo "58";
if ($user['age'] === '42') echo "59";
if ($user['age'] === '43') echo "60";                                
if ($user['age'] === '44') echo "61";
if ($user['age'] === '45') echo "62";
if ($user['age'] === '46') echo "63";
if ($user['age'] === '47') echo "64";
if ($user['age'] === '48') echo "65";
if ($user['age'] === '49') echo "66";
if ($user['age'] === '50') echo "67";
if ($user['age'] === '51') echo "68";
if ($user['age'] === '52') echo "69";
?>歳

    <br>
<img src="http://localhost/pm_simple-master/core/pages/img/<?php echo $user['body'] ?>" alt="プロフィール画像" width="200px" height="200px"> <br>
    </div>
<?php } ?>
<?php } ?>
<?php } ?>
</div>

        <div class="login_content">
<?php foreach ($users1 as $user) { ?>
<?php if ($sex == 2) { ?>
<?php if ($user['sex'] == 1) { ?>
            <div class="img">
<a href="index.php?page=other_profile_view&id=<?php echo $user['user_id'] ?>"><?php echo $user['user_name'] ?></a>
<br>
                <img src="http://localhost/pm_simple-master/core/pages/img/<?php echo $user['body'] ?>" alt="プロフィール画像" width="200px" height="200px"><p><?php
if ($user['age'] === '1') echo "18";
if ($user['age'] === '2') echo "19";                                
if ($user['age'] === '3') echo "20";
if ($user['age'] === '4') echo "21";
if ($user['age'] === '5') echo "22";
if ($user['age'] === '6') echo "23";
if ($user['age'] === '7') echo "24";
if ($user['age'] === '8') echo "25";
if ($user['age'] === '9') echo "26";
if ($user['age'] === '10') echo "27";
if ($user['age'] === '11') echo "28";
if ($user['age'] === '12') echo "29";
if ($user['age'] === '13') echo "30";                                
if ($user['age'] === '14') echo "31";
if ($user['age'] === '15') echo "32";
if ($user['age'] === '16') echo "33";
if ($user['age'] === '17') echo "34";
if ($user['age'] === '18') echo "35";
if ($user['age'] === '19') echo "36";
if ($user['age'] === '20') echo "37";
if ($user['age'] === '21') echo "38";
if ($user['age'] === '22') echo "39";
if ($user['age'] === '23') echo "40";
if ($user['age'] === '24') echo "41";
if ($user['age'] === '25') echo "42";
if ($user['age'] === '26') echo "43";
if ($user['age'] === '27') echo "44";
if ($user['age'] === '28') echo "45";
if ($user['age'] === '29') echo "46";
if ($user['age'] === '30') echo "47";
if ($user['age'] === '31') echo "48";
if ($user['age'] === '32') echo "49";
if ($user['age'] === '33') echo "50";                                
if ($user['age'] === '34') echo "51";
if ($user['age'] === '35') echo "52";
if ($user['age'] === '36') echo "53";
if ($user['age'] === '37') echo "54";
if ($user['age'] === '38') echo "55";
if ($user['age'] === '39') echo "56";
if ($user['age'] === '40') echo "57";
if ($user['age'] === '41') echo "58";
if ($user['age'] === '42') echo "59";
if ($user['age'] === '43') echo "60";                                
if ($user['age'] === '44') echo "61";
if ($user['age'] === '45') echo "62";
if ($user['age'] === '46') echo "63";
if ($user['age'] === '47') echo "64";
if ($user['age'] === '48') echo "65";
if ($user['age'] === '49') echo "66";
if ($user['age'] === '50') echo "67";
if ($user['age'] === '51') echo "68";
if ($user['age'] === '52') echo "69";
?>歳
        <?php
if ($user['place'] === '1') echo "北海道";
if ($user['place'] === '2') echo "青森";
if ($user['place'] === '3') echo "岩手";
if ($user['place'] === '4') echo "宮城";
if ($user['place'] === '5') echo "秋田";
if ($user['place'] === '6') echo "山形";
if ($user['place'] === '7') echo "福島";
if ($user['place'] === '8') echo "茨城";
if ($user['place'] === '9') echo "栃木";
if ($user['place'] === '10') echo "群馬";
if ($user['place'] === '11') echo "埼玉";
if ($user['place'] === '12') echo "千葉";
if ($user['place'] === '13') echo "東京";
if ($user['place'] === '14') echo "神奈川";
if ($user['place'] === '15') echo "新潟";
if ($user['place'] === '16') echo "富山";
if ($user['place'] === '17') echo "石川";
if ($user['place'] === '18') echo "福井";
if ($user['place'] === '19') echo "山梨";
if ($user['place'] === '20') echo "長野";
if ($user['place'] === '21') echo "岐阜";
if ($user['place'] === '22') echo "静岡";
if ($user['place'] === '23') echo "愛知";
if ($user['place'] === '24') echo "三重";
if ($user['place'] === '25') echo "滋賀";
if ($user['place'] === '26') echo "京都";
if ($user['place'] === '27') echo "大阪";
if ($user['place'] === '28') echo "兵庫";
if ($user['place'] === '29') echo "奈良";
if ($user['place'] === '30') echo "和歌山";
if ($user['place'] === '31') echo "鳥取";
if ($user['place'] === '32') echo "島根";
if ($user['place'] === '33') echo "岡山";
if ($user['place'] === '34') echo "広島";
if ($user['place'] === '35') echo "山口";
if ($user['place'] === '36') echo "徳島";
if ($user['place'] === '37') echo "香川";
if ($user['place'] === '38') echo "愛媛";
if ($user['place'] === '39') echo "高知";
if ($user['place'] === '40') echo "福岡";
if ($user['place'] === '41') echo "佐賀";
if ($user['place'] === '42') echo "大分";
if ($user['place'] === '43') echo "宮崎";
if ($user['place'] === '44') echo "長崎";
if ($user['place'] === '45') echo "熊本";
if ($user['place'] === '46') echo "鹿児島";
if ($user['place'] === '47') echo "沖縄";
if ($user['place'] === '48') echo "その他";
?></p></div> <br>
<?php } ?>
<?php } ?>
<?php } ?>
        </div>
</main>
    </body>
</html>





