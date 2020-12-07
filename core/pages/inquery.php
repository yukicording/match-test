<?php
$conversations = fetch_conversation_summery($mysqli);
update_login($mysqli);
$a = 0;
 if(isset($_POST['check'])){
    $body =  $_POST['body'];
    $title =  $_POST['title'];
    specific_information_get($title,$body,$mysqli);
    echo "おっけ";
}?>
<?php foreach ($conversations as $conversation) {?>
        <?php if ($conversation['message_date'] > $conversation['conversation_last_view']) {
    $a += 1;
        }
                                                 

?>
<?php } ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>e-dea（イーデア）－大学恋活マッチング</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="core/pages/css/setting.css"><link rel="stylesheet" href="core/pages/css/member_top.css"><link rel="shortcut icon" href="core/pages/pg_img/logo.jpg"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head><body><div class="main_setting"><h1>お問い合わせ</h1><p style="text-align:left;">以下にお問い合わせ内容をご記入の上、送信をお願いいたします。なお、画像ファイル等の添付が必要な場合はyukiaakana@gmail.comまでメールの方をお願いいたします。</p><form action="#" method="post" ><input type="text" placeholder="タイトル" name="title"><br><textarea style="width:70%;height:100px;" name="body"></textarea><br><input type="submit" value="送信" name="check"></form></div>         <script>
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
        
        </div></body></html>