
<?php
$check = 0;
  if(!empty(check_exist_ageconfig($mysqli))) {
    $check1 = check_exist_ageconfig($mysqli);
    $check = (int) $check1[0]['flag'];};
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

    
   
    
<div class="main_inbox"><div class="inbox_select">
         <a href="index.php?page=inbox">
        <div class="inbox_matti">INBOX</div></a>
        <a href="index.php?page=matti_people">
            <div class="inbox_message">MATCHING</div></a></div>
    <?php


$errors = array();

if (isset($_GET['delete_conversation'])){
	if (validate_conversation_id($_GET['delete_conversation'], $mysqli) === false ) {
		$errors[] = "削除IDエラーが発生しました。";
	}
	if (empty($errors)) {
		delete_conversation($_GET['delete_conversation'], $mysqli);
	}
}


$conversations = fetch_conversation_summery($mysqli);

if (empty($conversations)) {
	$errors[] = "メッセージがありません";
}
if (!empty($errors)) {
	foreach ($errors as $error) {
		echo $error;
	}
}
?>
<!-- ログアウトページも作る -->
     
<?php foreach ($conversations as $conversation) {?>
<?php 
$id = $conversation['opponent_id'];
$users = my_profile_get($id, $mysqli);?>
<?php
$profile_img = select_profile_img1($id, $mysqli);
?>
        <div class="inbox_section">
        
<?php foreach ($profile_img as $img) { ?>
            <a href="index.php?page=other_profile_view&id=<?php echo html_escape($id) ?>">
                <img src="core/pages/img/<?php echo html_escape($img['body']) ?>" alt="プロフィール画像" width="50px" height="50px" class="inbox_img"></a>
<?php } ?>
<?php foreach ($users as $user) { ?>
            <p class="inbox_name"><?php echo html_escape($user['user_name']) ?></p>
    <p class="inbox_place"><?php
if ($user['place'] === 1) echo "Hokkaido";
if ($user['place'] === 2) echo "Aomiri";
if ($user['place'] === 3) echo "Iwate";
if ($user['place'] === 4) echo "Miyagi";
if ($user['place'] === 5) echo "Akita";
if ($user['place'] === 6) echo "Yamagata";
if ($user['place'] === 7) echo "Fukushima";
if ($user['place'] === 8) echo "Ibaraki";
if ($user['place'] === 9) echo "Totigi";
if ($user['place'] === 10) echo "Gunma";
if ($user['place'] === 11) echo "Saitama";
if ($user['place'] === 12) echo "Chiba";
if ($user['place'] === 13) echo "Tokyo";
if ($user['place'] === 14) echo "Kanagawa";
if ($user['place'] === 15) echo "Niigata";
if ($user['place'] === 16) echo "Toyama";
if ($user['place'] === 17) echo "Ishikawa";
if ($user['place'] === 18) echo "Fukui";
if ($user['place'] === 19) echo "Yamanashi";
if ($user['place'] === 20) echo "Nagano";
if ($user['place'] === 21) echo "Gifu";
if ($user['place'] === 22) echo "Shizuoka";
if ($user['place'] === 23) echo "Aichi";
if ($user['place'] === 24) echo "Mie";
if ($user['place'] === 25) echo "Shiga";
if ($user['place'] === 26) echo "Kyoto";
if ($user['place'] === 27) echo "Osaka";
if ($user['place'] === 28) echo "Hyogo";
if ($user['place'] === 29) echo "Nara";
if ($user['place'] === 30) echo "Wakayama";
if ($user['place'] === 31) echo "Tottori";
if ($user['place'] === 32) echo "Shimane";
if ($user['place'] === 33) echo "Okayama";
if ($user['place'] === 34) echo "Hiroshima";
if ($user['place'] === 35) echo "Yamaguchi";
if ($user['place'] === 36) echo "Tokushima";
if ($user['place'] === 37) echo "Kagawa";
if ($user['place'] === 38) echo "Ehime";
if ($user['place'] === 39) echo "Kouchi";
if ($user['place'] === 40) echo "Fukuoka";
if ($user['place'] === 41) echo "Saga";
if ($user['place'] === 42) echo "Oita";
if ($user['place'] === 43) echo "Miyazaki";
if ($user['place'] === 44) echo "Nagasaki";
if ($user['place'] === 45) echo "Kumamoto";
if ($user['place'] === 46) echo "Kagoshima";
if ($user['place'] === 47) echo "Okinawa";
if ($user['place'] === 48) echo "other";
    ?></p>
            <p class="inbox_age"><?php
if ($user['age'] === 1) echo "18";
if ($user['age'] === 2) echo "19";                                
if ($user['age'] === 3) echo "20";
if ($user['age'] === 4) echo "21";
if ($user['age'] === 5) echo "22";
if ($user['age'] === 6) echo "23";
if ($user['age'] === 7) echo "24";
if ($user['age'] === 8) echo "25";
if ($user['age'] === 9) echo "26";
if ($user['age'] === 10) echo "27";
if ($user['age'] === 11) echo "28";
if ($user['age'] === 12) echo "29";
if ($user['age'] === 13) echo "30";                                
if ($user['age'] === 14) echo "31";
if ($user['age'] === 15) echo "32";
if ($user['age'] === 16) echo "33";
if ($user['age'] === 17) echo "34";
if ($user['age'] === 18) echo "35";
if ($user['age'] === 19) echo "36";
if ($user['age'] === 20) echo "37";
if ($user['age'] === 21) echo "38";
if ($user['age'] === 22) echo "39";
if ($user['age'] === 23) echo "40";
if ($user['age'] === 24) echo "41";
if ($user['age'] === 25) echo "42";
if ($user['age'] === 26) echo "43";
if ($user['age'] === 27) echo "44";
if ($user['age'] === 28) echo "45";
if ($user['age'] === 29) echo "46";
if ($user['age'] === 30) echo "47";
if ($user['age'] === 31) echo "48";
if ($user['age'] === 32) echo "49";
if ($user['age'] === 33) echo "50";                                
if ($user['age'] === 34) echo "51";
if ($user['age'] === 35) echo "52";
if ($user['age'] === 36) echo "53";
if ($user['age'] === 37) echo "54";
if ($user['age'] === 38) echo "55";
if ($user['age'] === 39) echo "56";
if ($user['age'] === 40) echo "57";
if ($user['age'] === 41) echo "58";
if ($user['age'] === 42) echo "59";
if ($user['age'] === 43) echo "60";                                
if ($user['age'] === 44) echo "61";
if ($user['age'] === 45) echo "62";
if ($user['age'] === 46) echo "63";
if ($user['age'] === 47) echo "64";
if ($user['age'] === 48) echo "65";
if ($user['age'] === 49) echo "66";
if ($user['age'] === 50) echo "67";
if ($user['age'] === 51) echo "68";
if ($user['age'] === 52) echo "69";
       ?>age</p><?php if(empty($user['age'])) {
    echo "未記入";
} ?>
    

<?php } ?>
<style type="text/css">
	.unread{font-weight:bold;}
</style><?php  if ($check == 2) { ?>
    
		<p class="aaaaa<?php if ($conversation['message_date'] > $conversation['conversation_last_view']) { echo ' unread'; } ?>"><a href="index.php?page=view_conversation&conversation_id=<?php echo html_escape($conversation['conversation_id'])?>"><?php
                $text = $conversation['message_text'];
                $limit = 10;
                if(mb_strlen($text) > $limit) { 
                    $title = mb_substr($text,0,$limit);
                    echo $title. '...' ;
                } else { echo html_escape($conversation['message_text']); } ?></a></p>
        <!-- 下記の部分を追加 --><a href="index.php?page=inbox&amp;delete_conversation=<?php echo html_escape($conversation['conversation_id']) ?>" style="float:right;margin-right:10px;font-size:11px;">delete</a>
        </div><?php } ?>
    <?php  if ($check !== 2) { ?>
    
		<p class="aaaaa<?php if ($conversation['message_date'] > $conversation['conversation_last_view']) { echo ' unread'; } ?>"><a href="index.php?page=view_conversation&conversation_id=<?php echo html_escape($conversation['conversation_id'])?>">---------------------------</a></p>
        <!-- 下記の部分を追加 --><a href="index.php?page=inbox&amp;delete_conversation=<?php echo html_escape($conversation['conversation_id']) ?>" style="float:right;margin-right:10px;">delete</a>
        </div><?php } ?>
<hr>
<?php } ?>
    
        
       
             
         <script>
var luminousTrigger = document.querySelectorAll('.lightbox');
if( luminousTrigger !== null ) {
  new LuminousGallery(luminousTrigger);
}
</script>

    <div class="menu2"><a href="index.php?page=member_top"><div class="menu_img"><img src="core/pages/pg_img/search.png"><p>SEARCH</p></div></a>
        <a href="index.php?page=category"><div class="menu_img"><img src="core/pages/pg_img/icontenis.png"><p>CATEGORY</p></div></a>
        <a href="index.php?page=iine"><div class="menu_img"><img src="core/pages/pg_img/heart.png"><p>GOOD</p></div></a>
        <a href="index.php?page=inbox"><div class="menu_img"><img src="core/pages/pg_img/letter.png"><p>INBOX</p></div></a>
        <a href="index.php?page=my_profile"><div class="menu_img"><img src="core/pages/pg_img/mypage.png"><p>MY PAGE</p></div></a>
        
        </div>
</html>