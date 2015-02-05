<?php

function echoVisitCount($num_data) {
	echo "こんにちは！あなたの訪問は" . $num_data . "回目です！";
}

if (isset($_COOKIE['visitcount'])) {
	$count_data = $_COOKIE['visitcount'];

	if ($count_data == 10) {
		echoVisitCount($count_data);
		setcookie('visitcount',$count_data,time()-1);
	} else {
		echoVisitCount($count_data);
		setcookie('visitcount',$count_data+1,time()+60*60*24);
	}
	
} else {
	setcookie('visitcount','1',time()+60*60*24);
	echo "ようこそ！初めての訪問ありがとうございます！";	
}

?>
