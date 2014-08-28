<?php
if (isset($_COOKIE["username"])) {
	$username = $_COOKIE["username"];
	//echo $_COOKIE["username"];
} else {
	echo "<script language='javascript' type='text/javascript'>";
	echo '
			var username = prompt("第一次进入该应用，请输入大大姓名或小小昵称");
			if (username != "" && username!=null) {
				var url = "setCookie.php?username="+username;
				window.location.href = url;
			} else {
				var index_url = "index.php";
				window.location.href = index_url;
			}
		';
	echo "</script>";
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>
			我要追草！
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
	</head>
	<body background="images/play_bg.jpg">
		<!--<div style="display:inline-block;width:100%; height:100%;margin: 0 auto; position:relative;" id="gameDiv">-->
		<div class="container">
			<div class="page-header">
		  		<h2>追草作战<small>你为校草有多心动</small></h2>
			</div>
			<div style="text-align:center;">
				<span id="timer" style="color:#00B82E;font-size:20px;">60 秒</span>
			</div>
			<center><img src="images/heart1.png" width="300" id="button"/></center>
			<input type="text" id="username" hidden="hidden" value="<?php echo $_GET['username'] ?>">
				<center>
				<center>
				<div class="alert alert-success" role="alert" style="width: 200px;" id="guide">
					***如何追草：用力开始点击上面的心后开始计时1分钟，看你1分钟内能为交大校草心动多少次~~~
				</div>
				</center>
				<span id="result"></span>
				</center>
		</div>
		<script src="http://code.jquery.com/jquery-1.11.1.min.js" charset="utf-8"></script>
		<script type="text/javascript" charset="utf-8">
			var initial = 6000;
			var count = initial;
			var counter; //10 will  run it every 100th of a second
			var state = 0;
			var total = 0;
			
			function timer() {
				
				if (count <= 0) {
					clearInterval(counter);
					state = 0;
					$('#timer').hide();
					dp_submitScore(total);
					offEvent();
					return;
				}
				count--;
				displayCount(count);
			}
			
			function dp_submitScore(score) {
				var username = document.getElementById('username').value;
				alert('游戏结束,您为交大校草心动了' + score + '次，点击确定返回首页后分享至朋友圈，让更多人来追草');
				window.location.href = "save.php?username=" + username + "&score=" + score;;
			}
			
			function displayCount(count) {
				var res = count / 100;
				document.getElementById("timer").innerHTML = res.toPrecision(count.toString().length) + " 秒";
			}
			$(document).on('touchmove', function(e) {
				e.preventDefault();
			})
			displayCount(initial);
			initEvent();
			
			function offEvent() {
				$('#button').unbind();
			}
			
			function initEvent() {
				$('#button').on('touchstart click', function(e) {
					if (!state) {
						state = 1;
						document.getElementById('guide').hidden="hidden";
						counter = setInterval(timer, 10);
						
					}
					this.classList.add('active');
					e.preventDefault();
				});
				$('#button').on('touchend click', function(e) {
					if (state) {
						total++;
						if (total % 2 != 0)
							document.getElementById('button').src = "images/heart1.png";
						else
							document.getElementById('button').src = "images/heart2.png";
						document.getElementById('result').innerHTML = '<center><div class="alert alert-success" role="alert" style="width: 200px;">' +
		'<span style="font-size: 20";>为交大校草心动</span>'+'<span style="font-size: 40;color: #FF0000;">'+total+'</span>'+'<span style="font-size: 20";>次</span>' + '</div><center>';
					}
					this.classList.remove('active');
					e.preventDefault();
				});
			}</script>
	</body>
</html>