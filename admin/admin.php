<?php 
$host = "localhost";
$username = "root"; 
$password = "root";
$dbname = "pm_simple";

$mysqli = new mysqli($host, $username, $password, $dbname);
if ($mysqli->connect_error) {
	error_log($mysqli->connect_error);
	exit;
}?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>MATURE（４０代からの恋活マッチング）</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../core/pages/css/member.css">
    <link rel="stylesheet" href="../core/pages/css/member_responsible.css">
    <link rel="stylesheet" href="../core/pages/css/test.css">
</head>
<body>
    <a href="admin_image.php"><p>画像変更</p></a><a href="admin_age.php"><p>年齢確認</p></a><p><a href="admin_inquery.php">お問い合わせメール受信送信</a></p><a href="admin_information.php"><p>お知らせ配信</p></a>
    </body></html>