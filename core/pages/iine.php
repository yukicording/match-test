<?php
$conversations = fetch_conversation_summery($mysqli);
$a = 0;?>
<?php foreach ($conversations as $conversation) {?>
        <?php if ($conversation['message_date'] > $conversation['conversation_last_view']) {
    $a += 1;
        } ?>
<?php } ?>

<?php if(isset($_POST['arigato'])) {
    $arigato = $_POST['arigato'];
    success_matti($arigato, $mysqli);
}?>
<?php if(isset($_POST['sorry'])) {
    $sorry = $_POST['sorry'];
    false_matti($sorry, $mysqli);
}?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>MATURE（４０代からの恋活マッチング）</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="core/pages/css/member.css">
    <link rel="stylesheet" href="core/pages/css/member_responsible.css">
     <link rel="stylesheet" href="core/pages/css/member_top.css"><link rel="shortcut icon" href="core/pages/pg_img/logo.jpg"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
 
<h3 class="h5h5" style="text-align:center;">GOOD FROM OTHER MEMBERS</h3>
    
        <h4 class="h4_iine"><?php
        $iine = select_iine($mysqli);
        ?>
        <?php
        if(empty($iine)) {
            echo "<p>There is not any good.</p>" ;
        }?>     </h4>
        <?php
        if(!empty($iine)) {?>
       <?php foreach ($iine as $conversation) {?>
<?php
$iine_id = $conversation['id'];
$id = $conversation['user_id'];
$users = my_profile_get($id, $mysqli);?>
<?php
$profile_img = select_profile_img1($id, $mysqli);
?>

<?php foreach ($profile_img as $img) { ?>
        <div class="iine"><div class="iine_image">
            <a href="index.php?page=other_profile_view&id=<?php echo $id ?>">                
                <img src="core/pages/img/<?php echo $img['body'] ?>" alt="プロフィール画像" width="50px" height="50px"></a>
            
<?php } ?>
            <div class="iine_profile">
<?php foreach ($users as $user) { ?>
            <div class="iine_name"><?php echo $user['user_name'] ?></div>
   
            <div class="iine_age"><?php
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
       ?>age</div></div>
    

<?php } ?></div>
            <div class="iine_content">
<form action="index.php?page=iine" method="post">
            <input type="hidden" name="arigato" value="<?php echo "$iine_id" ?>">
            <input type="submit" class="submit_btn" value="GOOD">
            </form>
        <form action="index.php?page=iine" method="post">
        <input type="hidden" name="sorry" value="<?php echo "$iine_id" ?>">
            <input type="submit" value="not good">
            </form></div></div>
        <!-- 下記の部分を追加 -->
<?php } ?> <?php } ?>
        


        
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


    