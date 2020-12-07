<?php
$conversations = fetch_conversation_summery($mysqli);
$a = 0;?>
<?php foreach ($conversations as $conversation) {?>
        <?php if ($conversation['message_date'] > $conversation['conversation_last_view']) {
    $a += 1;
        } ?>
<?php } ?>




<?php if(isset($_POST['check'])) {
    $age1 = (int) $_POST['age1'];
    $age2 = (int) $_POST['age2'];
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
    update_refinement($id, $age1, $age2, $place, $income, $work, $education, $size, $holiday, $cigarette, $alchool, $cohabitants, $request, $mysqli);
} ?>

    


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>e-dea（イーデア）－大学恋活マッチング</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="core/pages/css/member.css">
        <link rel="stylesheet" href="core/pages/css/member_responsible.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<?php 
$id = (int) $_SESSION['user_id'];
$user1 = my_profile_get($id, $mysqli);
$sex = $user1[0]['sex'];
?>

<?php
    if(isset($_POST['keywords'])){
        $keywords = $_POST['keywords']; 
    }?>
    
    <main>
        
        
        
       <h3 class="h3h3"><?php echo "検索ワード：$keywords";
            ?>
    </h3> 
        
        
        
        
        
<div class="kakomi">
          <ul class="accordion11">

              <li>
        <p class="ac1">
                  <?php if(empty($_GET['order'])) {
    echo"ログイン順";$order11 = ' ORDER BY login DESC';}
            elseif (!empty($_GET['order']) and $_GET['order'] ==1) {
                echo"ログイン順";
                $order11 = ' ORDER BY login DESC';
}
                           elseif (!empty($_GET['order']) and $_GET['order'] ==2) {
                echo"いいね多い順";
                               $order11 = ' ORDER BY iine_count DESC';
}
                           elseif (!empty($_GET['order']) and $_GET['order'] ==3) {
                echo"登録順";$order11 = ' ORDER BY registration_date DESC';
}?>
                  </p>
        <ul class="inner"><a href="index.php?page=hobby_search&order=1&hobby=<?php echo $hobby;?>">
            <li class="content1-1">ログイン順</li></a>
            <a href="index.php?page=hobby_search&order=2&hobby=<?php echo $hobby;?>"><li class="content1-2">いいね多い順</li></a>
            <a href="index.php?page=hobby_search&order=3&hobby=<?php echo $hobby;?>"><li class="content1-3">登録順</li></a>
        </ul>
                 </li></ul>
          
          <div id="humberger"><a href="index.php?page=member_search&hobby_refinement=<?php echo $hobby;?>">
  <div></div>
  <div></div>
  <div></div></a>
</div></div>

        <script>
    $(function(){

    //.accordion1の中のp要素がクリックされたら
	$('.accordion11 p').click(function(){

		//クリックされた.accordion1の中のp要素に隣接するul要素が開いたり閉じたりする。
		$(this).next('ul').slideToggle();

	});
});</script>
        
<?php 

$id = (int) $_SESSION['user_id'];
$user1 = my_profile_get($id, $mysqli);
$sex = $user1[0]['sex'];
$refinements = refinement_get($id, $mysqli);
?>
        
    <?php
        
   
foreach ($refinements as $refinement) { 


$where = [];

    if($sex == 1){
           $where[] = 'sex = ' . 2;
        }
        if($sex == 2){
           $where[] = 'sex = ' . 1;
        }
 //居住地
    
    if(!empty($keywords)){
		$where[] = 'profile_text LIKE ' . '?' ;
	}
        
    if(!empty($refinement['age1'])){
		$where[] = 'age >= ' . $refinement['age1'];
	}
    
    if(!empty($refinement['age2'])){
		$where[] = 'age <= ' . $refinement['age2'];
	}
        
        
    if(!empty($refinement['place'])){
		$where[] = 'place = ' . $refinement['place'];
	}
   //年収
    if(!empty($refinement['income'])){
		$where[] = 'income = ' . $refinement['income'];
	}
    //職業
    if(!empty($refinement['work'])){
		$where[] = 'work = ' . $refinement['work'];
	}
    //学歴
    if(!empty($refinement['education'])){
		$where[] = 'education = ' . $refinement['education'];
	}
    //体型
    if(!empty($refinement['size'])){
		$where[] = 'size = ' . $refinement['size'];
	}
    //休日
    if(!empty($refinement['holiday'])){
		$where[] = 'holiday = ' . $refinement['holiday'];
	}
    //煙草
    if(!empty($refinement['cigarette'])){
		$where[] = 'cigarette = ' . $refinement['cigarette'];
	}
    //お酒
    if(!empty($refinement['alchool'])){
		$where[] = 'alchool = ' . $refinement['alchool'];
	}
    //同居人
    if(!empty($refinement['cohabitants'])){
		$where[] = 'cohabitants = ' . $refinement['cohabitants'];
	}
    //出会うまで
    if(!empty($refinement['request'])){
		$where[] = 'request = ' . $refinement['request'];
	}
    
 }

   
    
	if($where){
		$whereSql = implode(' AND ', $where);
		$sql = 'select users.work,users.user_name,users.user_id,images.body,users.sex,users.place,users.age 
        from users
        JOIN images
        ON users.user_id=images.image_id
        where ' . $whereSql . $order11;
        
	}else{
		$sql = 'select users.user_name,users.user_id,images.body,users.sex,users.place,users.age from users
                JOIN images
                ON users.user_id=images.image_id';
	}
    $keywords = '%'.$keywords.'%';
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s",$keywords);
    $stmt->execute();
     $result = $stmt->get_result();
    /* 値を取得します */

        
	$users1 = array();
	while ($row = $result->fetch_assoc()) {
		$users1[] = $row;
	} 
?> 
        
        
        
        
        
        
        
        <?php
define('MAX','8'); // 1ページの記事の表示数
 
$books = $users1;
            
$books_num = count($books); // トータルデータ件数
 
$max_page = ceil($books_num / MAX); // トータルページ数※ceilは小数点を切り捨てる関数
 
if(!isset($_GET['page_id'])){ // $_GET['page_id'] はURLに渡された現在のページ数
    $now = 1; // 設定されてない場合は1ページ目にする
}else{
    $now = $_GET['page_id'];
}
 
$start_no = ($now - 1) * MAX; // 配列の何番目から取得すればよいか
 
// array_sliceは、配列の何番目($start_no)から何番目(MAX)まで切り取る関数
$disp_data = array_slice($books, $start_no, MAX, true);
 ?>
        
        

            
                
                <div class="login_content1">
          <?php 
foreach ($disp_data as $user) { ?>
            
                  
      <div class="img">
                    <a href="index.php?page=other_profile_view&id=<?php echo html_escape($user['user_id']) ?>">
                <img src="core/pages/img/<?php echo $user['body'] ?>" alt="プロフィール画像">
                        
                        
                       <div class="container33">
<div class="box1"></div>
    <div class="box44"> <?php
if ($user['place'] == '1') echo "北海道";
if ($user['place'] == '2') echo "青森";
if ($user['place'] == '3') echo "岩手";
if ($user['place'] == '4') echo "宮城";
if ($user['place'] == '5') echo "秋田";
if ($user['place'] == '6') echo "山形";
if ($user['place'] == '7') echo "福島";
if ($user['place'] == '8') echo "茨城";
if ($user['place'] == '9') echo "栃木";
if ($user['place'] == '10') echo "群馬";
if ($user['place'] == '11') echo "埼玉";
if ($user['place'] == '12') echo "千葉";
if ($user['place'] == '13') echo "東京";
if ($user['place'] == '14') echo "神奈川";
if ($user['place'] == '15') echo "新潟";
if ($user['place'] == '16') echo "富山";
if ($user['place'] == '17') echo "石川";
if ($user['place'] == '18') echo "福井";
if ($user['place'] == '19') echo "山梨";
if ($user['place'] == '20') echo "長野";
if ($user['place'] == '21') echo "岐阜";
if ($user['place'] == '22') echo "静岡";
if ($user['place'] == '23') echo "愛知";
if ($user['place'] == '24') echo "三重";
if ($user['place'] == '25') echo "滋賀";
if ($user['place'] == '26') echo "京都";
if ($user['place'] == '27') echo "大阪";
if ($user['place'] == '28') echo "兵庫";
if ($user['place'] == '29') echo "奈良";
if ($user['place'] == '30') echo "和歌山";
if ($user['place'] == '31') echo "鳥取";
if ($user['place'] == '32') echo "島根";
if ($user['place'] == '33') echo "岡山";
if ($user['place'] == '34') echo "広島";
if ($user['place'] == '35') echo "山口";
if ($user['place'] == '36') echo "徳島";
if ($user['place'] == '37') echo "香川";
if ($user['place'] == '38') echo "愛媛";
if ($user['place'] == '39') echo "高知";
if ($user['place'] == '40') echo "福岡";
if ($user['place'] == '41') echo "佐賀";
if ($user['place'] == '42') echo "大分";
if ($user['place'] == '43') echo "宮崎";
if ($user['place'] == '44') echo "長崎";
if ($user['place'] == '45') echo "熊本";
if ($user['place'] == '46') echo "鹿児島";
if ($user['place'] == '47') echo "沖縄";
if ($user['place'] == '48') echo "その他";
    ?></div>

    <div class="box44"><?php
if ($user['age'] == '1') echo "18";
if ($user['age'] == '2') echo "19";                                
if ($user['age'] == '3') echo "20";
if ($user['age'] == '4') echo "21";
if ($user['age'] == '5') echo "22";
if ($user['age'] == '6') echo "23";
if ($user['age'] == '7') echo "24";
if ($user['age'] == '8') echo "25";
if ($user['age'] == '9') echo "26";
if ($user['age'] == '10') echo "27";
if ($user['age'] == '11') echo "28";
if ($user['age'] == '12') echo "29";
if ($user['age'] == '13') echo "30";                                
if ($user['age'] == '14') echo "31";
if ($user['age'] == '15') echo "32";
if ($user['age'] == '16') echo "33";
if ($user['age'] == '17') echo "34";
if ($user['age'] == '18') echo "35";
if ($user['age'] == '19') echo "36";
if ($user['age'] == '20') echo "37";
if ($user['age'] == '21') echo "38";
if ($user['age'] == '22') echo "39";
if ($user['age'] == '23') echo "40";
if ($user['age'] == '24') echo "41";
if ($user['age'] == '25') echo "42";
if ($user['age'] == '26') echo "43";
if ($user['age'] == '27') echo "44";
if ($user['age'] == '28') echo "45";
if ($user['age'] == '29') echo "46";
if ($user['age'] == '30') echo "47";
if ($user['age'] == '31') echo "48";
if ($user['age'] == '32') echo "49";
if ($user['age'] == '33') echo "50";                                
if ($user['age'] == '34') echo "51";
if ($user['age'] == '35') echo "52";
if ($user['age'] == '36') echo "53";
if ($user['age'] == '37') echo "54";
if ($user['age'] == '38') echo "55";
if ($user['age'] == '39') echo "56";
if ($user['age'] == '40') echo "57";
if ($user['age'] == '41') echo "58";
if ($user['age'] == '42') echo "59";
if ($user['age'] == '43') echo "60";                                
if ($user['age'] == '44') echo "61";
if ($user['age'] == '45') echo "62";
if ($user['age'] == '46') echo "63";
if ($user['age'] == '47') echo "64";
if ($user['age'] == '48') echo "65";
if ($user['age'] == '49') echo "66";
if ($user['age'] == '50') echo "67";
if ($user['age'] == '51') echo "68";
if ($user['age'] == '52') echo "69";
?>歳</div>


    


  </div> 
                        <div class="container33">
    <div class="box55"><p><?php 
                               if (empty($user['work'])) echo "-";
                                 if ($user['work'] == '1') echo "上場起業";
                                 if ($user['work'] == '2') echo "金融";
                                 if ($user['work'] == '3') echo "公務員";
                                 if ($user['work'] == '4') echo "コンサル";
                                 if ($user['work'] == '5') echo "経営者・役員";
                                 if ($user['work'] == '6') echo "大手企業";
                                 if ($user['work'] == '7') echo "大手外資";
                                 if ($user['work'] == '8') echo "大手商社";
                                 if ($user['work'] == '9') echo "外資金融";
                                 if ($user['work'] == '10') echo "医師";
                                 if ($user['work'] == '11') echo "医師";
                                 if ($user['work'] == '12') echo "薬剤師";
                                 if ($user['work'] == '13') echo "弁護士";
                                 if ($user['work'] == '14') echo "公認会計士";
                                 if ($user['work'] == '15') echo "パイロット";
                                 if ($user['work'] == '16') echo "客室乗務員";
                                 if ($user['work'] == '17') echo "広告";
                                 if ($user['work'] == '18') echo "マスコミ";
                                 if ($user['work'] == '19') echo "教育関連";
                                 if ($user['work'] == '20') echo "IT関連";
                                 if ($user['work'] == '21') echo "食品関連";
                                 if ($user['work'] == '22') echo "旅行関連";
                                 if ($user['work'] == '23') echo "製薬";
                                 if ($user['work'] == '24') echo "保険";
                                 if ($user['work'] == '25') echo "不動産";
                                 if ($user['work'] == '26') echo "建築関係";
                                 if ($user['work'] == '27') echo "通信";
                                 if ($user['work'] == '28') echo "流通";
                                 if ($user['work'] == '29') echo "WEB業界";
                                 if ($user['work'] == '30') echo "ブライダル";
                                 if ($user['work'] == '31') echo "クリエイター";
                                 if ($user['work'] == '32') echo "接客業";
                                 if ($user['work'] == '33') echo "受付";
                                 if ($user['work'] == '34') echo "調理師・栄養士";
                                 if ($user['work'] == '35') echo "アパレル";
                                 if ($user['work'] == '36') echo "美容業界";
                                 if ($user['work'] == '37') echo "エンターテイメント";
                                 if ($user['work'] == '38') echo "アナウンサー";
                                 if ($user['work'] == '39') echo "芸能・モデル";
                                 if ($user['work'] == '40') echo "イベントコンパニオン";
                                 if ($user['work'] == '41') echo "スポーツ選手";
                                 if ($user['work'] == '42') echo "秘書"; 
                                 if ($user['work'] == '43') echo "事務員"; 
                                 if ($user['work'] == '44') echo "福祉・介護"; 
                                 if ($user['work'] == '45') echo "保育士"; 
                                 if ($user['work'] == '46') echo "会社員"; 
                                 if ($user['work'] == '47') echo "学生"; 
                                 if ($user['work'] == '48') echo "自由業"; 
                                 if ($user['work'] == '49') echo "エンジニア"; 
                                 if ($user['work'] == '50') echo "建築士"; 
                                 if ($user['work'] == '51') echo "美容師"; 
                                 if ($user['work'] == '52') echo "歯科医師"; 
                                 if ($user['work'] == '53') echo "美容衛生士"; 
                                 if ($user['work'] == '54') echo "その他";
        ?></p></div>
    

  </div> 
                        
                        
                        
                        
                        
                        
<p>
       </p></a>
       
            
                    </div>
<?php } ?>
          </div>
        
        <div class="paging">
        <?php
for($i = 1; $i <= $max_page; $i++){ // 最大ページ数分リンクを作成
    if ($i == $now) { // 現在表示中のページ数の場合はリンクを貼らない
        echo $now. '　'; 
    } else {
        echo '<a href=\'/pm_simple-master/index.php?page=member_top&page_id='. $i. '\')>'. $i. '</a>'. '　';
    }
}
 
?></div>
                 
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