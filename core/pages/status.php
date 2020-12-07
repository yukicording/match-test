<?php
$conversations = fetch_conversation_summery($mysqli);
$check = update_login($mysqli);
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
	<title>e-dea（イーデア）－大学恋活マッチング</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="core/pages/css/setting.css"><link rel="stylesheet" href="core/pages/css/member_top.css"><link rel="shortcut icon" href="core/pages/pg_img/logo.jpg"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="jquery.min.js"></script>  
		<script src="bootstrap.min.js"></script>
		<script src="croppie.js"></script>
		<link rel="stylesheet" href="bootstrap.min.css" />
		<link rel="stylesheet" href="croppie.css" />
    </head><body><div class="main_setting">
    <p>
Age confirmation：
        
        <?php  if (!empty($check)) { ?>
        
        <?php  if ($check==1) { ?>
        under inspection<?php } ?>
        <?php  if ($check==2) { ?>
        checked<?php } ?>
        <?php  if ($check==3) { ?>
        denied.please check required terms.<br>
        （適切な年齢確認書類が書類が提出されたか確認して、もう一度提出お願いします。）<label for="upload_image1">
    submit your document of age confirmation
    <input type="file" name="upload_image" id="upload_image1" style="display:none;">
</label><?php } ?>
        <?php } ?>
        <?php  if (empty($check)) { ?>未提出<?php } ?></p>
    <?php  if (empty($check)) { ?>
    <label for="upload_image1">
    submit your document of age confirmation
    <input type="file" name="upload_image" id="upload_image1" style="display:none;">
</label><?php } ?>
    <p></p>
    <style>
label {
  color: white;  
  background-color: #33FF99;
  padding: 6px;
  border-radius: 12px;
    margin-top: 10px;
}
</style>
    <p>
Period : still the free campaign ends.<br>
        （オープンキャンペーン中のため全ての機能を無料でご利用いただけます。）</p>
    <p></p>
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
        
        </div></body></html>


<div id="uploadimageModal1" class="modal" role="dialog">
      		
        		
    		  <div id="image_demo1" style="margin:0px auto;margin-top:100px;margin-bottom:20px;"></div>
  					<div class="apo">
						  <button class="btn crop_image1">決定</button>
                        <button type="button" data-dismiss="modal">閉じる</button>
    </div>
					</div>


<script>  
$(document).ready(function(){
$image_crop1 = $('#image_demo1').croppie({
    enableExif: true,
    viewport: {
      width:200,
      height:200,
      type:'square' //circle
    },
    boundary:{
      width:330,
      height:330
    }
  });
    
  $('#upload_image1').on('change', function(){
    var reader = new FileReader();
    reader.onload = function (event) {
      $image_crop1.croppie('bind', {
        url: event.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
    $('#uploadimageModal1').modal('show');
  });
      $('.crop_image1').click(function(event){
    $image_crop1.croppie('result', {
      type: 'canvas',
      size: {
width: 500,
height: 500
}
    }).then(function(response){
        
        var user_id = <?php echo $_SESSION['user_id']?>;
        var flag = 0;
      $.ajax({
        url:"ageconfig_upload.php",
        type: "POST",
        data:{
        "image": response,
        user_id: user_id,
        flag: flag},
        success:function(data)
        {  window.location.href = "index.php?page=status";
        }
      });
    })
  });
    
    
    });  
</script>