<?php
$conversations = fetch_conversation_summery($mysqli);
$a = 0;
$check = 0;
if(!empty(check_exist_ageconfig($mysqli))) {
    $check1 = check_exist_ageconfig($mysqli);
    $check = (int) $check1[0]['flag'];};
?>
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

    <main>
<?php
if (isset($_POST['profile_text'])) {
    $text = $_POST['profile_text'];
    $id = (int) $_SESSION['user_id'];
    update_profile_text($text, $id, $mysqli);
    
header('Location: index.php?page=profile_edit_top
');
}

?>
 


<?php 
$id = (int) $_SESSION['user_id'];
$users = my_profile_get($id, $mysqli);
?>
<?php foreach ($users as $user) { ?>
        <div class="profile_text_edit">
<h2 style="text-align:center;margin-bottom:40px;margin-top:40px;">Self-introduction</h2>
<form action="index.php?page=profile_text_edit" method="post">
    <textarea name="profile_text" style="width:80%;height:300px;"><?php  if (empty($check)) { ?>年齢確認が終了していません<?php } ?><?php  if (!empty($check)) { ?><?php  if ($check==1) { ?>Age confirmation is under inspection.（年齢確認が終了していません）<?php } ?><?php  if ($check==2) { ?><?php echo nl2br(html_escape($user['profile_text'])) ?><?php } ?><?php  if ($check==3) { ?>Age confirmation is under inspection.（年齢確認が終了していません）<?php } ?>
        <?php } ?></textarea><br>

            <?php  if (!empty($check)) { ?>
        
        <?php  if ($check==1) { ?>
        <?php } ?>
        <?php  if ($check==2) { ?>
        <input type="submit" value="update" style="margin-top:10px;">
           
<?php } ?>
            
    </form><?php } ?>
        <?php  if ($check==3) { ?><?php } ?>
        <?php } ?>
        </div>
        <a href="index.php?page=profile_edit_top">back</a>
   

        </main>
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
    </body>
</html>