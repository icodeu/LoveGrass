
<html>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
	<head>
	<title>我要追草！</title>
	</head>
	<script type="text/javascript" charset="utf-8">
	var x = 0;
	var isFirstClick = true;
	
	function checkCount() {
		if (isFirstClick == true) {
			var end_t = setTimeout("save()", 60000);
			timedCount();
			document.getElementById('guide').hidden="hidden";
			isFirstClick = false;
		}
		x = x + 1;
		document.getElementById('showCount').innerHTML = '<center><div class="alert alert-success" role="alert" style="width: 200px;">' +
		'<span style="font-size: 20";>为校草心动</span>'+'<span style="font-size: 30;color: #FF0000;">'+x+'</span>'+'<span style="font-size: 20";>次</span>' + '</div><center>';
		if (x % 2 != 0)
			document.getElementById('image').src = "images/heart1.png";
		else
			document.getElementById('image').src = "images/heart2.png";
	}
	
	function dbcheckCount() {
		checkCount();
		checkCount();
	}
	
	var c = 0;
	var t;
	
	function timedCount() {
		document.getElementById('showTime').value = 60 - c;
		c = c + 1;
		t = setTimeout("timedCount()", 1000);
	}	
	
	function save(){
		var username = document.getElementById('username').value;
		alert('游戏结束,您点击了'+x+'次!点击确定返回首页后分享至朋友圈，让更多人来追草');
		var url = "save.php?username="+username+"&score="+x;
		window.location.href = url;
	}
	</script>
	<body background="images/play_bg.jpg">
		<div class="container">
			<div class="page-header">
		  		<h2>追草作战<small>你为校草有多心动</small></h2>
			</div>
			<center><img src="images/heart1.png" width="200px" onclick="checkCount()" id="image" ondblclick="dbcheckCount()"/></center>
			<center>
			<div class="alert alert-danger" role="alert" style="width: 200px;">
			剩余时间：<input type="text" id="showTime" disabled="disabled" style="width: 25px;"/> 秒
			</div>
			</center>

			<br />
			<span id="showCount" style="color: #FF0000;">
			</span>
			
			<center>
				<div class="alert alert-success" role="alert" style="width: 200px;" id="guide">
					***如何追草：用力开始点击上面的心后开始计时1分钟，看你1分钟内能为校草心动多少次~~~
				</div>
			</center>
			
			<input type="text" id="username" hidden="hidden" value="<?php echo $_GET['username'] ?>">
		</div>
	</body>
</html>