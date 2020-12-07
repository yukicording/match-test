<?php if(isset($_GET['id'])) {
$id = $_GET['id'];
}
$host = "localhost";
$username = "root"; 
$password = "root";
$dbname = "pm_simple";
$mysqli = new mysqli($host, $username, $password, $dbname);
if ($mysqli->connect_error) {
	error_log($mysqli->connect_error);
	exit;}
    
if(isset($_POST['submit'])) {
    $title = $_POST['title'];
    $body = $_POST['body'];
    $time = time();
    $id = $_POST['id'];
    $user_id = $_POST['user_id'];
    
    $sql = "INSERT INTO
				common_information (
					id,
					title,
                    body,
					time,
                    user_id
				)
				VALUES (
					NULL,
					?,
                    ?,
					?,
                    ?)";
    //flag=１は個別ﾒｯｾｰｼﾞ
   $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ssii",$title, $body, $time, $user_id);
    $stmt->execute();
     $result = $stmt->get_result();

    $sql = "UPDATE specific_information
				SET flag = 1
				WHERE id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i",$id);
    $stmt->execute();
     $result = $stmt->get_result();

header('Location: admin_inquery.php');

}




    $sql = "SELECT title,body,id,user_id
    FROM specific_information
    WHERE id = $id";
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
    <a href="index.php?page=information_content&id=<?php echo $info['id']?>"><h2><?php echo $info['title']?></h2></a><p><?php echo $info['body']?></p><hr><form method="post" action="#"><input type="text" placeholder="タイトル" name="title"><br><textarea style="width:70%;height:300px;" name="body"></textarea><br><input type="hidden" name="user_id" value="<?php echo $info['user_id']?>"><input type="hidden" name="id" value="<?php echo $id?>"><input type="submit" value="送信" name="submit"></form><?php } ?></body></html>