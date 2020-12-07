<?php 

$host = "localhost";
$username = "root"; 
$password = "root";
$dbname = "pm_simple";
$mysqli = new mysqli($host, $username, $password, $dbname);
if ($mysqli->connect_error) {
	error_log($mysqli->connect_error);
	exit;}

if(isset($_POST['permit'])){
    $id =  $_POST['id'];
    $sql = "UPDATE `age_confirmation` SET `flag` = '2' WHERE `age_confirmation`.`id` = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i",$id);
    $stmt->execute();
     $result = $stmt->get_result();
    
    echo "おっけ";
}

if(isset($_POST['not_permit'])){
    $id =  $_POST['id'];
    $sql = "UPDATE `age_confirmation` SET `flag` = '3' WHERE `age_confirmation`.`id` = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i",$id);
    $stmt->execute();
     $result = $stmt->get_result();
    
    echo "おっけ";
}


 $sql = "SELECT img_body,id
    FROM age_confirmation 
    WHERE flag = 1";
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
<img src="../admin/age_confirmation/<?php echo $user['img_body'] ;?>" alt="プロフィール画像" style="width:250px;">
    <?php $id = $user['id'];?>
<form action="#" method="post" style="text-align:center;">
    <input type="hidden" value="<?php echo $id;?>" name="id">
    <input type="submit" name="permit" value="了承"></form>
    <form action="#" method="post" style="text-align:center;">
    <input type="hidden" value="<?php echo $id;?>" name="id">
    <input type="submit" name="not_permit" value="不可">
    </form>
</div>
<?php }?>


