
<?php
$conversations = fetch_conversation_summery($mysqli);
$a = 0;?>
<?php foreach ($conversations as $conversation) {?>
        <?php if ($conversation['message_date'] > $conversation['conversation_last_view']) {
    $a += 1;
        } ?>
<?php } ?>
<?php  
$id = (int) $_SESSION['user_id'];$hobbys = select_profile_hobby($id, $mysqli);?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>e-dea（イーデア）－大学恋活マッチング</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="core/pages/css/member_top.css"><link rel="shortcut icon" href="core/pages/pg_img/logo.jpg"> 
         <link rel="stylesheet" href="core/pages/css/member.css">
        <link rel="stylesheet" href="core/pages/css/member_responsible.css">
    <link rel="stylesheet" href="core/pages/css/member_top.css"><link rel="shortcut icon" href="core/pages/pg_img/logo.jpg">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head><body><div class="hobby_wrap"><h4 >Your interest</h4><a href="index.php?page=hobby_select">   (edit)</a>
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
    </div><h4 style="text-align: center">Culuture</h4>
    <div class="container">
          <div class="bg bg1"><a href="index.php?page=hobby_search&hobby=1">
  <div class="box">
    <p>MOVIE</p>
              </div></a></div>
    <div class="bg bg21"><a href="index.php?page=hobby_search&hobby=2">
  <div class="box">
    <p>KARAOKE</p>
        </div></a></div>
    <div class="bg bg25"><a href="index.php?page=hobby_search&hobby=3">
  <div class="box">
    <p>PHOTO</p>
        </div></a></div>
        <div class="bg bg27"><a href="index.php?page=hobby_search&hobby=4">
  <div class="box">
    <p>THEATER</p>
            </div></a></div>
    <div class="bg bg4"><a href="index.php?page=hobby_search&hobby=5">
  <div class="box">
    <p>ART</p>
        </div></a></div>
 
                      <div class="bg bg3"><a href="index.php?page=hobby_search&hobby=6">
  <div class="box">
    <p>MUSIC</p>
                          </div></a></div>
                      
                      <div class="bg bg5"><a href="index.php?page=hobby_search&hobby=7">
  <div class="box">
    <p>CREATIVE</p>
                          </div></a></div>
         <div class="bg bg8"><a href="index.php?page=hobby_search&hobby=8">
  <div class="box">
    <p>GAME</p>
             </div></a></div>
          <div class="bg bg9"><a href="index.php?page=hobby_search&hobby=9">
  <div class="box">
    <p>CARTOON</p>
              </div></a></div>
<div class="bg bg32"><a href="index.php?page=hobby_search&hobby=10">
  <div class="box">
    <p>NOVEL</p>
    </div></a></div>
                      </div>
    <h4 style="text-align: center">Active</h4>
    <div class="container">
                              <div class="bg bg6"><a href="index.php?page=hobby_search&hobby=11">
  <div class="box">
    <p>TRAVEL</p>
                                  </div></a></div>
                             <div class="bg bg2"><a href="index.php?page=hobby_search&hobby=12">
  <div class="box">
    <p>EXERCISE</p>
                                 </div></a></div>
                     

                      <div class="bg bg12"><a href="index.php?page=hobby_search&hobby=13">
  <div class="box">
    <p>JOGGING</p>
                          </div></a></div>
  
                      <div class="bg bg14"><a href="index.php?page=hobby_search&hobby=14">
  <div class="box">
      <p>CAR</p></div></a>
  </div><div class="bg bg17"><a href="index.php?page=hobby_search&hobby=15">
  <div class="box">
    <p>BYECICLE</p>
              </div></a></div><div class="bg bg18"><a href="index.php?page=hobby_search&hobby=16">
  <div class="box">
    <p>DANCE</p>
        </div></a></div> <div class="bg bg22"><a href="index.php?page=hobby_search&hobby=17">
  <div class="box">
    <p>GOLF</p>
        </div></a></div><div class="bg bg29"><a href="index.php?page=hobby_search&hobby=18">
  <div class="box">
    <p>DART</p>
        </div></a></div>
                      <div class="bg bg30"><a href="index.php?page=hobby_search&hobby=19">
  <div class="box">
    <p>COMBAT SPORT</p>
                          </div></a></div>
                      <div class="bg bg31"><a href="index.php?page=hobby_search&hobby=20">
  <div class="box">
    <p>TRANING</p>
                          </div></a></div></div><h4 style="text-align: center">Character</h4>
    <div class="container">
                            <div class="bg bg13"><a href="index.php?page=hobby_search&hobby=21">
  <div class="box">
    <p>WEDDING</p>
                                </div></a></div>
        <div class="bg bg11"><a href="index.php?page=hobby_search&hobby=22">
  <div class="box">
    <p>SWEET</p>
            </div></a></div>
                    <div class="bg bg10"><a href="index.php?page=hobby_search&hobby=23">
  <div class="box">
    <p>COOK</p>
                        </div></a></div>
        <div class="bg bg7"><a href="index.php?page=hobby_search&hobby=24">
  <div class="box">
    <p>INDOOR</p>
            </div></a></div>
                      <div class="bg bg15"><a href="index.php?page=hobby_search&hobby=25">
  <div class="box">
    <p>ANIMAL</p>
                          </div></a></div>
                      <div class="bg bg16"><a href="index.php?page=hobby_search&hobby=26">
  <div class="box">
    <p>COMEDY</p>
                          </div></a></div>
          
                      
                      <div class="bg bg19"><a href="index.php?page=hobby_search&hobby=27">
  <div class="box">
    <p>MISCELLANEOUS GOODS</p>
                          </div></a></div>
                      <div class="bg bg20"><a href="index.php?page=hobby_search&hobby=28">
  <div class="box">
    <p>HIKING</p>
                          </div></a></div>
                      
                     
                      <div class="bg bg23"><a href="index.php?page=hobby_search&hobby=29">
  <div class="box">
    <p>HOT SPRING</p>
                          </div></a></div>
                      <div class="bg bg24"><a href="index.php?page=hobby_search&hobby=30">
  <div class="box">
    <p>AMUSEMENT PARK</p>
                          </div></a></div>
                      
                      <div class="bg bg26"><a href="index.php?page=hobby_search&hobby=31">
  <div class="box">
    <p>ALCHOOL</p>
                          </div></a></div>
                      
                      <div class="bg bg28"><a href="index.php?page=hobby_search&hobby=32">
  <div class="box">
    <p>TALK</p>
                          </div></a></div>
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
        
        </div></body>

