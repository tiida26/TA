<?php

session_start();

if(!isset($_POST['username']) && !isset($_SESSION['username'])){
		header("Location:login.php");  // login.phpへ遷移
}

if(isset($_SESSION['username'])) {
	echo "ようこそ" . $_SESSION['username'] . "さん！";
} elseif ($_POST['username'] == 'yamada' && $_POST['password'] == 'hoge1234') {
	echo "ようこそ" . $_POST['username'] . "さん！";
	$_SESSION['username'] = $_POST['username'];
} else {
	echo "ユーザー名、もしくはパスワードが違います。";
}


?>
