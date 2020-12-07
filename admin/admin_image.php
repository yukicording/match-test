<?php 

$host = "localhost";
$username = "root"; 
$password = "root";
$dbname = "match";
$mysqli = new mysqli($host, $username, $password, $dbname);
if ($mysqli->connect_error) {
	error_log($mysqli->connect_error);
	exit;}

if(isset($_POST['permit'])){
    $kind =  $_POST['kind'];
    $user_id =  $_POST['user_id'];
    $body =  $_POST['body'];
    $sql = "UPDATE `images` SET `body` = ?, flag = 0 WHERE `images`.`image_id` = ? AND kind = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("sii",$body, $user_id, $kind);
    $stmt->execute();
     $result = $stmt->get_result();
    
    echo "おっけ";
        $sql = "DELETE FROM temporary_img
    WHERE user_id = ?
    AND kind = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ii",$user_id,$kind);
    $stmt->execute();
    $result = $stmt->get_result();
}

if(isset($_POST['not_permit'])){
    $kind =  $_POST['kind'];
    $user_id =  $_POST['user_id'];
    $sql = "UPDATE `images` SET flag = 0 WHERE `images`.`image_id` = ? AND kind = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ii",$user_id, $kind);
    $stmt->execute();
     $result = $stmt->get_result();    
    echo "おっけ";
    
    $sql = "DELETE FROM temporary_img
    WHERE user_id = ?
    AND kind = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ii",$user_id,$kind);
    $stmt->execute();
    $result = $stmt->get_result();
}


 $sql = "SELECT * FROM `temporary_img`";
       $stmt = $mysqli->prepare($sql);
    $stmt->execute();
     $result = $stmt->get_result();
	$users = array();

	while ($row = $result->fetch_assoc()) {
		$users[] = $row;
	} 




?>

<?php 
     
foreach ($users as $user) {?><div style="float:left;">
<img src="../core/pages/img/<?php echo $user['body'] ?>" alt="プロフィール画像" style="width:250px;">
    <?php
    $kind = $user['kind'];
    $user_id = $user['user_id'];
    $body = $user['body'];?>
<form action="#" method="post" style="text-align:center;">
    <input type="hidden" value="<?php echo $kind;?>" name="kind">
    <input type="hidden" value="<?php echo $user_id;?>" name="user_id">
    <input type="hidden" value="<?php echo $body;?>" name="body">
    <input type="submit" name="permit" value="了承"></form>
    <form action="#" method="post" style="text-align:center;">
    <input type="hidden" value="<?php echo $kind;?>" name="kind">
    <input type="hidden" value="<?php echo $user_id;?>" name="user_id">
    <input type="submit" name="not_permit" value="不可">
    </form>
</div>
<?php }?>
<a href="admin.php">戻る</a>


