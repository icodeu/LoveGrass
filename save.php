<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<title>保存数据</title>
</head>
<body>
<?php
	$username = $_GET['username'];
	$score = $_GET['score'];
	include 'mysql_connect.php';
	$result = mysql_query("SELECT COUNT(*) FROM lovecount WHERE username='$username'");
	$row = mysql_fetch_array($result);
	if($row[0]==0){//该用户第一次玩
		mysql_query("INSERT INTO lovecount(username, userscore) VALUES ('$username', '$score')") or die(mysql_error());
	}else{//该用户第二次玩 保存最高纪录
		$result = mysql_query("SELECT * FROM lovecount WHERE username='$username'");
		$row = mysql_fetch_array($result);
		if($score > $row['userscore']){//新纪录 更新之
			$usertime = time();
			mysql_query("DELETE FROM lovecount WHERE username = '$username'");
			mysql_query("INSERT INTO lovecount(username, userscore) VALUES ('$username', '$score')") or die(mysql_error());
		}
	}
	echo "<script language='javascript' type='text/javascript'>";
	echo '
			var index_url = "index.php";
			window.location.href = index_url;
		';
	echo "</script>";
?>
</body>
</html>