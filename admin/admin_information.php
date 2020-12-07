<?php 
$host = "localhost";
$username = "root"; 
$password = "root";
$dbname = "pm_simple";

$mysqli = new mysqli($host, $username, $password, $dbname);
if ($mysqli->connect_error) {
	error_log($mysqli->connect_error);
	exit;}
    
    if(isset($_POST['check'])){
    $body =  $_POST['body'];
    $title =  $_POST['title'];
        $time = time();
    $sql = "INSERT INTO
				common_information (
					id,
					title,
                    body,
					time,
                    user_id,
                    flag
				)
				VALUES (
					NULL,
					?,
                    ?,
					?,
                    0,
                    0)";
    
   $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ssi",$title, $body, $time);
    $stmt->execute();
     $result = $stmt->get_result();
    
    echo "おっけ";
}?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>MATURE（４０代からの恋活マッチング）</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="core/pages/css/member.css">
    <link rel="stylesheet" href="core/pages/css/member_responsible.css">
    <link rel="stylesheet" href="core/pages/css/test.css">
</head>
<body><h1>お知らせ送信</h1>
    <form method="post" action="#">
    <input type="text" placeholder="タイトル" name="title">
    <textarea placeholder="本文" name="body"></textarea>
    <input type="submit" name="check"></form>
    </body></html>