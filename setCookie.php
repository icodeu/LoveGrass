<?php
	$username = $_GET['username'];
	include 'mysql_connect.php';
	$result = mysql_query("select count(*) from lovecount where username='$username'");
	$row = mysql_fetch_array($result);
	if($row[0]==0){
		setcookie("username",$username,time()+3600*24*30);
		header('location:play.php?username='.$username);
	}
	else{
		header("Content-type: text/html; charset=utf-8");
		echo "<script type='text/javascript' charset='utf-8'>";
		echo '
			alert("真是巧啦，追草哥的人这么多，已经有人使用过这个名字了，麻烦请换一个再追好嘛");
			var url = "play.php"
			window.location.href = url;
			';
		echo "</script>";
	}
?>