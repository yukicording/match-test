<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>e-dea（イーデア）－大学恋活マッチング</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="core/pages/css/top.css">
    <link rel="stylesheet" href="core/pages/css/top_responsible.css">
    <link rel="stylesheet" href="core/pages/css/luxbar.min.css">
    <link rel="stylesheet" href="core/pages/css/login.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,100' rel='stylesheet' type='text/css'>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
</head>
<body>
<header id="luxbar" class="luxbar-fixed">
    <input type="checkbox" class="luxbar-checkbox" id="luxbar-checkbox"/>
    <div class="luxbar-menu luxbar-menu-right luxbar-menu-light">
        <ul class="luxbar-navigation">
            <li class="luxbar-header">
                <a href="index.php?page=top" class="luxbar-brand">e-dea</a>
                <label class="luxbar-hamburger luxbar-hamburger-doublespin" 
                id="luxbar-hamburger" for="luxbar-checkbox"> <span></span> </label>
            </li>
            <li class="luxbar-item"><a href="index.php?page=top#features">特徴</a></li>
            <li class="luxbar-item"><a href="index.php?page=top#howto">使い方</a></li>
            <li class="luxbar-item"><a href="index.php?page=top#price">料金</a></li>
            <li class="luxbar-item"><a href="index.php?page=login" class="login">ログイン</a></li>
            <li class="luxbar-item"><a href="index.php?page=sign_up" class="login">新規登録</a></li>
        </ul>
    </div>
</header>

    




	<div id="login">

		<h3>ログインフォーム<a href="index.php?page=sign_up" class="login">（新規登録はこちら）</a></h3>

		<form action="" method="post">

			<fieldset>

				<p><input type="text" name="email" placeholder="メールアドレス"></p> <!-- JS because of IE support; better: placeholder="Username" -->

				<p><input type="password" name="user_password" placeholder="パスワード"></p> <!-- JS because of IE support; better: placeholder="Password" -->

				<p><a href="#">パスワードをお忘れの方はこちら</a></p>

				<p><input type="submit" value="ログイン"></p>
                
			</fieldset>

		</form>

		

	</div> <!-- end login -->

    </body>
</html>