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
    <link rel="stylesheet" href="core/pages/css/member.css">
    
    <link rel="stylesheet" href="core/pages/css/member_responsible.css">
    <script src="core/pages/js/jquery.min.js"></script>  
    <!--　ファイルをcssファイルを作って移動する  -->
		<script src="core/pages/js/bootstrap.min.js"></script>
		<script src="core/pages/js/croppie.js"></script>
		<link rel="stylesheet" href="core/pages/css/bootstrap.min.css" />
		<link rel="stylesheet" href="core/pages/css/croppie.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    
<body>

    <main>
        <h3>Change main image</h3>
        <div class="upload_img_main">
        <img src="core/pages/img/<?php foreach ($profile_img as $img) { ?><?php if ($img['kind'] == 0) { echo html_escape($img['body']); }?><?php } ?>" alt="";>
            <style>
label {
  color: white;  
  background-color: #33FF99;
  padding: 6px;
  border-radius: 12px;
    margin-top: 10px;
}
</style>
<label for="upload_image1">
    change<?php foreach ($profile_img as $img) { ?><?php if ($img['flag'] == 1 and $img['kind'] == 0) { echo 'still checking'; }?><?php } ?>
    <input type="file" name="upload_image" id="upload_image1" style="display:none;">
</label><a href="#">
            <label for="upload_images">
         delete
            </label></a>
        </div>
        
        <h3>Change sub image</h3>
        
        <div class="upload_img_sub">
            
            <div class="img_up">
                <img src="core/pages/img/<?php foreach ($profile_img as $img) { ?><?php if ($img['kind'] == 1) { echo html_escape($img['body']); }?><?php } ?>" alt="";>
                
                <label for="upload_image2">
    change<?php foreach ($profile_img as $img) { ?><?php if ($img['flag'] == 1 and $img['kind'] == 1) { echo 'still checking'; }?><?php } ?>
    <input type="file" name="upload_image" id="upload_image2" style="display:none;">
</label><a href="#">
            <label for="upload_images">
               delete
            </label></a>
        </div>
            <div class="img_up">
                <img src="core/pages/img/<?php foreach ($profile_img as $img) { ?><?php if ($img['kind'] == 2) { echo html_escape($img['body']); }?><?php } ?>" alt="";><label for="upload_image3">
    change<?php foreach ($profile_img as $img) { ?><?php if ($img['flag'] == 1 and $img['kind'] == 2) { echo 'still checking'; }?><?php } ?>
    <input type="file" name="upload_image" id="upload_image3" style="display:none;">
</label><a href="#">
            <label for="upload_images">
                delete
            </label></a>
        </div>
            <div class="img_up">
                <img src="core/pages/img/<?php foreach ($profile_img as $img) { ?><?php if ($img['kind'] == 3) { echo html_escape($img['body']); }?><?php } ?>" alt="";><label for="upload_image4">
    change<?php foreach ($profile_img as $img) { ?><?php if ($img['flag'] == 1  and $img['kind'] == 3) { echo 'still checking'; }?><?php } ?>
    <input type="file" name="upload_image" id="upload_image4" style="display:none;">
</label><a href="#">
            <label for="upload_images">
               delete
            </label></a>
        </div>
            
            </div>
        
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




<div id="uploadimageModal1" class="modal" role="dialog">
      		
        		
    		  <div id="image_demo1" style="margin:0px auto;margin-top:30px;margin-bottom:0px;"></div>
  					<div class="apo">
						  <button class="btn crop_image1">決定</button>
                        <button type="button" data-dismiss="modal">閉じる</button>
    </div>
					</div>



<div id="uploadimageModal2" class="modal" role="dialog">
      		
        		
    		  <div id="image_demo2" style="margin:0px auto;margin-top:30px;margin-bottom:0px;"></div>
  					<div class="apo">
						  <button class="btn crop_image2">決定</button>
                        <button type="button" data-dismiss="modal">閉じる</button>
    </div>
					</div>

<div id="uploadimageModal3" class="modal" role="dialog">
      		
        		
    		  <div id="image_demo3" style="margin:0px auto;margin-top:30px;margin-bottom:0px;"></div>
  					<div class="apo">
						  <button class="btn crop_image3">決定</button>
                        <button type="button" data-dismiss="modal">閉じる</button>
    </div>
					</div>



<div id="uploadimageModal4" class="modal" role="dialog">
      		
        		
    		  <div id="image_demo4" style="margin:0px auto;margin-top:30px;margin-bottom:0px;"></div>
  					<div class="apo">
						  <button class="btn crop_image4">決定</button>
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
    
    
    
    
    $image_crop2 = $('#image_demo2').croppie({
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
    
    
    
    $image_crop3 = $('#image_demo3').croppie({
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
    
    
    $image_crop4 = $('#image_demo4').croppie({
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
    
//**以下重複事項多いので改善余地あり**//
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
    
    
    
    
      $('#upload_image2').on('change', function(){
    var reader = new FileReader();
    reader.onload = function (event) {
      $image_crop2.croppie('bind', {
        url: event.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
    $('#uploadimageModal2').modal('show');
  });
    
    
    
      $('#upload_image3').on('change', function(){
    var reader = new FileReader();
    reader.onload = function (event) {
      $image_crop3.croppie('bind', {
        url: event.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
    $('#uploadimageModal3').modal('show');
  });
    
    
      $('#upload_image4').on('change', function(){
    var reader = new FileReader();
    reader.onload = function (event) {
      $image_crop4.croppie('bind', {
        url: event.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
    $('#uploadimageModal4').modal('show');
  });
    
    
    
    //**ここまで**//

  $('.crop_image1').click(function(event){
    $image_crop1.croppie('result', {
      type: 'canvas',
      size: {
width: 500,
height: 500
}
    }).then(function(response){
        var user_id = <?php echo $_SESSION['user_id']?>;
        var kind = 0;
      $.ajax({
        url:"core/function/img_upload.php",
        type: "POST",
        data:{
        "image": response,
        user_id: user_id,
        kind: kind},
        success:function(data)
        {  window.location.href = "index.php?page=profile_img_edit";
        }
      });
    })
  });
    
    
  $('.crop_image2').click(function(event){
    $image_crop2.croppie('result', {
      type: 'canvas',
      size: {
width: 500,
height: 500
}
    }).then(function(response){
        var user_id = <?php echo $_SESSION['user_id']?>;
        var kind = 1;
      $.ajax({
        url:"core/function/img_upload.php",
        type: "POST",
        data:{
        "image": response,
        user_id: user_id,
        kind: kind},
        success:function(data)
        {  window.location.href = "index.php?page=profile_img_edit";
        }
      });
    })
  });
    
    
    
  $('.crop_image3').click(function(event){
    $image_crop3.croppie('result', {
      type: 'canvas',
      size: {
width: 500,
height: 500
}
    }).then(function(response){
        var user_id = <?php echo $_SESSION['user_id']?>;
        var kind = 2;
      $.ajax({
        url:"core/function/img_upload.php",
        type: "POST",
        data:{
        "image": response,
        user_id: user_id,
        kind: kind},
        success:function(data)
        {  window.location.href = "index.php?page=profile_img_edit";
        }
      });
    })
  });
    
    
    
    
  $('.crop_image4').click(function(event){
    $image_crop4.croppie('result', {
      type: 'canvas',
      size: {
width: 500,
height: 500
}
    }).then(function(response){
        var user_id = <?php echo $_SESSION['user_id']?>;
        var kind = 3;
      $.ajax({
        url:"core/function/img_upload.php",
        type: "POST",
        data:{
        "image": response,
        user_id: user_id,
        kind: kind},
        success:function(data)
        {  window.location.href = "index.php?page=profile_img_edit";
        }
      });
    })
  });

});  
</script>