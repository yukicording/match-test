<?php
$conversations = fetch_conversation_summery($mysqli);
$a = 0;?>
<?php foreach ($conversations as $conversation) {?>
        <?php if ($conversation['message_date'] > $conversation['conversation_last_view']) {
    $a += 1;
        } ?>
<?php } ?>




<?php if(isset($_POST['flag_post'])) {
    
    if(isset($_POST['movie'])){
    $hobby = $_POST['movie'];
    if(count_hobby($hobby, $mysqli)) {
        insert_hobby($hobby, $mysqli);
    }
        else {
            update_hobby($hobby, $mysqli);
        }
    
    }
 if(!isset($_POST['movie'])){
     $hobby = '1';
    if(!count_hobby($hobby, $mysqli)) {
        delete_hobby($hobby, $mysqli);
    }
}
    
if(isset($_POST['karaoke'])){
    $hobby = $_POST['karaoke'];
    if(count_hobby($hobby, $mysqli)) {
        insert_hobby($hobby, $mysqli);
    }
        else {
            update_hobby($hobby, $mysqli);
        }
    
    }
 if(!isset($_POST['karaoke'])){
     $hobby = '2';
    if(!count_hobby($hobby, $mysqli)) {
        delete_hobby($hobby, $mysqli);
    }

    
}
    
    if(isset($_POST['camera'])){
    $hobby = $_POST['camera'];
    if(count_hobby($hobby, $mysqli)) {
        insert_hobby($hobby, $mysqli);
    }
        else {
            update_hobby($hobby, $mysqli);
        }
    
    }
 if(!isset($_POST['camera'])){
     $hobby = '3';
    if(!count_hobby($hobby, $mysqli)) {
        delete_hobby($hobby, $mysqli);
    }

    
}
    
    if(isset($_POST['theater'])){
    $hobby = $_POST['theater'];
    if(count_hobby($hobby, $mysqli)) {
        insert_hobby($hobby, $mysqli);
    }
        else {
            update_hobby($hobby, $mysqli);
        }
    
    }
 if(!isset($_POST['theater'])){
     $hobby = '4';
    if(!count_hobby($hobby, $mysqli)) {
        delete_hobby($hobby, $mysqli);
    }

    
}
    
    if(isset($_POST['art'])){
    $hobby = $_POST['art'];
    if(count_hobby($hobby, $mysqli)) {
        insert_hobby($hobby, $mysqli);
    }
        else {
            update_hobby($hobby, $mysqli);
        }
    
    }
 if(!isset($_POST['art'])){
     $hobby = '5';
    if(!count_hobby($hobby, $mysqli)) {
        delete_hobby($hobby, $mysqli);
    }

    
}
    
    if(isset($_POST['music'])){
    $hobby = $_POST['music'];
    if(count_hobby($hobby, $mysqli)) {
        insert_hobby($hobby, $mysqli);
    }
        else {
            update_hobby($hobby, $mysqli);
        }
    
    }
 if(!isset($_POST['music'])){
     $hobby = '6';
    if(!count_hobby($hobby, $mysqli)) {
        delete_hobby($hobby, $mysqli);
    }

    
}
    
    if(isset($_POST['creator'])){
    $hobby = $_POST['creator'];
    if(count_hobby($hobby, $mysqli)) {
        insert_hobby($hobby, $mysqli);
    }
        else {
            update_hobby($hobby, $mysqli);
        }
    
    }
 if(!isset($_POST['creator'])){
     $hobby = '7';
    if(!count_hobby($hobby, $mysqli)) {
        delete_hobby($hobby, $mysqli);
    }

    
}
    
    if(isset($_POST['gaming'])){
    $hobby = $_POST['gaming'];
    if(count_hobby($hobby, $mysqli)) {
        insert_hobby($hobby, $mysqli);
    }
        else {
            update_hobby($hobby, $mysqli);
        }
    
    }
 if(!isset($_POST['gaming'])){
     $hobby = '8';
    if(!count_hobby($hobby, $mysqli)) {
        delete_hobby($hobby, $mysqli);
    }

    
}
    
        if(isset($_POST['anime'])){
    $hobby = $_POST['anime'];
    if(count_hobby($hobby, $mysqli)) {
        insert_hobby($hobby, $mysqli);
    }
        else {
            update_hobby($hobby, $mysqli);
        }
    
    }
 if(!isset($_POST['anime'])){
     $hobby = '9';
    if(!count_hobby($hobby, $mysqli)) {
        delete_hobby($hobby, $mysqli);
    }

    
}
    
    
    if(isset($_POST['book'])){
    $hobby = $_POST['book'];
    if(count_hobby($hobby, $mysqli)) {
        insert_hobby($hobby, $mysqli);
    }
        else {
            update_hobby($hobby, $mysqli);
        }
    
    }
 if(!isset($_POST['book'])){
     $hobby = '10';
    if(!count_hobby($hobby, $mysqli)) {
        delete_hobby($hobby, $mysqli);
    }

    
}
    
    
        if(isset($_POST['travel'])){
    $hobby = $_POST['travel'];
    if(count_hobby($hobby, $mysqli)) {
        insert_hobby($hobby, $mysqli);
    }
        else {
            update_hobby($hobby, $mysqli);
        }
    
    }
 if(!isset($_POST['travel'])){
     $hobby = '11';
    if(!count_hobby($hobby, $mysqli)) {
        delete_hobby($hobby, $mysqli);
    }

    
}
    
    
        if(isset($_POST['exercise'])){
    $hobby = $_POST['exercise'];
    if(count_hobby($hobby, $mysqli)) {
        insert_hobby($hobby, $mysqli);
    }
        else {
            update_hobby($hobby, $mysqli);
        }
    
    }
 if(!isset($_POST['exercise'])){
     $hobby = '12';
    if(!count_hobby($hobby, $mysqli)) {
        delete_hobby($hobby, $mysqli);
    }

    
}
    
    
        if(isset($_POST['jogging'])){
    $hobby = $_POST['jogging'];
    if(count_hobby($hobby, $mysqli)) {
        insert_hobby($hobby, $mysqli);
    }
        else {
            update_hobby($hobby, $mysqli);
        }
    
    }
 if(!isset($_POST['jogging'])){
     $hobby = '13';
    if(!count_hobby($hobby, $mysqli)) {
        delete_hobby($hobby, $mysqli);
    }

    
}
    
    
        if(isset($_POST['car'])){
    $hobby = $_POST['car'];
    if(count_hobby($hobby, $mysqli)) {
        insert_hobby($hobby, $mysqli);
    }
        else {
            update_hobby($hobby, $mysqli);
        }
    
    }
 if(!isset($_POST['car'])){
     $hobby = '14';
    if(!count_hobby($hobby, $mysqli)) {
        delete_hobby($hobby, $mysqli);
    }

    
}
    
        if(isset($_POST['byecicle'])){
    $hobby = $_POST['byecicle'];
    if(count_hobby($hobby, $mysqli)) {
        insert_hobby($hobby, $mysqli);
    }
        else {
            update_hobby($hobby, $mysqli);
        }
    
    }
 if(!isset($_POST['byecicle'])){
     $hobby = '15';
    if(!count_hobby($hobby, $mysqli)) {
        delete_hobby($hobby, $mysqli);
    }
        
}
   
     if(isset($_POST['dance'])){
    $hobby = $_POST['dance'];
    if(count_hobby($hobby, $mysqli)) {
        insert_hobby($hobby, $mysqli);
    }
        else {
            update_hobby($hobby, $mysqli);
        }
    
    }
 if(!isset($_POST['dance'])){
     $hobby = '16';
    if(!count_hobby($hobby, $mysqli)) {
        delete_hobby($hobby, $mysqli);
    }

    
}   
    
    
        if(isset($_POST['golf'])){
    $hobby = $_POST['golf'];
    if(count_hobby($hobby, $mysqli)) {
        insert_hobby($hobby, $mysqli);
    }
        else {
            update_hobby($hobby, $mysqli);
        }
    
    }
 if(!isset($_POST['golf'])){
     $hobby = '17';
    if(!count_hobby($hobby, $mysqli)) {
        delete_hobby($hobby, $mysqli);
    }

    
}
    
    
        if(isset($_POST['dart'])){
    $hobby = $_POST['dart'];
    if(count_hobby($hobby, $mysqli)) {
        insert_hobby($hobby, $mysqli);
    }
        else {
            update_hobby($hobby, $mysqli);
        }
    
    }
 if(!isset($_POST['dart'])){
     $hobby = '18';
    if(!count_hobby($hobby, $mysqli)) {
        delete_hobby($hobby, $mysqli);
    }

    
}
    
    
    
        if(isset($_POST['boxing'])){
    $hobby = $_POST['boxing'];
    if(count_hobby($hobby, $mysqli)) {
        insert_hobby($hobby, $mysqli);
    }
        else {
            update_hobby($hobby, $mysqli);
        }
    
    }
 if(!isset($_POST['boxing'])){
     $hobby = '19';
    if(!count_hobby($hobby, $mysqli)) {
        delete_hobby($hobby, $mysqli);
    }
    

    
}
    
    
    
    
    
        if(isset($_POST['fitness'])){
    $hobby = $_POST['fitness'];
    if(count_hobby($hobby, $mysqli)) {
        insert_hobby($hobby, $mysqli);
    }
        else {
            update_hobby($hobby, $mysqli);
        }
    
    }
 if(!isset($_POST['fitness'])){
     $hobby = '20';
    if(!count_hobby($hobby, $mysqli)) {
        delete_hobby($hobby, $mysqli);
    }

    
}
    
    
    
        if(isset($_POST['wedding'])){
    $hobby = $_POST['wedding'];
    if(count_hobby($hobby, $mysqli)) {
        insert_hobby($hobby, $mysqli);
    }
        else {
            update_hobby($hobby, $mysqli);
        }
    
    }
 if(!isset($_POST['wedding'])){
     $hobby = '21';
    if(!count_hobby($hobby, $mysqli)) {
        delete_hobby($hobby, $mysqli);
    }

    
}
    
    
    
        if(isset($_POST['sweet'])){
    $hobby = $_POST['sweet'];
    if(count_hobby($hobby, $mysqli)) {
        insert_hobby($hobby, $mysqli);
    }
        else {
            update_hobby($hobby, $mysqli);
        }
    
    }
 if(!isset($_POST['sweet'])){
     $hobby = '22';
    if(!count_hobby($hobby, $mysqli)) {
        delete_hobby($hobby, $mysqli);
    }

    
}
    
    
    
        if(isset($_POST['cock'])){
    $hobby = $_POST['cock'];
    if(count_hobby($hobby, $mysqli)) {
        insert_hobby($hobby, $mysqli);
    }
        else {
            update_hobby($hobby, $mysqli);
        }
    
    }
 if(!isset($_POST['cock'])){
     $hobby = '23';
    if(!count_hobby($hobby, $mysqli)) {
        delete_hobby($hobby, $mysqli);
    }

    
}
    
    
    
        if(isset($_POST['indoor'])){
    $hobby = $_POST['indoor'];
    if(count_hobby($hobby, $mysqli)) {
        insert_hobby($hobby, $mysqli);
    }
        else {
            update_hobby($hobby, $mysqli);
        }
    
    }
 if(!isset($_POST['indoor'])){
     $hobby = '24';
    if(!count_hobby($hobby, $mysqli)) {
        delete_hobby($hobby, $mysqli);
    }

    
}
    
    
    
    
        if(isset($_POST['norway'])){
    $hobby = $_POST['norway'];
    if(count_hobby($hobby, $mysqli)) {
        insert_hobby($hobby, $mysqli);
    }
        else {
            update_hobby($hobby, $mysqli);
        }
    
    }
 if(!isset($_POST['norway'])){
     $hobby = '25';
    if(!count_hobby($hobby, $mysqli)) {
        delete_hobby($hobby, $mysqli);
    }

    
}
    
        if(isset($_POST['owarai'])){
    $hobby = $_POST['owarai'];
    if(count_hobby($hobby, $mysqli)) {
        insert_hobby($hobby, $mysqli);
    }
        else {
            update_hobby($hobby, $mysqli);
        }
    
    }
 if(!isset($_POST['owarai'])){
     $hobby = '26';
    if(!count_hobby($hobby, $mysqli)) {
        delete_hobby($hobby, $mysqli);
    }

    
}
    
    
    
    
        if(isset($_POST['zakka'])){
    $hobby = $_POST['zakka'];
    if(count_hobby($hobby, $mysqli)) {
        insert_hobby($hobby, $mysqli);
    }
        else {
            update_hobby($hobby, $mysqli);
        }
    
    }
 if(!isset($_POST['zakka'])){
     $hobby = '27';
    if(!count_hobby($hobby, $mysqli)) {
        delete_hobby($hobby, $mysqli);
    }

    
}
    
    
    
        if(isset($_POST['mountain'])){
    $hobby = $_POST['mountain'];
    if(count_hobby($hobby, $mysqli)) {
        insert_hobby($hobby, $mysqli);
    }
        else {
            update_hobby($hobby, $mysqli);
        }
    
    }
 if(!isset($_POST['mountain'])){
     $hobby = '28';
    if(!count_hobby($hobby, $mysqli)) {
        delete_hobby($hobby, $mysqli);
    }

    
}
    
    
        if(isset($_POST['onsen'])){
    $hobby = $_POST['onsen'];
    if(count_hobby($hobby, $mysqli)) {
        insert_hobby($hobby, $mysqli);
    }
        else {
            update_hobby($hobby, $mysqli);
        }
    
    }
 if(!isset($_POST['onsen'])){
     $hobby = '29';
    if(!count_hobby($hobby, $mysqli)) {
        delete_hobby($hobby, $mysqli);
    }

    
}
    
    
        if(isset($_POST['ferris-wheel'])){
    $hobby = $_POST['ferris-wheel'];
    if(count_hobby($hobby, $mysqli)) {
        insert_hobby($hobby, $mysqli);
    }
        else {
            update_hobby($hobby, $mysqli);
        }
    
    }
 if(!isset($_POST['ferris-wheel'])){
     $hobby = '30';
    if(!count_hobby($hobby, $mysqli)) {
        delete_hobby($hobby, $mysqli);
    }

    
}
    
    
        if(isset($_POST['alchool'])){
    $hobby = $_POST['alchool'];
    if(count_hobby($hobby, $mysqli)) {
        insert_hobby($hobby, $mysqli);
    }
        else {
            update_hobby($hobby, $mysqli);
        }
    
    }
 if(!isset($_POST['alchool'])){
     $hobby = '31';
    if(!count_hobby($hobby, $mysqli)) {
        delete_hobby($hobby, $mysqli);
    }

    
}
    
    
        if(isset($_POST['talk'])){
    $hobby = $_POST['talk'];
    if(count_hobby($hobby, $mysqli)) {
        insert_hobby($hobby, $mysqli);
    }
        else {
            update_hobby($hobby, $mysqli);
        }
    
    }
 if(!isset($_POST['talk'])){
     $hobby = '32';
    if(!count_hobby($hobby, $mysqli)) {
        delete_hobby($hobby, $mysqli);
    }

    
}
    
}
    ?> 

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>e-dea（イーデア）－大学恋活マッチング</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="core/pages/css/member.css">
        <link rel="stylesheet" href="core/pages/css/member_responsible.css">
</head>
<body>
    <!-- 速度上げる改善の余地あり -->

<?php 
$id = (int) $_SESSION['user_id'];
$user1 = my_profile_get($id, $mysqli);
$sex = $user1[0]['sex'];
?>
   
    <h3 style="padding-top:30px;">Select your interest</h3>
        <form method="post" action="index.php?page=hobby_select">
 <ul class="image_list">
     <h3>cultural</h3>
        <li>
          <div class="image_box">
            <img class="thumbnail movie" src="core/pages/pg_img/hobby_movie.jpg" alt="foo" />
            <input class="disabled_checkbox" type="checkbox" name="movie" value="1"/>
              <br>movie
          </div>
        </li>
     <li>
          <div class="image_box">
            <img class="thumbnail karaoke" src="core/pages/pg_img/hobby_karaoke.jpg" alt="foo" />
            <input class="disabled_checkbox" type="checkbox" name="karaoke" value="2"/>
              <br>karaoke
          </div>
        </li>
     <li>
          <div class="image_box">
            <img class="thumbnail camera" src="core/pages/pg_img/hobby_camera.jpg" alt="foo" />
            <input class="disabled_checkbox" type="checkbox" name="camera" value="3"/>
              <br>photo
          </div>
        </li>
     <li>
          <div class="image_box">
            <img class="thumbnail theater" src="core/pages/pg_img/hobby_theater.jpg" alt="foo" />
            <input class="disabled_checkbox" type="checkbox" name="theater" value="4"/>
              <br>theater
          </div>
        </li>
     <li>
          <div class="image_box">
            <img class="thumbnail art" src="core/pages/pg_img/hobby_art.jpg" alt="foo" />
            <input class="disabled_checkbox" type="checkbox" name="art" value="5"/>
              <br>art
          </div>
        </li>
     <li>
          <div class="image_box">
            <img class="thumbnail music" src="core/pages/pg_img/hobby_music.jpg" alt="foo" />
            <input class="disabled_checkbox" type="checkbox" name="music" value="6"/>
              <br>music
          </div>
        </li>
     <li>
          <div class="image_box">
            <img class="thumbnail creator" src="core/pages/pg_img/hobby_creator.jpg" alt="foo" />
            <input class="disabled_checkbox" type="checkbox" name="creator" value="7"/>
              <br>creative
          </div>
        </li>
     <li>
          <div class="image_box">
            <img class="thumbnail gaming" src="core/pages/pg_img/hobby_gaming.jpg" alt="foo" />
            <input class="disabled_checkbox" type="checkbox" name="gaming" value="8"/>
              <br>game
          </div>
        </li>
     <li>
          <div class="image_box">
            <img class="thumbnail anime" src="core/pages/pg_img/hobby_anime.jpg" alt="foo" />
            <input class="disabled_checkbox" type="checkbox" name="anime" value="9"/>
              <br>cartoon
          </div>
        </li>
     <li>
          <div class="image_box">
            <img class="thumbnail book" src="core/pages/pg_img/hobby_book.jpg" alt="foo" />
            <input class="disabled_checkbox" type="checkbox" name="book" value="10"/>
              <br>novel
          </div>
        </li>
     <h3>Active</h3>
     <li>
          <div class="image_box">
            <img class="thumbnail travel" src="core/pages/pg_img/hobby_travel.jpg" alt="foo" />
            <input class="disabled_checkbox" type="checkbox" name="travel" value="11"/>
              <br>travel
          </div>
        </li>
     <li>
          <div class="image_box">
            <img class="thumbnail exercise" src="core/pages/pg_img/hobby_exercise.jpg" alt="foo" />
            <input class="disabled_checkbox" type="checkbox" name="exercise" value="12"/>
              <br>exercise
          </div>
        </li>
     <li>
          <div class="image_box">
            <img class="thumbnail jogging" src="core/pages/pg_img/hobby_jogging.jpg" alt="foo" />
            <input class="disabled_checkbox" type="checkbox" name="jogging" value="13"/>
              <br>jogging
          </div>
        </li>
     <li>
          <div class="image_box">
            <img class="thumbnail car" src="core/pages/pg_img/hobby_car.jpg" alt="foo" />
            <input class="disabled_checkbox" type="checkbox" name="car" value="14"/>
              <br>car
          </div>
        </li>
     <li>
          <div class="image_box">
            <img class="thumbnail byecicle" src="core/pages/pg_img/hobby_byecicle.png" alt="foo" />
            <input class="disabled_checkbox" type="checkbox" name="byecicle" value="15"/>
              <br>byecicle
          </div>
        </li>
     <li>
          <div class="image_box">
            <img class="thumbnail dance" src="core/pages/pg_img/hobby_dance.jpg" alt="foo" />
            <input class="disabled_checkbox" type="checkbox" name="dance" value="16"/>
              <br>dance
          </div>
        </li>
     <li>
          <div class="image_box">
            <img class="thumbnail golf" src="core/pages/pg_img/hobby_golf.jpg" alt="foo" />
            <input class="disabled_checkbox" type="checkbox" name="golf" value="17"/>
              <br>golf
          </div>
        </li>
     <li>
          <div class="image_box">
            <img class="thumbnail dart" src="core/pages/pg_img/hobby_dart.jpg" alt="foo" />
            <input class="disabled_checkbox" type="checkbox" name="dart" value="18"/>
              <br>dart
          </div>
        </li>
     <li>
          <div class="image_box">
            <img class="thumbnail boxing" src="core/pages/pg_img/hobby_boxing.jpg" alt="foo" />
            <input class="disabled_checkbox" type="checkbox" name="boxing" value="19"/>
              <br>combat sport
          </div>
        </li>
     <li>
          <div class="image_box">
            <img class="thumbnail fitness" src="core/pages/pg_img/hobby_fitness.jpg" alt="foo" />
            <input class="disabled_checkbox" type="checkbox" name="fitness" value="20"/>
              <br>traning
          </div>
        </li>
     <h3>Character</h3>
     <li>
          <div class="image_box">
            <img class="thumbnail wedding" src="core/pages/pg_img/hobby_wedding.jpg" alt="foo" />
            <input class="disabled_checkbox" type="checkbox" name="wedding" value="21"/>
              <br>wedding
          </div>
        </li>
     
          <li>
          <div class="image_box">
            <img class="thumbnail sweet" src="core/pages/pg_img/hobby_sweet.jpg" alt="foo" />
            <input class="disabled_checkbox" type="checkbox" name="sweet" value="22"/><br>sweet
          </div>
        </li>
           <li>
          <div class="image_box">
            <img class="thumbnail indoor" src="core/pages/pg_img/hobby_cock.jpg" alt="foo" />
            <input class="disabled_checkbox" type="checkbox" name="cock" value="23"/>
              <br>cook
          </div>
        </li>
          <li>
          <div class="image_box">
            <img class="thumbnail indoor" src="core/pages/pg_img/hobby_indoor.jpg" alt="foo" />
            <input class="disabled_checkbox" type="checkbox" name="indoor" value="24"/>
              <br>indoor
          </div>
        </li>
          <li>
          <div class="image_box">
            <img class="thumbnail norway" src="core/pages/pg_img/hobby_norway.jpg" alt="foo" />
            <input class="disabled_checkbox" type="checkbox" name="norway" value="25"/>
              <br>animal
          </div>
        </li>
          <li>
          <div class="image_box">
            <img class="thumbnail owarai" src="core/pages/pg_img/hobby_owarai.jpg" alt="foo" />
            <input class="disabled_checkbox" type="checkbox" name="owarai" value="26"/>
              <br>comedy
          </div>
        </li>
          <li>
          <div class="image_box">
            <img class="thumbnail zakka" src="core/pages/pg_img/hobby_zakka.jpg" alt="foo" />
            <input class="disabled_checkbox" type="checkbox" name="zakka" value="27"/>
              <br>miscellaneous goods
          </div>
        </li>
          <li>
          <div class="image_box">
            <img class="thumbnail mountain" src="core/pages/pg_img/hobby_mountain.jpg" alt="foo" />
            <input class="disabled_checkbox" type="checkbox" name="mountain" value="28"/>
              <br>hiking
          </div>
        </li>
     <li>
          <div class="image_box">
            <img class="thumbnail onsen" src="core/pages/pg_img/hobby_onsen.jpg" alt="foo" />
            <input class="disabled_checkbox" type="checkbox" name="onsen" value="29"/>
              <br>hot spring
          </div>
        </li>
     <li>
          <div class="image_box">
            <img class="thumbnail ferris-wheel" src="core/pages/pg_img/hobby_ferris-wheel.jpg" alt="foo" />
            <input class="disabled_checkbox" type="checkbox" name="ferris-wheel" value="30"/>
              <br>amusement park
          </div>
        </li>
     <li>
          <div class="image_box">
            <img class="thumbnail alchool" src="core/pages/pg_img/hobby_alchool.jpg" alt="foo" />
            <input class="disabled_checkbox" type="checkbox" name="alchool" value="31"/>
              <br>alchool
          </div>
        </li>
     
     <li>
          <div class="image_box">
            <img class="thumbnail talk" src="core/pages/pg_img/hobby_talk.jpg" alt="foo" />
            <input class="disabled_checkbox" type="checkbox" name="talk" value="32"/>
              <br>talk
          </div>
        </li>

      </ul>
    
           <div class="button_sub">
            <input type="submit" value="OK" class="button">
            </div>
            <input type="hidden" name="flag_post" name="aa">
</form>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="core/pages/js/base.js"></script>
    </body>
    <script>
var luminousTrigger = document.querySelectorAll('.lightbox');
if( luminousTrigger !== null ) {
  new LuminousGallery(luminousTrigger);
}
</script>
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