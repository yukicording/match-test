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
    <link rel="stylesheet" href="core/pages/css/luxbar.min.css">
    <link rel="stylesheet" href="core/pages/css/login.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,100' rel='stylesheet' type='text/css'>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
</head>
<body>

    <div class="profile_edit">
<?php
if (isset($_POST['age'], $_POST['place'])) {
    $age = (int) $_POST['age'];
    $place = (int) $_POST['place'];
    $income = (int) $_POST['income'];
    $work = (int) $_POST['work'];
    $education = (int) $_POST['education'];
    $holiday = (int) $_POST['holiday'];
    $size = (int) $_POST['size'];
    $cigarette = (int) $_POST['cigarette'];
    $alchool = (int) $_POST['alchool'];
    $cohabitants = (int) $_POST['cohabitants'];
    $request = (int) $_POST['request'];
    $id = (int) $_SESSION['user_id'];
    update_profile($age, $place, $income, $work, $education, $holiday, $size, $cigarette, $alchool, $cohabitants, $request, $id, $mysqli);
    header('Location: index.php?page=my_profile');
exit;
}

?>
 


<h2></h2>
<?php 
$id = (int) $_SESSION['user_id'];
$users = my_profile_get($id, $mysqli);
?>
<?php foreach ($users as $user) { ?>

<form action="index.php?page=profile_edit" method="post">
   <p>age</p> <div class="cp_ipselect cp_sl04">
                <select name="age">
                    <option value="1" <?php if ($user['age'] === 1) echo 'selected' ?>>18</option>
    <option value="2" <?php if ($user['age'] === 2) echo 'selected' ?>>19</option>
    <option value="3" <?php if ($user['age'] === 3) echo 'selected' ?>>20</option>
    <option value="4" <?php if ($user['age'] === 4) echo 'selected' ?>>21</option>
    <option value="5" <?php if ($user['age'] === 5) echo 'selected' ?>>22</option>
    <option value="6" <?php if ($user['age'] === 6) echo 'selected' ?>>23</option>
    <option value="7" <?php if ($user['age'] === 7) echo 'selected' ?>>24</option>
    <option value="8" <?php if ($user['age'] === 8) echo 'selected' ?>>25</option>
    <option value="9" <?php if ($user['age'] === 9) echo 'selected' ?>>26</option>
    <option value="10" <?php if ($user['age'] === 10) echo 'selected' ?>>27</option>
    <option value="11" <?php if ($user['age'] === 11) echo 'selected' ?>>28</option>
    <option value="12" <?php if ($user['age'] === 12) echo 'selected' ?>>29</option>
    <option value="13" <?php if ($user['age'] === 13) echo 'selected' ?>>30</option>
    <option value="14" <?php if ($user['age'] === 14) echo 'selected' ?>>31</option>
    <option value="15" <?php if ($user['age'] === 15) echo 'selected' ?>>32</option>
    <option value="16" <?php if ($user['age'] === 16) echo 'selected' ?>>33</option>
    <option value="17" <?php if ($user['age'] === 17) echo 'selected' ?>>34</option>
    <option value="18" <?php if ($user['age'] === 18) echo 'selected' ?>>35</option>
    <option value="19" <?php if ($user['age'] === 19) echo 'selected' ?>>36</option>
    <option value="20" <?php if ($user['age'] === 20) echo 'selected' ?>>37</option>
    <option value="21" <?php if ($user['age'] === 21) echo 'selected' ?>>38</option>
    <option value="22" <?php if ($user['age'] === 22) echo 'selected' ?>>39</option>
    <option value="23" <?php if ($user['age'] === 23) echo 'selected' ?>>40</option>
    <option value="24" <?php if ($user['age'] === 24) echo 'selected' ?>>41</option>
    <option value="25" <?php if ($user['age'] === 25) echo 'selected' ?>>42</option>
    <option value="26" <?php if ($user['age'] === 26) echo 'selected' ?>>43</option>
    <option value="27" <?php if ($user['age'] === 27) echo 'selected' ?>>44</option>
    <option value="28" <?php if ($user['age'] === 28) echo 'selected' ?>>45</option>
    <option value="29" <?php if ($user['age'] === 29) echo 'selected' ?>>46</option>
    <option value="30" <?php if ($user['age'] === 30) echo 'selected' ?>>47</option>
    <option value="31" <?php if ($user['age'] === 31) echo 'selected' ?>>48</option>
    <option value="32" <?php if ($user['age'] === 32) echo 'selected' ?>>49</option>
    <option value="33" <?php if ($user['age'] === 33) echo 'selected' ?>>50</option>
    <option value="34" <?php if ($user['age'] === 34) echo 'selected' ?>>51</option>
    <option value="35" <?php if ($user['age'] === 35) echo 'selected' ?>>52</option>
    <option value="36" <?php if ($user['age'] === 36) echo 'selected' ?>>53</option>
    <option value="37" <?php if ($user['age'] === 37) echo 'selected' ?>>54</option>
    <option value="38" <?php if ($user['age'] === 38) echo 'selected' ?>>55</option>
    <option value="39" <?php if ($user['age'] === 39) echo 'selected' ?>>56</option>
    <option value="40" <?php if ($user['age'] === 40) echo 'selected' ?>>57</option>
    <option value="41" <?php if ($user['age'] === 41) echo 'selected' ?>>58</option>
    <option value="42" <?php if ($user['age'] === 42) echo 'selected' ?>>59</option>
    <option value="43" <?php if ($user['age'] === 43) echo 'selected' ?>>60</option>
    <option value="44" <?php if ($user['age'] === 44) echo 'selected' ?>>61</option>
    <option value="45" <?php if ($user['age'] === 45) echo 'selected' ?>>62</option>
    <option value="46" <?php if ($user['age'] === 46) echo 'selected' ?>>63</option>
    <option value="47" <?php if ($user['age'] === 47) echo 'selected' ?>>64</option>
    <option value="48" <?php if ($user['age'] === 48) echo 'selected' ?>>65</option>
    <option value="49" <?php if ($user['age'] === 49) echo 'selected' ?>>66</option>
    <option value="50" <?php if ($user['age'] === 50) echo 'selected' ?>>67</option>
    <option value="51" <?php if ($user['age'] === 51) echo 'selected' ?>>68</option>
    <option value="52" <?php if ($user['age'] === 52) echo 'selected' ?>>69</option></select></div>
    <p>place</p> <div class="cp_ipselect cp_sl04">
                <select name="place"><option value="1" <?php if ($user['place'] === 1) echo 'selected' ?>>Hokkaido</option>
    <option value="2" <?php if ($user['place'] === 2) echo 'selected' ?>>Aomiri</option>
    <option value="3" <?php if ($user['place'] === 3) echo 'selected' ?>>Iwate</option>
    <option value="4" <?php if ($user['place'] === 4) echo 'selected' ?>>Miyagi</option>
    <option value="5" <?php if ($user['place'] === 5) echo 'selected' ?>>Akita</option>
    <option value="6" <?php if ($user['place'] === 6) echo 'selected' ?>>Yamagata</option>
    <option value="7" <?php if ($user['place'] === 7) echo 'selected' ?>>Fukushima</option>
    <option value="8" <?php if ($user['place'] === 8) echo 'selected' ?>>Ibaraki</option>
    <option value="9" <?php if ($user['place'] === 9) echo 'selected' ?>>Totigi</option>
    <option value="10" <?php if ($user['place'] === 10) echo 'selected' ?>>Gunma</option>
    <option value="11" <?php if ($user['place'] === 11) echo 'selected' ?>>Saitama</option>
    <option value="12" <?php if ($user['place'] === 12) echo 'selected' ?>>Chiba</option>
    <option value="13" <?php if ($user['place'] === 13) echo 'selected' ?>>Tokyo</option>
    <option value="14" <?php if ($user['place'] === 14) echo 'selected' ?>>Kanagawa</option>
    <option value="15" <?php if ($user['place'] === 15) echo 'selected' ?>>Niigata</option>
    <option value="16" <?php if ($user['place'] === 16) echo 'selected' ?>>Toyama</option>
    <option value="17" <?php if ($user['place'] === 17) echo 'selected' ?>>Ishikawa</option>
    <option value="18" <?php if ($user['place'] === 18) echo 'selected' ?>>Fukui</option>
    <option value="19" <?php if ($user['place'] === 19) echo 'selected' ?>>Yamanashi</option>
    <option value="20" <?php if ($user['place'] === 20) echo 'selected' ?>>Nagano</option>
    <option value="21" <?php if ($user['place'] === 21) echo 'selected' ?>>Gifu</option>
    <option value="22" <?php if ($user['place'] === 22) echo 'selected' ?>>Shizuoka</option>
    <option value="23" <?php if ($user['place'] === 23) echo 'selected' ?>>Aichi</option>
    <option value="24" <?php if ($user['place'] === 24) echo 'selected' ?>>Mie</option>
    <option value="25" <?php if ($user['place'] === 25) echo 'selected' ?>>Shiga</option>
    <option value="26" <?php if ($user['place'] === 26) echo 'selected' ?>>Kyoto</option>
    <option value="27" <?php if ($user['place'] === 27) echo 'selected' ?>>Osaka</option>
    <option value="28" <?php if ($user['place'] === 28) echo 'selected' ?>>Hyogo</option>
    <option value="29" <?php if ($user['place'] === 29) echo 'selected' ?>>Nara</option>
    <option value="30" <?php if ($user['place'] === 30) echo 'selected' ?>>Wakayama</option>
    <option value="31" <?php if ($user['place'] === 31) echo 'selected' ?>>Tottori</option>
    <option value="32" <?php if ($user['place'] === 32) echo 'selected' ?>>Shimane</option>
    <option value="33" <?php if ($user['place'] === 33) echo 'selected' ?>>Okayama</option>
    <option value="34" <?php if ($user['place'] === 34) echo 'selected' ?>>Hiroshima</option>
    <option value="35" <?php if ($user['place'] === 35) echo 'selected' ?>>Yamaguchi</option>
    <option value="36" <?php if ($user['place'] === 36) echo 'selected' ?>>Tokushima</option>
    <option value="37" <?php if ($user['place'] === 37) echo 'selected' ?>>Kagawa</option>
    <option value="38" <?php if ($user['place'] === 38) echo 'selected' ?>>Ehime</option>
    <option value="39" <?php if ($user['place'] === 39) echo 'selected' ?>>Kouchi</option>
    <option value="40" <?php if ($user['place'] === 40) echo 'selected' ?>>Fukuoka</option>
    <option value="41" <?php if ($user['place'] === 41) echo 'selected' ?>>Saga</option>
    <option value="42" <?php if ($user['place'] === 42) echo 'selected' ?>>Oita</option>
    <option value="43" <?php if ($user['place'] === 43) echo 'selected' ?>>Miyazaki</option>
    <option value="44" <?php if ($user['place'] === 44) echo 'selected' ?>>Nagasaki</option>
    <option value="45" <?php if ($user['place'] === 45) echo 'selected' ?>>Kumamoto</option>
    <option value="46" <?php if ($user['place'] === 46) echo 'selected' ?>>Kagoshima</option>
    <option value="47" <?php if ($user['place'] === 47) echo 'selected' ?>>Okinawa</option>
    <option value="48" <?php if ($user['place'] === 48) echo 'selected' ?>>other</option></select></div>
    <p>Purpose of use</p><div class="cp_ipselect cp_sl04">
                <select name="request">
                    <option value="">Unselected</option><option value="1" <?php if ($user['request'] === 1) echo 'selected' ?>>Make friends</option>
    <option value="2" <?php if ($user['request'] === 2) echo 'selected' ?>>Looking for a lover</option>
    <option value="3" <?php if ($user['request'] === 3) echo 'selected' ?>>learning language</option></select></div>
    
    <p>income</p><div class="cp_ipselect cp_sl04">
                <select name="income">
                    <option value="">Unselected</option><option value="1" <?php if ($user['income'] === 1) echo 'selected' ?>>less than 3,000,000 yen</option>
    <option value="2" <?php if ($user['income'] === 2) echo 'selected' ?>>3,000,000～5,000,000 yen</option>
    <option value="3" <?php if ($user['income'] === 3) echo 'selected' ?>>5,000,000～7,000,000 yen</option>
    <option value="4" <?php if ($user['income'] === 4) echo 'selected' ?>>7,000,000～9,000,000 yen</option>
    <option value="5" <?php if ($user['income'] === 5) echo 'selected' ?>>9,000,000～1,200,000 yen</option>
    <option value="6" <?php if ($user['income'] === 6) echo 'selected' ?>>more than 1200 yen</option>
    <option value="7" <?php if ($user['income'] === 7) echo 'selected' ?>>other</option></select></div>
    
    <p>profession</p><div class="cp_ipselect cp_sl04">
                <select name="work">
                    <option value="">Unselected</option><option value="1" <?php if ($user['work'] === 1) echo 'selected' ?>>Listed company</option>
    <option value="2" <?php if ($user['work'] === 2) echo 'selected' ?>>Financial industry</option>
    <option value="3" <?php if ($user['work'] === 3) echo 'selected' ?>>Civil servant</option>
    <option value="4" <?php if ($user['work'] === 4) echo 'selected' ?>>consulting</option>
    <option value="5" <?php if ($user['work'] === 5) echo 'selected' ?>>Management / Executives</option>
    <option value="6" <?php if ($user['work'] === 6) echo 'selected' ?>>Major company</option>
    <option value="7" <?php if ($user['work'] === 7) echo 'selected' ?>>foreign-owned enterprise</option>
    <option value="8" <?php if ($user['work'] === 8) echo 'selected' ?>>trading company</option>
    <option value="9" <?php if ($user['work'] === 9) echo 'selected' ?>>Finance</option>
    <option value="10" <?php if ($user['work'] === 10) echo 'selected' ?>>Doctor</option>
    <option value="11" <?php if ($user['work'] === 11) echo 'selected' ?>>Caregiver</option>
    <option value="12" <?php if ($user['work'] === 12) echo 'selected' ?>>pharmacist</option>
    <option value="13" <?php if ($user['work'] === 13) echo 'selected' ?>>lawyer</option>
    <option value="14" <?php if ($user['work'] === 14) echo 'selected' ?>>Accountant</option>
    <option value="15" <?php if ($user['work'] === 15) echo 'selected' ?>>pilot</option>
    <option value="16" <?php if ($user['work'] === 16) echo 'selected' ?>>Flight attendant</option>
    <option value="17" <?php if ($user['work'] === 17) echo 'selected' ?>>Advertising</option>
    <option value="18" <?php if ($user['work'] === 18) echo 'selected' ?>>Media</option>
    <option value="19" <?php if ($user['work'] === 19) echo 'selected' ?>>education</option>
    <option value="20" <?php if ($user['work'] === 20) echo 'selected' ?>>IT</option>
    <option value="21" <?php if ($user['work'] === 21) echo 'selected' ?>>Food industry</option>
    <option value="22" <?php if ($user['work'] === 22) echo 'selected' ?>>Travel agency</option>
    <option value="23" <?php if ($user['work'] === 23) echo 'selected' ?>>Pharmaceutical</option>
    <option value="24" <?php if ($user['work'] === 24) echo 'selected' ?>>insurance</option>
    <option value="25" <?php if ($user['work'] === 25) echo 'selected' ?>>real estate business</option>
    <option value="26" <?php if ($user['work'] === 26) echo 'selected' ?>>Construction industry</option>
    <option value="27" <?php if ($user['work'] === 27) echo 'selected' ?>>Telecommunications industry</option>
    <option value="28" <?php if ($user['work'] === 28) echo 'selected' ?>>Distribution industry</option>
    <option value="29" <?php if ($user['work'] === 29) echo 'selected' ?>>WEB</option>
    <option value="30" <?php if ($user['work'] === 30) echo 'selected' ?>>bridal</option>
    <option value="31" <?php if ($user['work'] === 31) echo 'selected' ?>>creator</option>
    <option value="32" <?php if ($user['work'] === 32) echo 'selected' ?>>Hospitality industry</option>
    <option value="33" <?php if ($user['work'] === 33) echo 'selected' ?>>Reception</option>
    <option value="34" <?php if ($user['work'] === 34) echo 'selected' ?>>Cooks</option>
    <option value="35" <?php if ($user['work'] === 35) echo 'selected' ?>>Apparel industry</option>
    <option value="36" <?php if ($user['work'] === 36) echo 'selected' ?>>Cosmetics industry</option>
    <option value="37" <?php if ($user['work'] === 37) echo 'selected' ?>>Entertainment</option>
    <option value="38" <?php if ($user['work'] === 38) echo 'selected' ?>>Research position</option>
    <option value="39" <?php if ($user['work'] === 39) echo 'selected' ?>>Entertainment / Model</option>
    <option value="40" <?php if ($user['work'] === 40) echo 'selected' ?>>Entertainment / Model</option>
    <option value="41" <?php if ($user['work'] === 41) echo 'selected' ?>>athlete</option>
    <option value="42" <?php if ($user['work'] === 42) echo 'selected' ?>>Secretary</option>
    <option value="43" <?php if ($user['work'] === 43) echo 'selected' ?>>Clerk</option>
    <option value="44" <?php if ($user['work'] === 44) echo 'selected' ?>>Welfare</option>
    <option value="45" <?php if ($user['work'] === 45) echo 'selected' ?>>Childminder</option>
    <option value="46" <?php if ($user['work'] === 46) echo 'selected' ?>>Office worker</option>
    <option value="47" <?php if ($user['work'] === 47) echo 'selected' ?>>student</option>
    <option value="48" <?php if ($user['work'] === 48) echo 'selected' ?>>freelancer</option>
    <option value="49" <?php if ($user['work'] === 49) echo 'selected' ?>>nurse</option>
    <option value="50" <?php if ($user['work'] === 50) echo 'selected' ?>>Architect</option>
    <option value="51" <?php if ($user['work'] === 51) echo 'selected' ?>>Hairdresser</option>
    <option value="52" <?php if ($user['work'] === 52) echo 'selected' ?>>Dentist</option>
    <option value="53" <?php if ($user['work'] === 53) echo 'selected' ?>>Dental hygienist</option>
    <option value="54" <?php if ($user['work'] === 54) echo 'selected' ?>>other</option></select></div>
    
    <p>Educational background</p><div class="cp_ipselect cp_sl04">
                <select name="education">
                    <option value="">Unselected</option><option value=1 <?php if ($user['education'] === 1) echo 'selected' ?>>High school graduate</option>
    <option value="2" <?php if ($user['education'] === 2) echo 'selected' ?>>Two-year college degree</option>
    <option value="3" <?php if ($user['education'] === 3) echo 'selected' ?>>Technical Associate graduate</option>
    <option value="4" <?php if ($user['education'] === 4) echo 'selected' ?>>University graduate</option>
    <option value="5" <?php if ($user['education'] === 5) echo 'selected' ?>>other</option></select></div>
    
    <p>Holiday</p><div class="cp_ipselect cp_sl04">
                <select name="holiday">
                    <option value="">Unselected</option> <option value="1" <?php if ($user['holiday'] === 1) echo 'selected' ?>>sunday/saturday</option>
    <option value="2" <?php if ($user['holiday'] === 2) echo 'selected' ?>>Weekdays</option>
    <option value="3" <?php if ($user['holiday'] === 3) echo 'selected' ?>>Irregular</option>
    <option value="4" <?php if ($user['holiday'] === 4) echo 'selected' ?>>other</option></select></div>
    
    <p>Figure</p><div class="cp_ipselect cp_sl04">
                <select name="size">
                    <option value="">Unselected</option><option value="1" <?php if ($user['size'] === 1) echo 'selected' ?>>slim</option>
    <option value="2" <?php if ($user['size'] === 2) echo 'selected' ?>>slender</option>
    <option value="3" <?php if ($user['size'] === 3) echo 'selected' ?>>skinny</option>
    <option value="4" <?php if ($user['size'] === 4) echo 'selected' ?>>lean</option>
    <option value="5" <?php if ($user['size'] === 5) echo 'selected' ?>>thick</option>
    <option value="6" <?php if ($user['size'] === 6) echo 'selected' ?>>voluptuous</option>
    <option value="7" <?php if ($user['size'] === 7) echo 'selected' ?>>stocky</option>
    <option value="8" <?php if ($user['size'] === 8) echo 'selected' ?>>large</option></select></div>
    
    <p>tobacco</p><div class="cp_ipselect cp_sl04">
                <select name="cigarette">
                    <option value="">Unselected</option><option value="1" <?php if ($user['cigarette'] === 1) echo 'selected' ?>>often</option>
    <option value="2" <?php if ($user['cigarette'] === 2) echo 'selected' ?>>rarely</option>
    <option value="3" <?php if ($user['cigarette'] === 3) echo 'selected' ?>>not</option></select></div>
    
    <p>Alchool</p><div class="cp_ipselect cp_sl04">
                <select name="alchool">
                    <option value="">Unselected</option><option value="1" <?php if ($user['alchool'] === 1) echo 'selected' ?>>everyday</option>
    <option value="2" <?php if ($user['alchool'] === 2) echo 'selected' ?>>often</option>
    <option value="3" <?php if ($user['alchool'] === 3) echo 'selected' ?>>rarely</option>
    <option value="4" <?php if ($user['alchool'] === 4) echo 'selected' ?>>not</option></select></div>
    
    <p>Housemate</p><div class="cp_ipselect cp_sl04">
                <select name="cohabitants">
                    <option value="">Unselected</option><option value="1" <?php if ($user['cohabitants'] === 1) echo 'selected' ?>>Living alone</option>
    <option value="2" <?php if ($user['cohabitants'] === 2) echo 'selected' ?>>living with my family</option>
    <option value="3" <?php if ($user['cohabitants'] === 3) echo 'selected' ?>>living with my brother or sister</option>
    <option value="4" <?php if ($user['cohabitants'] === 4) echo 'selected' ?>>living with my friends</option>
    <option value="5" <?php if ($user['cohabitants'] === 5) echo 'selected' ?>>living with my pet</option>
    <option value="6" <?php if ($user['cohabitants'] === 6) echo 'selected' ?>>other</option></select></div>
    
    <style>
label {
  color: white;  
  background-color: #008dde;
  padding: 6px;
  border-radius: 12px;
    margin-top: 10px;
    margin: 0 auto;
    text-align: center;
    padding-left: 30px;
    padding-right: 30px;
}
</style>
    <label for="upload_image1">
    OK
    <input type="submit" value="送信"  id="upload_image1" style="display:none;">
</label>
    </form>
<?php } ?>
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