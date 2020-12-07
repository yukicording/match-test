<?php
if (isset($_POST['iine'])) {
    $id = $_POST['iine'];
    $id1 = $_SESSION['user_id'];
    insert_iine($id, $id1, $mysqli);
}?>

<?php if(isset($_POST['arigato'])) {
    $arigato = $_POST['arigato'];
    $id = $_POST['arigato'];
    success_matti($arigato, $mysqli);
}?>

<?php 
        if(isset($_GET['id'])) {
$id = $_GET['id'];}
$users = my_profile_get($id, $mysqli);
?>

<?php
$profile_img = select_other_profile_img($id, $mysqli);
?>

<?php  $hobbys = select_profile_hobby($id, $mysqli);?>
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
    <link rel="stylesheet" href="core/pages/css/luminous-basic.min.css">
<script src="core/pages/js/Luminous.min.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
      <div class="my_profile_wrap">
<?php foreach ($users as $user) { 
    ?>
           
          <div class="exampleaaa"><a href="core/pages/img/<?php foreach ($profile_img as $img) { ?><?php if ($img['kind'] == 0) { echo html_escape($img['body']); }?><?php } ?>" data-luminous-multi><img src="core/pages/img/<?php foreach ($profile_img as $img) { ?><?php if ($img['kind'] == 0) { echo html_escape($img['body']); }?><?php } ?>" alt=""></a>
   <div class="qwe"><p><?php echo html_escape($user['user_name']) ?>（<?php
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
       ?>）</p><a href="core/pages/img/<?php foreach ($profile_img as $img) { ?><?php if ($img['kind'] == 3) { echo html_escape($img['body']); }?><?php } ?>" data-luminous-multi><img src="core/pages/img/<?php foreach ($profile_img as $img) { ?><?php if ($img['kind'] == 3) { echo html_escape($img['body']); }?><?php } ?>" style="opacity:1;" alt=""></a></div>
              <div class="qwee"><a href="core/pages/img/<?php foreach ($profile_img as $img) { ?><?php if ($img['kind'] == 1) { echo html_escape($img['body']); }?><?php } ?>" data-luminous-multi><img src="core/pages/img/<?php foreach ($profile_img as $img) { ?><?php if ($img['kind'] == 1) { echo html_escape($img['body']); }?><?php } ?>" alt="" ></a></div>
              <div class="qweee"><a href="core/pages/img/<?php foreach ($profile_img as $img) { ?><?php if ($img['kind'] == 2) { echo html_escape($img['body']); }?><?php } ?>" data-luminous-multi><img src="core/pages/img/<?php foreach ($profile_img as $img) { ?><?php if ($img['kind'] == 2) { echo html_escape($img['body']); }?><?php } ?>" alt="" ></a></div>
     </div>
    <div class="my_profile_text">
              <h4>login-date</h4>
          <div class="color" style="margin-top:10px;background-color:<?php 
    $date = date('Y-m-d H:i:s');
    $from = strtotime("$date");
    $to = strtotime($user['login']);
    $check = $from - $to;
    if($check <= 86400){
        echo "#00ff00";}
    elseif ($check >= 86400 and $check <= 604800){
        echo "yellow";}
    else{
        echo "gray";}?>;"></div><p><?php if($check <= 86400){
        echo "Within 24hour";}
    elseif ($check >= 86400 and $check <= 604800){
        echo "Within one week";}
    else{
        echo "Over a week ago";}?></p></div>
 <div class="my_profile_text">  
    <h4>Self-introduction</h4>
<p><?php echo nl2br(html_escape($user['profile_text'])) ?></p>
</div>
          
 <div class="my_profile_text">  
    <h4>Interest</h4>
    <ul class="horizontal-list">
        
  
            <?php foreach ($hobbys as $hobby) { ?>
            <li class="item">
      <img src="core/pages/pg_img/<?php 
if ($hobby['hobby_id'] === 1) echo "hobby_movie.jpg";
if ($hobby['hobby_id'] === 2) echo "hobby_karaoke.jpg";                                
if ($hobby['hobby_id'] === 3) echo "hobby_camera.jpg";
if ($hobby['hobby_id'] === 4) echo "hobby_theater.jpg";
if ($hobby['hobby_id'] === 5) echo "hobby_art.jpg";
if ($hobby['hobby_id'] === 6) echo "hobby_music.jpg";
if ($hobby['hobby_id'] === 7) echo "hobby_creator.jpg";
if ($hobby['hobby_id'] === 8) echo "hobby_gaming.jpg";
                if ($hobby['hobby_id'] === 9) echo "hobby_anime.jpg";
                if ($hobby['hobby_id'] === 10) echo "hobby_book.jpg";
                if ($hobby['hobby_id'] === 11) echo "hobby_travel.jpg";
                if ($hobby['hobby_id'] === 12) echo "hobby_exercise.jpg";
                if ($hobby['hobby_id'] === 13) echo "hobby_jogging.jpg";
                if ($hobby['hobby_id'] === 14) echo "hobby_car.jpg";
                if ($hobby['hobby_id'] === 15) echo "hobby_byecicle.png";
                if ($hobby['hobby_id'] === 16) echo "hobby_dance.jpg";
                if ($hobby['hobby_id'] === 17) echo "hobby_golf.jpg";
                if ($hobby['hobby_id'] === 18) echo "hobby_dart.jpg";
    if ($hobby['hobby_id'] === 19) echo "hobby_boxing.jpg";
    if ($hobby['hobby_id'] === 20) echo "hobby_fitness.jpg";
    if ($hobby['hobby_id'] === 21) echo "hobby_wedding.jpg";
    if ($hobby['hobby_id'] === 22) echo "hobby_sweet.jpg";
    if ($hobby['hobby_id'] === 23) echo "hobby_cock.jpg";
    if ($hobby['hobby_id'] === 24) echo "hobby_indoor.jpg";
    if ($hobby['hobby_id'] === 25) echo "hobby_norway.jpg";
    if ($hobby['hobby_id'] === 26) echo "hobby_owarai.jpg";
    if ($hobby['hobby_id'] === 27) echo "hobby_zakka.jpg";
    if ($hobby['hobby_id'] === 28) echo "hobby_mountain.jpg";
    if ($hobby['hobby_id'] === 29) echo "hobby_onsen.jpg";
    if ($hobby['hobby_id'] === 30) echo "hobby_ferris-wheel.jpg";
    
    if ($hobby['hobby_id'] === 31) echo "hobby_alchool.jpg";
    if ($hobby['hobby_id'] === 32) echo "hobby_talk.jpg";
                ?>">
                <br><p><?php 
if ($hobby['hobby_id'] === 1) echo "MOVIE";
if ($hobby['hobby_id'] === 2) echo "KAROKE";                                
if ($hobby['hobby_id'] === 3) echo "CAMERA";
if ($hobby['hobby_id'] === 4) echo "THEATER";
if ($hobby['hobby_id'] === 5) echo "ART";
if ($hobby['hobby_id'] === 6) echo "MUSIC";
if ($hobby['hobby_id'] === 7) echo "CREATIVE";
if ($hobby['hobby_id'] === 8) echo "GAME";
if ($hobby['hobby_id'] === 9) echo "CARTOON";
if ($hobby['hobby_id'] === 10) echo "NOVEL";                                
if ($hobby['hobby_id'] === 11) echo "TRAVEL";
if ($hobby['hobby_id'] === 12) echo "EXERCISE";
if ($hobby['hobby_id'] === 13) echo "JOGGING";
if ($hobby['hobby_id'] === 14) echo "CAR";
if ($hobby['hobby_id'] === 15) echo "BYECICLE";
if ($hobby['hobby_id'] === 16) echo "DANCE";
if ($hobby['hobby_id'] === 17) echo "GOLF";
if ($hobby['hobby_id'] === 18) echo "DART";                                
if ($hobby['hobby_id'] === 19) echo "COMBAT SPORT";
if ($hobby['hobby_id'] === 20) echo "GYM";
if ($hobby['hobby_id'] === 21) echo "WEDDING";
if ($hobby['hobby_id'] === 22) echo "SWEET";
if ($hobby['hobby_id'] === 23) echo "COOK";
if ($hobby['hobby_id'] === 24) echo "INDOOR";
if ($hobby['hobby_id'] === 25) echo "AMIMAL";
if ($hobby['hobby_id'] === 26) echo "COMEDY";                                
if ($hobby['hobby_id'] === 27) echo "MISCELLANEOUS GOODS";
if ($hobby['hobby_id'] === 28) echo "HIKING";
if ($hobby['hobby_id'] === 29) echo "ONSEN";
if ($hobby['hobby_id'] === 30) echo "AMUSEMENT PARK";
if ($hobby['hobby_id'] === 31) echo "ALCHOOL";
if ($hobby['hobby_id'] === 32) echo "TALK";?>
</p>
    </li>
            <?php } ?>
  </ul>
</div>
 <div class="my_profile_text">  
    <h4>Basic information</h4>
<p>name：<?php if(!empty($user['user_name'])) {echo html_escape($user['user_name']);}  ?></p><hr>
     <?php if(!empty($user['request'])) {echo"<p>Purpose of use：";
                                 if ($user['request'] === 1) echo "Make friends";
                                 if ($user['request'] === 2) echo "Looking for a lover";
                                 if ($user['request'] === 3) echo "learning language";echo"</p><hr>";}
                                 ?>
<p>place：<?php
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
    ?></p><hr>
<p>age：<?php if(!empty($user['age'])) {
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
if ($user['age'] === 52) echo "69";}
?>age</p><hr>
     
<?php if(!empty($user['income'])) {echo "<p>income：";
                                 if ($user['income'] === 1) echo "less than 3,000,000 yen";
                                 if ($user['income'] === 2) echo "3,000,000～5,000,000 yen";
                                 if ($user['income'] === 3) echo "5,000,000～7,000,000 yen";
                                 if ($user['income'] === 4) echo "7,000,000～9,000,000 yen";
                                 if ($user['income'] === 5) echo "9,000,000～1,200,000 yen";
                                 if ($user['income'] === 6) echo "more than 1200 yen";
                                 if ($user['income'] === 7) echo "Other";echo "</p><hr>";}
                                 ?>
     <?php if(!empty($user['work'])) {echo "<p>profession：";
                                 if ($user['work'] === 1) echo "
Listed company";
                                 if ($user['work'] === 2) echo "Financial industry";
                                 if ($user['work'] === 3) echo "Civil servant";
                                 if ($user['work'] === 4) echo "consulting";
                                 if ($user['work'] === 5) echo "Management / Executives";
                                 if ($user['work'] === 6) echo "
Major company";
                                 if ($user['work'] === 7) echo "foreign-owned enterprise";
                                 if ($user['work'] === 8) echo "trading company";
                                 if ($user['work'] === 9) echo "Finance";
                                 if ($user['work'] === 10) echo "Doctor";
                                 if ($user['work'] === 11) echo "Caregiver";
                                 if ($user['work'] === 12) echo "pharmacist";
                                 if ($user['work'] === 13) echo "
lawyer";
                                 if ($user['work'] === 14) echo "
Accountant";
                                 if ($user['work'] === 15) echo "pilot";
                                 if ($user['work'] === 16) echo "
Flight attendant";
                                 if ($user['work'] === 17) echo "
Advertising";
                                 if ($user['work'] === 18) echo "Media";
                                 if ($user['work'] === 19) echo "education";
                                 if ($user['work'] === 20) echo "IT";
                                 if ($user['work'] === 21) echo "Food industry";
                                 if ($user['work'] === 22) echo "Travel agency";
                                 if ($user['work'] === 23) echo "
Pharmaceutical";
                                 if ($user['work'] === 24) echo "insurance";
                                 if ($user['work'] === 25) echo "real estate business";
                                 if ($user['work'] === 26) echo "Construction industry";
                                 if ($user['work'] === 27) echo "Telecommunications industry";
                                 if ($user['work'] === 28) echo "Distribution industry";
                                 if ($user['work'] === 29) echo "WEB";
                                 if ($user['work'] === 30) echo "
bridal";
                                 if ($user['work'] === 31) echo "creator";
                                 if ($user['work'] === 32) echo "Hospitality industry";
                                 if ($user['work'] === 33) echo "Reception";
                                 if ($user['work'] === 34) echo "Cooks";
                                 if ($user['work'] === 35) echo "Apparel industry";
                                 if ($user['work'] === 36) echo "Cosmetics industry";
                                 if ($user['work'] === 37) echo "Entertainment";
                                 if ($user['work'] === 38) echo "Research position";
                                 if ($user['work'] === 39) echo "Entertainment / Model";
                                 if ($user['work'] === 40) echo "Engineer";
                                 if ($user['work'] === 41) echo "athlete";
                                 if ($user['work'] === 42) echo "Secretary"; 
                                 if ($user['work'] === 43) echo "
Clerk"; 
                                 if ($user['work'] === 44) echo "
Welfare / caregiver"; 
                                 if ($user['work'] === 45) echo "Childminder"; 
                                 if ($user['work'] === 46) echo "Office worker"; 
                                 if ($user['work'] === 47) echo "student"; 
                                 if ($user['work'] === 48) echo "freelancer"; 
                                 if ($user['work'] === 49) echo "
Data scientist"; 
                                 if ($user['work'] === 50) echo "Architect"; 
                                 if ($user['work'] === 51) echo "Hairdresser"; 
                                 if ($user['work'] === 52) echo "Dentist"; 
                                 if ($user['work'] === 53) echo "nurse"; 
                                 if ($user['work'] === 54) echo "other";echo "</p><hr>";}
                                 ?>
     <?php if(!empty($user['education'])) {echo "<p>Educational background：";
                                 if ($user['education'] === 1) echo "
High school graduate";  
                                 if ($user['education'] === 2) echo "Two-year college degree";
                                 if ($user['education'] === 3) echo "
Technical Associate graduate";
                                 if ($user['education'] === 4) echo "University graduate";
                                 if ($user['education'] === 5) echo "other";echo "</p><hr>";}
                                 
    ?>
     <?php if(!empty($user['holiday'])) {echo "<p>Holiday：";
                                 if ($user['holiday'] === 1) echo "sunday/saturday";
                                 if ($user['holiday'] === 2) echo "Weekdays";
                                 if ($user['holiday'] === 3) echo "
Irregular";
                                 if ($user['holiday'] === 4) echo "other";echo "</p><hr>";}
    ?>
     <?php if(!empty($user['size'])) {echo "<p>Figure：";
                                 if ($user['size'] === 1) echo "slim";
                                 if ($user['size'] === 2) echo "slender";
                                 if ($user['size'] === 3) echo "skinny";
                                 if ($user['size'] === 4) echo "lean";
                                 if ($user['size'] === 5) echo "thick";
                                 if ($user['size'] === 6) echo "voluptuous";
                                 if ($user['size'] === 7) echo "stocky";
                                 if ($user['size'] === 8) echo "large";echo"</p><hr>";}
    ?>
     <?php if(!empty($user['cigarette'])) {echo"<p>tobacco：";
                                 if ($user['cigarette'] === 1) echo "often";
                                 if ($user['cigarette'] === 2) echo "rarely";
                                 if ($user['cigarette'] === 3) echo "not";echo"</p><hr>";}
    ?>
     <?php if(!empty($user['alchool'])) { echo"<p>Alchool：";
                                 if ($user['alchool'] === 1) echo "everyday";
                                 if ($user['alchool'] === 2) echo "often";
                                 if ($user['alchool'] === 3) echo "rarely";
                                 if ($user['alchool'] === 4) echo "not";echo"</p><hr>";}
    ?>
     <?php if(!empty($user['cohabitants'])) {echo "<p>Housemate：";
                                 if ($user['cohabitants'] === 1) echo "
Living alone";
                                 if ($user['cohabitants'] === 2) echo "living with my family";
                                 if ($user['cohabitants'] === 3) echo "living with my brother or sister";
                                 if ($user['cohabitants'] === 4) echo "living with my friends";
                                 if ($user['cohabitants'] === 5) echo "living with my pet";
                                 if ($user['cohabitants'] === 6) echo "other";echo"</p><hr>";}
                                 ?>
</div>       
 


<?php } ?>

    
        </div>
    
        <script>
var luminousTrigger = document.querySelectorAll('.lightbox');
if( luminousTrigger !== null ) {
  new LuminousGallery(luminousTrigger);
}
</script>
    <div class="menu1">
        
        <style>
label {
  color: white;  
  background-color: rgb(235,105,150);
  padding: 6px;
  border-radius: 12px;
    font-size: 20px;
text-align: center;
}
    
            @media (max-width: 767px) {
                label {
  color: white;  
  background-color: rgb(235,105,150);
  padding: 6px;
  border-radius: 12px;
    font-size: 17px;
}
            }
            
</style>
   <?php 
    $user1 = check_exist_message_member($mysqli, $id);
    $user2 = check_exist_iine($mysqli, $id);
    $user3 = check_exist_arigato($mysqli, $id);
    $user4 = check_exist_matting($mysqli, $id);
        ?>
   <?php  if (empty($user1)) { ?>
        <?php  if (empty($user2)) { ?>
        <?php  if (!empty($user3)) { ?>
        <label for="upload_image1">
    THANK
            <form action="index.php?page=other_profile_view" method="post" style="display:none;">
    <input type="hidden" name="arigato" value="<?php echo html_escape("$id") ?>">
    <input type=submit value="ありがとう"  id="upload_image1" style="display:none;">
</form>
</label>
        
       
        <?php } ?>
        <?php  if (empty($user3)) { ?>
        <?php  if (!empty($user4)) { ?>
        <label for="upload_image1">
    MESSAGE
            <form action="index.php?page=new_conversation" method="post" style="display:none;">
    <input type="hidden" name="opponent_id" value="<?php echo html_escape("$id") ?>">
    <input type=submit value="いいね"  id="upload_image1" style="display:none;">
</form>
</label>
        

        <?php } ?>
        <?php  if (empty($user4)) { ?>
        <label for="upload_image1">
    いいね！
            <form action="index.php?page=other_profile_view" method="post" style="display:none;">
    <input type="hidden" name="iine" value="<?php echo html_escape("$id") ?>">
    <input type=submit value="いいね"  id="upload_image1" style="display:none;">
</form>
</label>
        <?php } ?>
        
        <?php } ?>
        
        <?php } ?>
        <?php  if (!empty($user2)){ ?>
        <label for="upload_image1">
    
Liked
</label>
        <?php } ?>
<?php } ?>
    <?php 
    if (!empty($user1)) {$id = $user1[0]['conversation_id'];?>
        
        <a href='index.php?page=view_conversation&conversation_id=<?php echo html_escape("$id") ?>'　style="display:none;"　id="upload_image1">
        <label for="upload_image1">
            INBOX
</label></a>
  <?php  }?>
    
         
        <!-- いいね送信済みも作る-->
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
              <script>
    const luminousOpts = {
      caption: (trigger) => {
        return trigger.querySelector("img").getAttribute("alt");
      }
    };

    const galleryOpts = {
      arrowNavigation: true
    };

    new LuminousGallery(
      document.querySelectorAll("a[data-luminous-multi]"),
      galleryOpts,
      luminousOpts
    );
    </script>
    </body>
</html>


    