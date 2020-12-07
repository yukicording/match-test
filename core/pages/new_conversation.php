<?php
$check = 0;
if(!empty(check_exist_ageconfig($mysqli))) {
    $check1 = check_exist_ageconfig($mysqli);
    $check = (int) $check1[0]['flag'];};
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
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    
</head>
<body>

    <main>

<?php
if (isset($_POST['opponent_id'])) {
$id = $_POST['opponent_id'];
$iine_id = $_POST['iine_id'];
}
?>
<?php
// フォームの送信ボタンが押された時に下記を実行
if (isset($_POST['body'])) {

	$errors = array();

	// 宛名の入力ミスがある場合

	if (empty($_POST['body'])) {
		$errors[] = "本文を入力してください。";
	}

	if (empty($errors)) {
		// エラーのない場合
		// echo "エラーはありません。あとでメッセージ送信機能を作ります。";
        $body = $_POST['body'];
		create_conversation($id, $body, $mysqli);
        delete_iine_1($iine_id, $mysqli);
	}
 
}

if (isset($errors)) {
	if (empty($errors)) {
		//ヘッダーに変更
		echo "メッセージを送信しました" . "<a href='index.php?page=inbox'>やりとり一覧へ</a>";
	} else {
		foreach ($errors as $error) {
			echo $error;
		}
	}
}
?><style>
label {
  color: white;  
  background-color: rgb(235,105,150);
  padding: 8px;
  border-radius: 12px;
    margin: 0 auto;
    margin-top: 10px;
    margin-bottom: 10px;
    font-size: 20px;
    font-weight: bolder;
}
    
            @media (max-width: 767px) {
                label {
  color: white;  
  background-color: rgb(235,105,150);
  padding: 8px;
  border-radius: 12px;
  margin: 0 auto;
    margin-top: 10px;
    margin-bottom: 10px;
    font-size: 17px;
    font-weight: bolder;
}
            }
            
</style>
        <div class="new_conversation_textarea"><p>メッセージを送ってみましょう！</p>
<form action="" method="post">
	<textarea name="body" value="<?php if(isset($_POST['body'])) { echo html_escape(htmlentities($_POST['body'])); } ?>"></textarea>
    <input type="hidden" name="opponent_id" value="<?php echo html_escape("$id") ?>">
    <input type="hidden" name="iine_id" value="<?php echo html_escape("$iine_id") ?>">
	<br>
    <?php  if ($check == 2) { ?>
    <br><label for="upload_image1">
    メッセージ送信
    <input type=submit value="いいね"  id="upload_image1" style="display:none;">
</label>

    <?php } ?>
            
    
</form><?php  if ($check !== 2) { ?>
            <label for="pop">メッセージ送信
        <button style="display:none;" id="pop" ></button></label><?php } ?>
</div>
 
 
<div class="popup">
    <div class="content">
        <p>年齢確認が完了していません。</p>
        <button id="close">閉じる</button>
    </div>
</div>

        
        </main>
    <script>$('button').on('click',function(){
    $('.popup').addClass('show').fadeIn();
});
    
  
$('#close').on('click',function(){
    $('.popup').fadeOut();
});</script>
    </body>
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
