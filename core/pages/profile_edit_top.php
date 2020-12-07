<?php
$conversations = fetch_conversation_summery($mysqli);
$a = 0;?>
<?php foreach ($conversations as $conversation) {?>
        <?php if ($conversation['message_date'] > $conversation['conversation_last_view']) {
    $a += 1;
        } ?>
<?php } ?>
<?php
$id = (int) $_SESSION['user_id'];
$profile_img = select_profile_img($id, $mysqli);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>MATURE（４０代からの恋活マッチング）</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="core/pages/css/member.css">
    <link rel="stylesheet" href="core/pages/css/member_responsible.css">
    <link rel="stylesheet" href="core/pages/css/test.css">
</head>
<body>
    <div class="main_inbox1">
        
        <!-- Demo of material design box shadows based on https://medium.com/@Florian/freebie-google-material-design-shadow-helper-2a0501295a2d -->

<a href="index.php?page=profile_img_edit"><div class="card card-1 edit_top"><img src="core/pages/img/<?php foreach ($profile_img as $img) { ?><?php if ($img['kind'] == 0) { echo html_escape($img['body']); }?><?php } ?>" alt="";><p>Change image</p></div></a>
        <a href="index.php?page=profile_text_edit"><div class="card card-1 edit_top"><img src="core/pages/pg_img/1111.png" alt="";><p>Edit Self-introduction</p></div></a>
        <a href="index.php?page=hobby_select"><div class="card card-1 edit_top"><img src="core/pages/pg_img/2222.png" alt="";><p>Edit interest</p></div></a>
        <a href="index.php?page=profile_edit"><div class="card card-1 edit_top"><img src="core/pages/pg_img/3333.png" alt="";><p>Edit basic information</p></div></a>
       
        </div>
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


    