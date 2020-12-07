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
   
    <main>
<h3 class="h3h3">メンバーの絞り込み検索をする</h3>
<?php 
if(isset($_GET['hobby'])){
    $hobby = (int) $_GET['hobby'];
}
$id = (int) $_SESSION['user_id'];
$users = refinement_get($id, $mysqli);
?>
        

<?php foreach ($users as $user) { ?>

<form action="index.php?page=hobby_search&hobby=<?php echo "$hobby"?>" method="post">
    <div class="age_range">
   <h4>年齢</h4> <div class="cp_ipselect cp_sl04 age04">
                <select name="age1"><option value="">未選択</option>
                    <option value="1" <?php if ($user['age1'] === '1') echo 'selected' ?>>18</option>
    <option value="2" <?php if ($user['age1'] === '2') echo 'selected' ?>>19</option>
    <option value="3" <?php if ($user['age1'] === '3') echo 'selected' ?>>20</option>
    <option value="4" <?php if ($user['age1'] === '4') echo 'selected' ?>>21</option>
    <option value="5" <?php if ($user['age1'] === '5') echo 'selected' ?>>22</option>
    <option value="6" <?php if ($user['age1'] === '6') echo 'selected' ?>>23</option>
    <option value="7" <?php if ($user['age1'] === '7') echo 'selected' ?>>24</option>
    <option value="8" <?php if ($user['age1'] === '8') echo 'selected' ?>>25</option>
    <option value="9" <?php if ($user['age1'] === '9') echo 'selected' ?>>26</option>
    <option value="10" <?php if ($user['age1'] === '10') echo 'selected' ?>>27</option>
    <option value="11" <?php if ($user['age1'] === '11') echo 'selected' ?>>28</option>
    <option value="12" <?php if ($user['age1'] === '12') echo 'selected' ?>>29</option>
    <option value="13" <?php if ($user['age1'] === '13') echo 'selected' ?>>30</option>
    <option value="14" <?php if ($user['age1'] === '14') echo 'selected' ?>>31</option>
    <option value="15" <?php if ($user['age1'] === '15') echo 'selected' ?>>32</option>
    <option value="16" <?php if ($user['age1'] === '16') echo 'selected' ?>>33</option>
    <option value="17" <?php if ($user['age1'] === '17') echo 'selected' ?>>34</option>
    <option value="18" <?php if ($user['age1'] === '18') echo 'selected' ?>>35</option>
    <option value="19" <?php if ($user['age1'] === '19') echo 'selected' ?>>36</option>
    <option value="20" <?php if ($user['age1'] === '20') echo 'selected' ?>>37</option>
    <option value="21" <?php if ($user['age1'] === '21') echo 'selected' ?>>38</option>
    <option value="22" <?php if ($user['age1'] === '22') echo 'selected' ?>>39</option>
    <option value="23" <?php if ($user['age1'] === '23') echo 'selected' ?>>40</option>
    <option value="24" <?php if ($user['age1'] === '24') echo 'selected' ?>>41</option>
    <option value="25" <?php if ($user['age1'] === '25') echo 'selected' ?>>42</option>
    <option value="26" <?php if ($user['age1'] === '26') echo 'selected' ?>>43</option>
    <option value="27" <?php if ($user['age1'] === '27') echo 'selected' ?>>44</option>
    <option value="28" <?php if ($user['age1'] === '28') echo 'selected' ?>>45</option>
    <option value="29" <?php if ($user['age1'] === '29') echo 'selected' ?>>46</option>
    <option value="30" <?php if ($user['age1'] === '30') echo 'selected' ?>>47</option>
    <option value="31" <?php if ($user['age1'] === '31') echo 'selected' ?>>48</option>
    <option value="32" <?php if ($user['age1'] === '32') echo 'selected' ?>>49</option>
    <option value="33" <?php if ($user['age1'] === '33') echo 'selected' ?>>50</option>
    <option value="34" <?php if ($user['age1'] === '34') echo 'selected' ?>>51</option>
    <option value="35" <?php if ($user['age1'] === '35') echo 'selected' ?>>52</option>
    <option value="36" <?php if ($user['age1'] === '36') echo 'selected' ?>>53</option>
    <option value="37" <?php if ($user['age1'] === '37') echo 'selected' ?>>54</option>
    <option value="38" <?php if ($user['age1'] === '38') echo 'selected' ?>>55</option>
    <option value="39" <?php if ($user['age1'] === '39') echo 'selected' ?>>56</option>
    <option value="40" <?php if ($user['age1'] === '40') echo 'selected' ?>>57</option>
    <option value="41" <?php if ($user['age1'] === '41') echo 'selected' ?>>58</option>
    <option value="42" <?php if ($user['age1'] === '42') echo 'selected' ?>>59</option>
    <option value="43" <?php if ($user['age1'] === '43') echo 'selected' ?>>60</option>
    <option value="44" <?php if ($user['age1'] === '44') echo 'selected' ?>>61</option>
    <option value="45" <?php if ($user['age1'] === '45') echo 'selected' ?>>62</option>
    <option value="46" <?php if ($user['age1'] === '46') echo 'selected' ?>>63</option>
    <option value="47" <?php if ($user['age1'] === '47') echo 'selected' ?>>64</option>
    <option value="48" <?php if ($user['age1'] === '48') echo 'selected' ?>>65</option>
    <option value="49" <?php if ($user['age1'] === '49') echo 'selected' ?>>66</option>
    <option value="50" <?php if ($user['age1'] === '50') echo 'selected' ?>>67</option>
    <option value="51" <?php if ($user['age1'] === '51') echo 'selected' ?>>68</option>
    <option value="52" <?php if ($user['age1'] === '52') echo 'selected' ?>>69</option></select></div>
    <p>から</p> <div class="cp_ipselect cp_sl04 age04">
                <select name="age2"><option value="">未選択</option>
                    <option value="1" <?php if ($user['age2'] === '1') echo 'selected' ?>>18</option>
    <option value="2" <?php if ($user['age2'] === '2') echo 'selected' ?>>19</option>
    <option value="3" <?php if ($user['age2'] === '3') echo 'selected' ?>>20</option>
    <option value="4" <?php if ($user['age2'] === '4') echo 'selected' ?>>21</option>
    <option value="5" <?php if ($user['age2'] === '5') echo 'selected' ?>>22</option>
    <option value="6" <?php if ($user['age2'] === '6') echo 'selected' ?>>23</option>
    <option value="7" <?php if ($user['age2'] === '7') echo 'selected' ?>>24</option>
    <option value="8" <?php if ($user['age2'] === '8') echo 'selected' ?>>25</option>
    <option value="9" <?php if ($user['age2'] === '9') echo 'selected' ?>>26</option>
    <option value="10" <?php if ($user['age2'] === '10') echo 'selected' ?>>27</option>
    <option value="11" <?php if ($user['age2'] === '11') echo 'selected' ?>>28</option>
    <option value="12" <?php if ($user['age2'] === '12') echo 'selected' ?>>29</option>
    <option value="13" <?php if ($user['age2'] === '13') echo 'selected' ?>>30</option>
    <option value="14" <?php if ($user['age2'] === '14') echo 'selected' ?>>31</option>
    <option value="15" <?php if ($user['age2'] === '15') echo 'selected' ?>>32</option>
    <option value="16" <?php if ($user['age2'] === '16') echo 'selected' ?>>33</option>
    <option value="17" <?php if ($user['age2'] === '17') echo 'selected' ?>>34</option>
    <option value="18" <?php if ($user['age2'] === '18') echo 'selected' ?>>35</option>
    <option value="19" <?php if ($user['age2'] === '19') echo 'selected' ?>>36</option>
    <option value="20" <?php if ($user['age2'] === '20') echo 'selected' ?>>37</option>
    <option value="21" <?php if ($user['age2'] === '21') echo 'selected' ?>>38</option>
    <option value="22" <?php if ($user['age2'] === '22') echo 'selected' ?>>39</option>
    <option value="23" <?php if ($user['age2'] === '23') echo 'selected' ?>>40</option>
    <option value="24" <?php if ($user['age2'] === '24') echo 'selected' ?>>41</option>
    <option value="25" <?php if ($user['age2'] === '25') echo 'selected' ?>>42</option>
    <option value="26" <?php if ($user['age2'] === '26') echo 'selected' ?>>43</option>
    <option value="27" <?php if ($user['age2'] === '27') echo 'selected' ?>>44</option>
    <option value="28" <?php if ($user['age2'] === '28') echo 'selected' ?>>45</option>
    <option value="29" <?php if ($user['age2'] === '29') echo 'selected' ?>>46</option>
    <option value="30" <?php if ($user['age2'] === '30') echo 'selected' ?>>47</option>
    <option value="31" <?php if ($user['age2'] === '31') echo 'selected' ?>>48</option>
    <option value="32" <?php if ($user['age2'] === '32') echo 'selected' ?>>49</option>
    <option value="33" <?php if ($user['age2'] === '33') echo 'selected' ?>>50</option>
    <option value="34" <?php if ($user['age2'] === '34') echo 'selected' ?>>51</option>
    <option value="35" <?php if ($user['age2'] === '35') echo 'selected' ?>>52</option>
    <option value="36" <?php if ($user['age2'] === '36') echo 'selected' ?>>53</option>
    <option value="37" <?php if ($user['age2'] === '37') echo 'selected' ?>>54</option>
    <option value="38" <?php if ($user['age2'] === '38') echo 'selected' ?>>55</option>
    <option value="39" <?php if ($user['age2'] === '39') echo 'selected' ?>>56</option>
    <option value="40" <?php if ($user['age2'] === '40') echo 'selected' ?>>57</option>
    <option value="41" <?php if ($user['age2'] === '41') echo 'selected' ?>>58</option>
    <option value="42" <?php if ($user['age2'] === '42') echo 'selected' ?>>59</option>
    <option value="43" <?php if ($user['age2'] === '43') echo 'selected' ?>>60</option>
    <option value="44" <?php if ($user['age2'] === '44') echo 'selected' ?>>61</option>
    <option value="45" <?php if ($user['age2'] === '45') echo 'selected' ?>>62</option>
    <option value="46" <?php if ($user['age2'] === '46') echo 'selected' ?>>63</option>
    <option value="47" <?php if ($user['age2'] === '47') echo 'selected' ?>>64</option>
    <option value="48" <?php if ($user['age2'] === '48') echo 'selected' ?>>65</option>
    <option value="49" <?php if ($user['age2'] === '49') echo 'selected' ?>>66</option>
    <option value="50" <?php if ($user['age2'] === '50') echo 'selected' ?>>67</option>
    <option value="51" <?php if ($user['age2'] === '51') echo 'selected' ?>>68</option>
    <option value="52" <?php if ($user['age2'] === '52') echo 'selected' ?>>69</option></select></div><p>まで</p></div>
    <div class="age_other">
    <p>所在地</p> <div class="cp_ipselect cp_sl04">
                <select name="place"><option value="">未選択</option><option value="1" <?php if ($user['place'] === '1') echo 'selected' ?>>北海道</option>
    <option value="2" <?php if ($user['place'] === '2') echo 'selected' ?>>青森</option>
    <option value="3" <?php if ($user['place'] === '3') echo 'selected' ?>>岩手</option>
    <option value="4" <?php if ($user['place'] === '4') echo 'selected' ?>>宮城</option>
    <option value="5" <?php if ($user['place'] === '5') echo 'selected' ?>>秋田</option>
    <option value="6" <?php if ($user['place'] === '6') echo 'selected' ?>>山形</option>
    <option value="7" <?php if ($user['place'] === '7') echo 'selected' ?>>福島</option>
    <option value="8" <?php if ($user['place'] === '8') echo 'selected' ?>>茨木</option>
    <option value="9" <?php if ($user['place'] === '9') echo 'selected' ?>>栃木</option>
    <option value="10" <?php if ($user['place'] === '10') echo 'selected' ?>>群馬</option>
    <option value="11" <?php if ($user['place'] === '11') echo 'selected' ?>>埼玉</option>
    <option value="12" <?php if ($user['place'] === '12') echo 'selected' ?>>千葉</option>
    <option value="13" <?php if ($user['place'] === '13') echo 'selected' ?>>東京</option>
    <option value="14" <?php if ($user['place'] === '14') echo 'selected' ?>>神奈川</option>
    <option value="15" <?php if ($user['place'] === '15') echo 'selected' ?>>新潟</option>
    <option value="16" <?php if ($user['place'] === '16') echo 'selected' ?>>富山</option>
    <option value="17" <?php if ($user['place'] === '17') echo 'selected' ?>>石川</option>
    <option value="18" <?php if ($user['place'] === '18') echo 'selected' ?>>福井</option>
    <option value="19" <?php if ($user['place'] === '19') echo 'selected' ?>>山梨</option>
    <option value="20" <?php if ($user['place'] === '20') echo 'selected' ?>>長野</option>
    <option value="21" <?php if ($user['place'] === '21') echo 'selected' ?>>岐阜</option>
    <option value="22" <?php if ($user['place'] === '22') echo 'selected' ?>>静岡</option>
    <option value="23" <?php if ($user['place'] === '23') echo 'selected' ?>>愛知</option>
    <option value="24" <?php if ($user['place'] === '24') echo 'selected' ?>>三重</option>
    <option value="25" <?php if ($user['place'] === '25') echo 'selected' ?>>滋賀</option>
    <option value="26" <?php if ($user['place'] === '26') echo 'selected' ?>>京都</option>
    <option value="27" <?php if ($user['place'] === '27') echo 'selected' ?>>大阪</option>
    <option value="28" <?php if ($user['place'] === '28') echo 'selected' ?>>兵庫</option>
    <option value="29" <?php if ($user['place'] === '29') echo 'selected' ?>>奈良</option>
    <option value="30" <?php if ($user['place'] === '30') echo 'selected' ?>>和歌山</option>
    <option value="31" <?php if ($user['place'] === '31') echo 'selected' ?>>鳥取</option>
    <option value="32" <?php if ($user['place'] === '32') echo 'selected' ?>>島根</option>
    <option value="33" <?php if ($user['place'] === '33') echo 'selected' ?>>岡山</option>
    <option value="34" <?php if ($user['place'] === '34') echo 'selected' ?>>広島</option>
    <option value="35" <?php if ($user['place'] === '35') echo 'selected' ?>>山口</option>
    <option value="36" <?php if ($user['place'] === '36') echo 'selected' ?>>徳島</option>
    <option value="37" <?php if ($user['place'] === '37') echo 'selected' ?>>香川</option>
    <option value="38" <?php if ($user['place'] === '38') echo 'selected' ?>>愛媛</option>
    <option value="39" <?php if ($user['place'] === '39') echo 'selected' ?>>高知</option>
    <option value="40" <?php if ($user['place'] === '40') echo 'selected' ?>>福岡</option>
    <option value="41" <?php if ($user['place'] === '41') echo 'selected' ?>>佐賀</option>
    <option value="42" <?php if ($user['place'] === '42') echo 'selected' ?>>大分</option>
    <option value="43" <?php if ($user['place'] === '43') echo 'selected' ?>>宮崎</option>
    <option value="44" <?php if ($user['place'] === '44') echo 'selected' ?>>長崎</option>
    <option value="45" <?php if ($user['place'] === '45') echo 'selected' ?>>熊本</option>
    <option value="46" <?php if ($user['place'] === '46') echo 'selected' ?>>鹿児島</option>
    <option value="47" <?php if ($user['place'] === '47') echo 'selected' ?>>沖縄</option>
    <option value="48" <?php if ($user['place'] === '48') echo 'selected' ?>>その他</option></select></div>
    <p>年収</p><div class="cp_ipselect cp_sl04">
                <select name="income">
                    <option value="">未選択</option><option value="1" <?php if ($user['income'] === '1') echo 'selected' ?>>３００万円未満</option>
    <option value="2" <?php if ($user['income'] === '2') echo 'selected' ?>>３００万円～５００万円</option>
    <option value="3" <?php if ($user['income'] === '3') echo 'selected' ?>>５００万円～７００万円</option>
    <option value="4" <?php if ($user['income'] === '4') echo 'selected' ?>>７００万円～９００万円</option>
    <option value="5" <?php if ($user['income'] === '5') echo 'selected' ?>>９００万円～１２００万円</option>
    <option value="6" <?php if ($user['income'] === '6') echo 'selected' ?>>１２００万円以上</option>
    <option value="7" <?php if ($user['income'] === '7') echo 'selected' ?>>その他</option></select></div>
    <p>職業</p><div class="cp_ipselect cp_sl04">
                <select name="work">
                    <option value="">未選択</option><option value="1" <?php if ($user['work'] === '1') echo 'selected' ?>>上場起業</option>
    <option value="2" <?php if ($user['work'] === '2') echo 'selected' ?>>金融</option>
    <option value="3" <?php if ($user['work'] === '3') echo 'selected' ?>>公務員</option>
    <option value="4" <?php if ($user['work'] === '4') echo 'selected' ?>>コンサル</option>
    <option value="5" <?php if ($user['work'] === '5') echo 'selected' ?>>経営者・役員</option>
    <option value="6" <?php if ($user['work'] === '6') echo 'selected' ?>>大手企業</option>
    <option value="7" <?php if ($user['work'] === '7') echo 'selected' ?>>大手外資</option>
    <option value="8" <?php if ($user['work'] === '8') echo 'selected' ?>>大手商社</option>
    <option value="9" <?php if ($user['work'] === '9') echo 'selected' ?>>外資金融</option>
    <option value="10" <?php if ($user['work'] === '10') echo 'selected' ?>>医師</option>
    <option value="11" <?php if ($user['work'] === '11') echo 'selected' ?>>看護師</option>
    <option value="12" <?php if ($user['work'] === '12') echo 'selected' ?>>薬剤師</option>
    <option value="13" <?php if ($user['work'] === '13') echo 'selected' ?>>弁護士</option>
    <option value="14" <?php if ($user['work'] === '14') echo 'selected' ?>>公認会計士</option>
    <option value="15" <?php if ($user['work'] === '15') echo 'selected' ?>>パイロット</option>
    <option value="16" <?php if ($user['work'] === '16') echo 'selected' ?>>客室乗務員</option>
    <option value="17" <?php if ($user['work'] === '17') echo 'selected' ?>>広告</option>
    <option value="18" <?php if ($user['work'] === '18') echo 'selected' ?>>マスコミ</option>
    <option value="19" <?php if ($user['work'] === '19') echo 'selected' ?>>教育関連</option>
    <option value="20" <?php if ($user['work'] === '20') echo 'selected' ?>>IT関連</option>
    <option value="21" <?php if ($user['work'] === '21') echo 'selected' ?>>食品関連</option>
    <option value="22" <?php if ($user['work'] === '22') echo 'selected' ?>>旅行関連</option>
    <option value="23" <?php if ($user['work'] === '23') echo 'selected' ?>>製薬</option>
    <option value="24" <?php if ($user['work'] === '24') echo 'selected' ?>>保険</option>
    <option value="25" <?php if ($user['work'] === '25') echo 'selected' ?>>不動産</option>
    <option value="26" <?php if ($user['work'] === '26') echo 'selected' ?>>建築関連</option>
    <option value="27" <?php if ($user['work'] === '27') echo 'selected' ?>>通信</option>
    <option value="28" <?php if ($user['work'] === '28') echo 'selected' ?>>流通</option>
    <option value="29" <?php if ($user['work'] === '29') echo 'selected' ?>>WEB業界</option>
    <option value="30" <?php if ($user['work'] === '30') echo 'selected' ?>>ブライダル</option>
    <option value="31" <?php if ($user['work'] === '31') echo 'selected' ?>>クリエイター</option>
    <option value="32" <?php if ($user['work'] === '32') echo 'selected' ?>>接客業</option>
    <option value="33" <?php if ($user['work'] === '33') echo 'selected' ?>>受付</option>
    <option value="34" <?php if ($user['work'] === '34') echo 'selected' ?>>調理師・栄養士</option>
    <option value="35" <?php if ($user['work'] === '35') echo 'selected' ?>>アパレル</option>
    <option value="36" <?php if ($user['work'] === '36') echo 'selected' ?>>美容関係</option>
    <option value="37" <?php if ($user['work'] === '37') echo 'selected' ?>>エンターテイメント</option>
    <option value="38" <?php if ($user['work'] === '38') echo 'selected' ?>>アナウンサー</option>
    <option value="39" <?php if ($user['work'] === '39') echo 'selected' ?>>芸能・モデル</option>
    <option value="40" <?php if ($user['work'] === '40') echo 'selected' ?>>イベントコンパニオン</option>
    <option value="41" <?php if ($user['work'] === '41') echo 'selected' ?>>スポーツ選手</option>
    <option value="42" <?php if ($user['work'] === '42') echo 'selected' ?>>秘書</option>
    <option value="43" <?php if ($user['work'] === '43') echo 'selected' ?>>事務員</option>
    <option value="44" <?php if ($user['work'] === '44') echo 'selected' ?>>福祉・介護</option>
    <option value="45" <?php if ($user['work'] === '45') echo 'selected' ?>>保育士</option>
    <option value="46" <?php if ($user['work'] === '46') echo 'selected' ?>>会社員</option>
    <option value="47" <?php if ($user['work'] === '47') echo 'selected' ?>>学生</option>
    <option value="48" <?php if ($user['work'] === '48') echo 'selected' ?>>自由業</option>
    <option value="49" <?php if ($user['work'] === '49') echo 'selected' ?>>エンジニア</option>
    <option value="50" <?php if ($user['work'] === '50') echo 'selected' ?>>建築士</option>
    <option value="51" <?php if ($user['work'] === '51') echo 'selected' ?>>美容師</option>
    <option value="52" <?php if ($user['work'] === '52') echo 'selected' ?>>歯科医師</option>
    <option value="53" <?php if ($user['work'] === '53') echo 'selected' ?>>歯科衛生士</option>
    <option value="54" <?php if ($user['work'] === '54') echo 'selected' ?>>その他</option></select></div>
    <p>年収</p><div class="cp_ipselect cp_sl04">
                <select name="education">
                    <option value="">未選択</option><option value="1" <?php if ($user['education'] === '1') echo 'selected' ?>>高校卒</option>
    <option value="2" <?php if ($user['education'] === '2') echo 'selected' ?>>短大・専門学校卒</option>
    <option value="3" <?php if ($user['education'] === '3') echo 'selected' ?>>大学卒</option>
    <option value="4" <?php if ($user['education'] === '4') echo 'selected' ?>>大学院卒</option>
    <option value="5" <?php if ($user['education'] === '5') echo 'selected' ?>>その他</option></select></div>
    <p>学歴</p><div class="cp_ipselect cp_sl04">
                <select name="holiday">
                    <option value="">未選択</option> <option value="1" <?php if ($user['holiday'] === '1') echo 'selected' ?>>土日</option>
    <option value="2" <?php if ($user['holiday'] === '2') echo 'selected' ?>>平日</option>
    <option value="3" <?php if ($user['holiday'] === '3') echo 'selected' ?>>不定期</option>
    <option value="4" <?php if ($user['holiday'] === '4') echo 'selected' ?>>その他</option></select></div>
    <p>体型</p><div class="cp_ipselect cp_sl04">
                <select name="size">
                    <option value="">未選択</option><option value="1" <?php if ($user['size'] === '1') echo 'selected' ?>>細め</option>
    <option value="2" <?php if ($user['size'] === '2') echo 'selected' ?>>スレンダー</option>
    <option value="3" <?php if ($user['size'] === '3') echo 'selected' ?>>普通</option>
    <option value="4" <?php if ($user['size'] === '4') echo 'selected' ?>>グラマー</option>
    <option value="5" <?php if ($user['size'] === '5') echo 'selected' ?>>ぽっちゃり</option>
    <option value="6" <?php if ($user['size'] === '6') echo 'selected' ?>>がっしり</option>
    <option value="7" <?php if ($user['size'] === '7') echo 'selected' ?>>マッチョ</option>
    <option value="8" <?php if ($user['size'] === '8') echo 'selected' ?>>太め</option></select></div>
    <p>喫煙</p><div class="cp_ipselect cp_sl04">
                <select name="cigarette">
                    <option value="">未選択</option><option value="1" <?php if ($user['cigarette'] === '1') echo 'selected' ?>>吸う</option>
    <option value="2" <?php if ($user['cigarette'] === '2') echo 'selected' ?>>時々吸う</option>
    <option value="3" <?php if ($user['cigarette'] === '3') echo 'selected' ?>>吸わない</option></select></div>
    <p>お酒</p><div class="cp_ipselect cp_sl04">
                <select name="alchool">
                    <option value="">未選択</option><option value="1" <?php if ($user['alchool'] === '1') echo 'selected' ?>>よく飲む</option>
    <option value="2" <?php if ($user['alchool'] === '2') echo 'selected' ?>>時々飲む</option>
    <option value="3" <?php if ($user['alchool'] === '3') echo 'selected' ?>>あまり飲まない</option>
    <option value="4" <?php if ($user['alchool'] === '4') echo 'selected' ?>>全く飲まない</option></select></div>
    <p>同居人</p><div class="cp_ipselect cp_sl04">
                <select name="cohabitants">
                    <option value="">未選択</option><option value="1" <?php if ($user['cohabitants'] === '1') echo 'selected' ?>>一人暮らし</option>
    <option value="2" <?php if ($user['cohabitants'] === '2') echo 'selected' ?>>実家暮らし</option>
    <option value="3" <?php if ($user['cohabitants'] === '3') echo 'selected' ?>>兄弟姉妹</option>
    <option value="4" <?php if ($user['cohabitants'] === '4') echo 'selected' ?>>友達</option>
    <option value="5" <?php if ($user['cohabitants'] === '5') echo 'selected' ?>>ペット</option>
    <option value="6" <?php if ($user['cohabitants'] === '6') echo 'selected' ?>>その他</option></select></div>
    <p>会うまでの手順</p><div class="cp_ipselect cp_sl04">
                <select name="request">
                    <option value="">未選択</option><option value="1" <?php if ($user['request'] === '1') echo 'selected' ?>>きちんとメッセージ交換を重ねてから</option>
    <option value="2" <?php if ($user['request'] === '2') echo 'selected' ?>>まずは会って話したい</option>
    <option value="3" <?php if ($user['request'] === '3') echo 'selected' ?>>気が合えば会いたい</option></select><input type="hidden" name="check"></div>
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
    決定
    <input type="submit" value="送信"  id="upload_image1" style="display:none;">
</label></div>
    </form>
<?php } ?>
         <script>
var luminousTrigger = document.querySelectorAll('.lightbox');
if( luminousTrigger !== null ) {
  new LuminousGallery(luminousTrigger);
}
</script>
    <div class="menu2"><a href="index.php?page=member_top"><div class="menu_img"><img src="core/pages/pg_img/search.png"><p>さがす</p></div></a>
        <a href="index.php?page=category"><div class="menu_img"><img src="core/pages/pg_img/icontenis.png"><p>カテゴリ</p></div></a>
        <a href="index.php?page=iine"><div class="menu_img"><img src="core/pages/pg_img/heart.png"><p>いいね</p></div></a>
        <a href="index.php?page=inbox"><div class="menu_img"><img src="core/pages/pg_img/letter.png"><p>やりとり</p></div></a>
        <a href="index.php?page=my_profile"><div class="menu_img"><img src="core/pages/pg_img/mypage.png"><p>マイページ</p></div></a>
        
        </div>
        </main>
    </body>
</html>











