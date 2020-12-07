<?php
$core_path = dirname(__FILE__);

// GETのパラメータで指定されたファイル名がcore/pagesのフォルダ内にあるかを調べる（セキュリティ対策用）
$file_exists = file_exists("{$core_path}/pages/{$_GET['page']}.php");

// GETのパラメータでpageがない場合 or 指定されたファイルが存在しない場合はリダイレクト
if (empty($_GET['page']) || $file_exists == false ) {
	header('Location: index.php?page=member_top'); 
}
//以下貧弱性ある可能性
// GETのパラメータ（?page=hogehoge）で指定されたファイルを自動的に読み込む為のスクリプト
$include_file = "{$core_path}/pages/{$_GET['page']}.php";

// ログインしていないユーザーがloginページにアクセスした場合のリダイレクト処理
session_start();
if (empty($_SESSION['user_id']) && $_GET['page'] != 'top' && $_GET['page'] != 'sign_up' && $_GET['page'] != 'login' && $_GET['page'] != 'explanation_ja') {
    if ($_GET['page'] === 'sign_up') {
        header('Location: index.php?page=sign_up'); 
    }
    elseif ($_GET['page'] === 'login') {
        header('Location: index.php?page=login'); 
    }
    elseif ($_GET['page'] === 'explanation_ja') {
        header('Location: index.php?page=explanation_ja'); 
    }
    else {
        header('Location: index.php?page=top'); 
         }
}
 
// DB接続
$host = "localhost";
$username = "root"; 
$password = "root";
$dbname = "match";

$mysqli = new mysqli($host, $username, $password, $dbname);
if ($mysqli->connect_error) {
	error_log($mysqli->connect_error);
	exit;
}

include("{$core_path}/function/user.php");
if (isset($_POST['email'], $_POST['user_password'])) {
	if (validate_credentials($_POST['email'], $_POST['user_password'], $mysqli) === true ) {
		header('Location: index.php?page=member_top');
	} else {
		echo "メールアドレスとパスワードが一致しません。";
	}
}




include("{$core_path}/function/message.php");