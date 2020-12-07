
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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>


	<title>MATURE（４０代からの恋活マッチング）</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="core/pages/css/member.css">
     <link rel="stylesheet" href="core/pages/css/member_responsible.css">
    
    
    </head>
<body onLoad="test()">


        
    <?php
    $conversation_id = $_GET['conversation_id'];
    $opponent_id_get = opponent_id_get($conversation_id, $mysqli);
    $opponent_id = $opponent_id_get[0]["opponent_id"];
    $id = $opponent_id;
    $users1 = my_profile_get($id, $mysqli);
    $profile_img1 = select_other_profile_img($id, $mysqli);
    $id = 0;
    
$errors = array();
    
if (isset($_POST['message'])){
 $str =  $_POST['message'];
//検索しやすいように文字列を整える
$target = mb_strtolower($str, 'UTF-8');
$target = mb_convert_kana($target, 'KVas', 'UTF-8');
$target = preg_replace('/\s|、|。/', '', $target);

$flag = 0;

//許可ワードを検索対象から外す
$ok_words = array('フライパン','コーヒーゼリー');

foreach($ok_words as $ok_word){
	if(mb_strpos($target, $ok_word) !== FALSE){
	$target = str_replace($ok_word, '*', $target);
	}
}

//禁止ワードをチェックする
$ng_words = array('セックス','オマンコ');

foreach($ng_words as $ng_word){
	if(mb_strpos($target, $ng_word) !== FALSE){
		$flag = 1;
        $ng_word1 = $ng_word;
		break;
    }
}

if($flag !== 0){
	$errors[] = "禁止ワードが含まれています";
}


}

// エラーがないか、true or falseで返す
$valid_conversation = (isset($_GET['conversation_id']) && validate_conversation_id($_GET['conversation_id'], $mysqli));

if ($valid_conversation === false) {
	$errors[] = "IDエラーが発生しました";
}

if (isset($_POST['message'])) {
	if (empty($_POST['message'])) {
		$errors[] = "メッセージを入力してください。";
	}
	if (empty($errors)) {
		$text = $_POST['message'];
            add_conversation_message($_GET['conversation_id'], $text, $mysqli);
	}
}

if (!empty($errors)) {
	foreach ($errors as $error) {
		echo $error;
	}
}

if ($valid_conversation) {

	if (isset($_POST['message'])) {
		update_conversation_last_view($_GET['conversation_id'], $mysqli);
		$messages = array_reverse(fetch_conversation_messages($_GET['conversation_id'], $mysqli));
	} else {
		$messages = array_reverse(fetch_conversation_messages($_GET['conversation_id'], $mysqli));
		update_conversation_last_view($_GET['conversation_id'], $mysqli);
	}
	?>
    <?php foreach ($users1 as $user) { ?>
    <div class="view_top"><div class="view_top_return"><a href="index.php?page=inbox">inbox</a></div><a href="index.php?page=other_profile_view&id=<?php echo html_escape($opponent_id) ?>"><img src="core/pages/img/<?php foreach ($profile_img1 as $img) { ?><?php if ($img['kind'] == 0) { echo html_escape($img['body']); }?><?php } ?>" alt="">
        </a><div></div><p><?php echo html_escape($user['user_name']) ?>（<?php
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
    ?>／<?php
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
       ?>）</p></div>
    <?php }?>
<div class="line-bc">
    
	<?php foreach ($messages as $message) { ?>	
<?php if ($message['user_id'] != $_SESSION['user_id']) { ?>
<?php
$id = $message['user_id'];
      
$profile_img = select_profile_img1($id, $mysqli);
?>
  <!--②左コメント始-->
<!--①LINE会話全体を囲う-->
<div class="balloon6">
    <div class="faceicon">
      <?php foreach ($profile_img as $img) { ?>
            <a href="index.php?page=other_profile_view&id=<?php echo html_escape($id) ?>">
                <img src="core/pages/img/<?php $img_body = $img['body'];
    echo html_escape($img['body']); ?>" alt="プロフィール画像"></a><?php } ?>
    </div>
    <div class="chatting">
      <div class="says">
        <p><?php  if ($check == 2) { ?><?php echo nl2br(html_escape($message['message_text'])) ?><?php } ?><?php  if ($check !== 2) { ?>----------<?php } ?></p>
      </div>
    </div>
  </div>
    <?php } ?>
  <!--②/左コメント終-->
  <!--③右コメント始-->
    <?php if ($message['user_id'] == $_SESSION['user_id']) { ?>
  <div class="mycomment">
    <p>
  <?php echo nl2br(html_escape($message['message_text'])) ?>
    </p>
  </div>
    
   <?php } ?>
    
  <!--/③右コメント終-->
  <?php 

} ?><?php 

} ?>
 
<br><br><br><br><br><br><br>
    <a href="#"><p style="background-color: pink;text-align: center; font-weight:bold;padding: 20px;">リロード</p></a>
    </div>
    

    
    <style>
label {
  border-radius: 12px;
    margin-top: 10px;
    position: absolute;
    right: 8px;
    bottom: 5px;
    font-size: 13px;
    opacity: 0.5;
}
</style>

    
    

    <div class="menu"><?php  if ($check == 2) { ?>
   <form action="" method="post">
        <textarea class="acx" name="message" placeholder="input message"></textarea><br>
       <label for="upload_image1">
    SEND
    <input type="submit" value="送信" id="upload_image1" style="display:none;">
</label>
         </form><?php } ?><?php  if ($check !== 2) { ?>年齢確認がまだすんでいません<?php } ?>
    </div>
    <script>
function test(){
  var a = document.documentElement;
  var y = a.scrollHeight - a.clientHeight;
  window.scroll(0, y);
}
        
</script>
    </body> 
</html>


