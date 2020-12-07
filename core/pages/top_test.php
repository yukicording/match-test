<?php
$conversations = fetch_conversation_summery($mysqli);
$a = 0;?>
<?php foreach ($conversations as $conversation) {?>
        <?php if ($conversation['message_date'] > $conversation['conversation_last_view']) {
    $a += 1;
        } ?>
<?php } ?>
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
        
        <a href="index.php?page=member_top"><img src="core/pages/pg_img/icons.png"></a>
        <a href="index.php?page=iine"><img src="core/pages/pg_img/iine.png"></a>
        <a href="index.php?page=inbox"><img src="core/pages/pg_img/<?php if ($a == 0) { echo 'icon2.png'; }
            elseif ($a != 0) { echo 'icon7.png'; }?>"></a>
        <a href="index.php?page=my_profile"><img src="core/pages/pg_img/icon3.png"></a>
    </header>
    <main>
<h2>メンバーの絞り込み検索をする</h2>
       
        
        <?php 

$id = (int) $_SESSION['user_id'];
$user1 = my_profile_get($id, $mysqli);
$sex = $user1[0]['sex'];
$refinements = refinement_get($id, $mysqli);

?>
        
    <?php
        
   
foreach ($refinements as $refinement) { 


$where = [];

    if($sex == 1){
           $where[] = 'sex = ' . 2;
        }
        if($sex == 2){
           $where[] = 'sex = ' . 1;
        }
 //居住地
        
    if(!empty($refinement['age1'])){
		$where[] = 'age >= ' . $refinement['age1'];
	}
    
    if(!empty($refinement['age2'])){
		$where[] = 'age <= ' . $refinement['age2'];
	}
        
        
    if(!empty($refinement['place'])){
		$where[] = 'place = ' . $refinement['place'];
	}
   //年収
    if(!empty($refinement['income'])){
		$where[] = 'income = ' . $refinement['income'];
	}
    //職業
    if(!empty($refinement['work'])){
		$where[] = 'work = ' . $refinement['work'];
	}
    //学歴
    if(!empty($refinement['education'])){
		$where[] = 'education = ' . $refinement['education'];
	}
    //体型
    if(!empty($refinement['size'])){
		$where[] = 'size = ' . $refinement['size'];
	}
    //休日
    if(!empty($refinement['holiday'])){
		$where[] = 'holiday = ' . $refinement['holiday'];
	}
    //煙草
    if(!empty($refinement['cigarette'])){
		$where[] = 'cigarette = ' . $refinement['cigarette'];
	}
    //お酒
    if(!empty($refinement['alchool'])){
		$where[] = 'alchool = ' . $refinement['alchool'];
	}
    //同居人
    if(!empty($refinement['cohabitants'])){
		$where[] = 'cohabitants = ' . $refinement['cohabitants'];
	}
    //出会うまで
    if(!empty($refinement['request'])){
		$where[] = 'request = ' . $refinement['request'];
	}
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
var_dump($users1);
?>    
        
        


        </main>
    </body>
</html>











