<?php

session_start();

if(isset($_SESSION['username'])){
	header("Location:mypage.php");  // mypage.phpへ遷移
}

?>

<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>擬似ログインシステム</title>
	</head>
	<body>
		<form action="mypage.php" method="post">
			<p>ユーザ名：<input type="text" name="username"</p>
			<p>パスワード：<input type="text" name="password"></p>
			<p><input type="submit" value="ログイン"></p>
		</form>
	</body>
</html>
