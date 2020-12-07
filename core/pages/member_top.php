
<!-- 新規未読メッセージを受け取ると、下部の手紙アイコンにポイントが付く -->
<?php
$conversations = fetch_conversation_summery($mysqli);
update_login($mysqli);
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
	<title>タイトル</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="core/pages/css/member_top.css"><link rel="shortcut icon" href="core/pages/pg_img/logo.jpg"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
    
    
<!--　自分の性別を表す$sex変数をSESSIONから受け取り  -->
    <?php 
$id = (int) $_SESSION['user_id'];
$user1 = my_profile_get($id, $mysqli);
$sex = $user1[0]['sex'];
?>
    
<!--　表示するユーザーを絞り込むための処理  -->
<?php if(isset($_POST['check'])) {
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
    $sex = (int) $_POST['sex'];
    $id = (int) $_SESSION['user_id'];
    update_refinement($id, $sex, $age1, $age2, $place, $income, $work, $education, $size, $holiday, $cigarette, $alchool, $cohabitants, $request, $mysqli);
} ?>
    
    
    
    
    
    <body>
    <div class="member_top">
        <div class="kakomi">
          <ul class="accordion11">

              <li>
        <p class="ac1">
            
            
<!--　表示するユーザの順序  -->
 <?php if(empty($_GET['order'])) {
    echo"ログイン順";
    $order11 = ' ORDER BY login DESC';
}
    elseif (!empty($_GET['order']) and $_GET['order'] ==1) {
                echo"ログイン順";
                $order11 = ' ORDER BY login DESC';
            }
    elseif (!empty($_GET['order']) and $_GET['order'] ==2) {
                echo"いいね多い順";
                $order11 = ' ORDER BY iine_count DESC';
            }            
    elseif (!empty($_GET['order']) and $_GET['order'] ==3) {
                echo"登録順";$order11 = ' ORDER BY registration_date DESC';
            }?>
            
            
            
                  </p>
        <ul class="inner"><a href="index.php?page=member_top&order=1">
            <li class="content1-1">ログイン順</li></a>
            <a href="index.php?page=member_top&order=2"><li class="content1-2">いいね多い順</li></a>
            <a href="index.php?page=member_top&order=3"><li class="content1-3">登録順</li></a>
        </ul>
                 </li></ul>
          
          <a href="index.php?page=member_search"><div id="humberger">
  <div></div>
  <div></div>
  <div></div>
</div></a></div>
        
<!--　表示するユーザーを絞り込むための処理  -->
        
<?php 

$id = (int) $_SESSION['user_id'];
$user1 = my_profile_get($id, $mysqli);
$sex = $user1[0]['sex'];
$refinements = refinement_get($id, $mysqli);
?>
        
        <?php
        
   
foreach ($refinements as $refinement) { 


$where = [];
$where[] = 'images.kind = ' . 0;
    $where[] = 'user_id != ' . $id;

 //居住地
        
    if(!empty($refinement['age1'])){
		$where[] = 'age >= ' . $refinement['age1'];
	}
    
    if(!empty($refinement['sex'])){
		$where[] = 'sex = ' . $refinement['sex'];
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
		$sql = 'select login,users.work,users.user_name,users.user_id,images.body,users.sex,users.place,users.age 
        from users
        JOIN images
        ON users.user_id=images.image_id
         where ' . $whereSql . $order11;
	}else{
		$sql = 'select users.user_name,users.user_id,images.body,users.sex,users.place,users.age from users
                JOIN images
                ON users.user_id=images.image_id
                WHERE images.kind = 0';
	}
    $result = $mysqli->query($sql);
	$users1 = array();
        
	while ($row = $result->fetch_assoc()) {
		$users1[] = $row;
	} 
?> 
          
    <!--　ページネーションの処理  -->    
        
          <?php
define('MAX','12'); // 1ページのユーザの表示数
 
$books = $users1;
            
$books_num = count($books); // トータルデータ件数
 
$max_page = ceil($books_num / MAX); // トータルページ数※ceilは小数点を切り捨てる関数
 
if(!isset($_GET['page_id'])){ // $_GET['page_id'] はURLに渡された現在のページ数
    $now = 1; // 設定されてない場合は1ページ目にする
}else{
    $now = $_GET['page_id'];
}
 
$start_no = ($now - 1) * MAX; // 配列の何番目から取得すればよいか
 
// array_sliceは、配列の何番目($start_no)から何番目(MAX)まで切り取る関数
$disp_data = array_slice($books, $start_no, MAX, true);
 ?>
        <!--　表示するユーザの順序  -->

<script>
    $(function(){
    //.accordion1の中のp要素がクリックされたら
	$('.accordion11 p').click(function(){
		//クリックされた.accordion1の中のp要素に隣接するul要素が開いたり閉じたりする。
		$(this).next('ul').slideToggle();
	});
});</script>
        
 <div class="member_order">
     <?php 
     
foreach ($disp_data as $user) { 
    $date = date('Y-m-d H:i:s');
    $from = strtotime("$date");
    $to = strtotime($user['login']);
    $check = $from - $to;
    $user_id = $user['user_id'];
    $image_count = image_count($user_id, $mysqli);?>
     
     <div class="member_card"><a href="index.php?page=other_profile_view&id=<?php echo html_escape($user['user_id']) ?>"><img src="core/pages/img/<?php echo $user['body'] ?>" alt="プロフィール画像"></a>
         <div class="card_top"><div class="color" style="background-color:<?php if($check <= 86400){
        echo "#00ff00";}
    elseif ($check >= 86400 and $check <= 604800){
        echo "yellow";}
    else{
        echo "gray";}?>;"></div><p><?php
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
?>歳</p><p><?php
if ($user['sex'] === '1') echo "男性";
if ($user['sex'] === '2') echo "女性";
if ($user['sex'] === '3') echo "other";

    ?></p></div>
         

         </div><?php } ?>
     </div>
        
        
        <!--　ページネーションのページ数　-->
        <p style="text-align:center;margin-top:50px;font-size:19px;color:silver;"> 
        <?php if($max_page != 1) {
for($i = 1; $i <= $max_page; $i++){ // 最大ページ数分リンクを作成
    if ($i == $now) { // 現在表示中のページ数の場合はリンクを貼らない
        echo '<span style="font-weight:bold;margin-right:19px;color:black;">'. $now. '</span>'; 
    } else {
        echo '<a href=\'/match/index.php?page=member_top&page_id='. $i. '\')>'. $i. '</a>'. '　';
    }
}}
 
            ?></p>


     
        </div>
        
        
        
        
        
        
        
        
 <script>
var luminousTrigger = document.querySelectorAll('.lightbox');
if( luminousTrigger !== null ) {
  new LuminousGallery(luminousTrigger);
}
</script>
    <div class="menu2"><a href="index.php?page=member_top"><div class="menu_img"><img src="core/pages/pg_img/search.png"><p>探す</p></div></a>
        <a href="index.php?page=category"><div class="menu_img"><img src="core/pages/pg_img/icontenis.png"><p>趣味</p></div></a>
        <a href="index.php?page=iine"><div class="menu_img"><img src="core/pages/pg_img/heart.png"><p>いいね</p></div></a>
        <a href="index.php?page=inbox"><div class="menu_img"><img src="core/pages/pg_img/letter.png"><p>メッセージ</p></div></a>
        <a href="index.php?page=my_profile"><div class="menu_img"><img src="core/pages/pg_img/mypage.png"><p>マイページ</p></div></a>
        
        </div></body></html>


