<?php 
$host = "localhost";
$username = "root"; 
$password = "root";
$dbname = "pm_simple";

$mysqli = new mysqli($host, $username, $password, $dbname);
if ($mysqli->connect_error) {
	error_log($mysqli->connect_error);
	exit;}
    
    $sql = "SELECT title,body,id 
    FROM specific_information
    WHERE flag = 0";
    $result = $mysqli->query($sql);
	$users1 = array();

	while ($row = $result->fetch_assoc()) {
		$users1[] = $row;
	} 
$infos = $users1;
?>

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
<body><?php foreach ($infos as $info) {?>
    <a href="admin_inquery_write.php?id=<?php echo $info['id']?>"><h2><?php echo $info['title']?></h2></a><hr><?php } ?></body></html>