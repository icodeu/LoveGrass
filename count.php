<html>
	<meta charset="UTF-8"/>
	<head>
		<title>
		</title>
	</head>
	<script type="text/javascript" charset="utf-8">
		var x = 0;
		var isFirstClick = true;
		function checkCount(){
			if(isFirstClick==true){
				var end_t=setTimeout("alert('游戏结束,您点击了'+x+'次!点击确定返回首页后分享至朋友圈，让更多人来追草')",60000);
				timedCount();
				isFirstClick = false;
			}
			x = x + 1;
			document.getElementById('showCount').innerHTML = x;
			if(x%2!=0)
				document.getElementById('image').src="images/heart1.jpg";
			else
				document.getElementById('image').src="images/heart.jpg";
		}
		var c=0
		var t
		function timedCount()
		{
		document.getElementById('showTime').value=60-c;
		c=c+1;
		t=setTimeout("timedCount()",1000);
		}
	</script>
	<body>
		<!--
		<input type="button" value="点我" onclick="checkCount()"/>
		-->
		<img src="images/heart.jpg" width="200px" onclick="checkCount()" id="image"/>
		时间还剩下<input type="text" id="showTime"/>
		<br />
		点击了<span id="showCount"></span>次
	</body>
</html>