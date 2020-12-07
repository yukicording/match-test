<?php


$host = "localhost";
$username = "root"; 
$password = "root";
$dbname = "match";

$mysqli = new mysqli($host, $username, $password, $dbname);
if ($mysqli->connect_error) {
	error_log($mysqli->connect_error);
	exit;
}
$id = (int)$_POST['user_id'];
$kind = (int)$_POST['kind'];
//upload.php

if(isset($_POST["image"]))
{
	$data = $_POST["image"];


	$image_array_1 = explode(";", $data);

	$image_array_2 = explode(",", $image_array_1[1]);

	

	$data = base64_decode($image_array_2[1]);

	$imageName = time() . '.png';

	file_put_contents("../pages/img/".$imageName, $data);
    
    $sql = "SELECT id from temporary_img WHERE user_id = ? AND kind = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ii", $id, $kind);
    $stmt->execute();
    $result = $stmt->get_result();
    $users2 = array();

	while ($row = $result->fetch_assoc()) {
		$users2[] = $row;
	} 
    
    if(empty($users2)) {

    $date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO `temporary_img` (`id`, `body`, `user_id`, `kind`) VALUES (NULL, ?, ?, ?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("sii",$imageName, $id, $kind);
    $stmt->execute();
    $result = $stmt->get_result();
    $sql = "UPDATE images SET flag = 1 WHERE image_id = ? AND kind = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ii",$id, $kind);
    $stmt->execute();
     $result = $stmt->get_result();
}
   

  if(!empty($users2)) {  
    $sql = "UPDATE temporary_img SET body = ? WHERE user_id = ? AND kind = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("sii",$imageName, $id, $kind);
    $stmt->execute();
     $result = $stmt->get_result();
     $sql = "UPDATE images SET flag = 1 WHERE image_id = ? AND kind = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ii",$id, $kind);
    $stmt->execute();
     $result = $stmt->get_result();
    
}
}

?>
