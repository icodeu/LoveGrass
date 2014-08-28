<?php
if (isset($_COOKIE["username"])) {
	$username = $_COOKIE["username"];
	//echo $_COOKIE["username"];
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<title>
			交大校草我要追！
		</title>
	</head>
	<body background="images/index_bg.jpg">
		<img src="images/photo1.jpg" width="1"/>
		<div class="container">
			<center><img src="images/index_title.png" width="260"/></center>
			<center><img src="images/index_des.png" width="300"/></center>
			
			
			<div class="jumbotron">
  				<h5><?php
				if (isset($_COOKIE["username"]))
					echo '欢迎您，<span class="glyphicon glyphicon-user"></span>' . $username;
				else
					echo "欢迎来追草";
 ?></h5>
  				<p style="font-size: 18;">
  					<?php
					include 'mysql_connect.php';
					$result = @mysql_query("SELECT COUNT(*) FROM lovecount WHERE username='$username'");
					$row = @mysql_fetch_array($result);
					if ($row[0] != 0) {
						$result = @mysql_query("SELECT * FROM lovecount WHERE username='$username'");
						$row = @mysql_fetch_array($result);
						echo '<h5>您的追草最高指数是' . '<span style="color: #FF0000;">' . $row['userscore'] . '</span>' . ' </h5>';
						echo '<h5>啊？这么喜欢草哥居然没有排在第一，我要继续！</h5>';
					} else {
						echo "<h5>您还没有追过交大校草，点击下面的按钮开始追吧！</h5>";
					}
  					?>
  					<input type="text" name="userscore" id="userscore" value="<?php echo $row['userscore'] ?>" hidden="hidden"/>
				</p>
  				<center><p><a class="btn btn-success" role="button" href="play.php?username=<?php echo $username ?>"><?php if($row[0]!=0) echo '继续'; else echo '我要' ?>追草</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-primary" role="button" href="rank.php">查看追草大排行</a></p></center>
			</div>
			
			<hr />
			<!-- 以下为简介 -->
			<center><img src="images/index_bottom.png" width="300"/></center>
			<div class="media">
			  	<a class="pull-left" href="#">
			    <img class="media-object" src="images/photo164x64.jpg" alt="...">
			  	</a>
			  <div class="media-body">
			    <h4 class="media-heading">尊称</h4>
			    	大名：校草<br />
					小名：姜尚炎
			  </div>
			</div>
			<div class="media">
			  	<a class="pull-left" href="#">
			    <img class="media-object" src="images/photo264x64.jpg" alt="...">
			  	</a>
			  <div class="media-body">
			    <h4 class="media-heading">联系方式</h4>
			    	手机号：15010409312<br />
					微信号：jsykarl (路过一定要加啊)
			  </div>
			</div>
			<div class="media">
			  	<a class="pull-left" href="#">
			    <img class="media-object" src="images/photo364x64.jpg" alt="...">
			  	</a>
			  <div class="media-body">
			    <h4 class="media-heading">情感</h4>
			    	情感状态：你说呢<br />
					性别：。。。
			  </div>
			</div>
			<div class="media">
			  	<a class="pull-left" href="#">
			    <img class="media-object" src="images/photo464x64.jpg" alt="...">
			  	</a>
			  <div class="media-body">
			    <h4 class="media-heading">在校情况</h4>
			    	学院：计算机与信息技术学院<br />
					年级：2011级
			  </div>
			</div>
			<div class="media">
			  	<a class="pull-left" href="#">
			    <img class="media-object" src="images/photo564x64.jpg" alt="...">
			  	</a>
			  <div class="media-body">
			    <h4 class="media-heading">个人信息</h4>
			    	生日：1993年4月14日<br />
					住址：西城区
			  </div>
			</div>
			<br />
			
			<!--图片轮播 -->
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="7"></li>
				  </ol>
				
				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				    <div class="item active">
				      <img src="images/img6.jpg" alt="...">
				      <div class="carousel-caption">
				      </div>
				    </div>
				    <div class="item">
				      <img src="images/img1.jpg" alt="...">
				      <div class="carousel-caption">
				      </div>
				    </div>
				    <div class="item">
				      <img src="images/img2.jpg" alt="...">
				      <div class="carousel-caption">
				      </div>
				    </div>
				    <div class="item">
				      <img src="images/img3.jpg" alt="...">
				      <div class="carousel-caption">
				      </div>
				    </div>
				    <div class="item">
				      <img src="images/img4.jpg" alt="...">
				      <div class="carousel-caption">
				      </div>
				    </div>
				    <div class="item">
				      <img src="images/img0.jpg" alt="...">
				      <div class="carousel-caption">
				      </div>
				    </div>
				    <div class="item">
				      <img src="images/img8.jpg" alt="...">
				      <div class="carousel-caption">
				      </div>
				    </div>
				    <div class="item">
				      <img src="images/img9.jpg" alt="...">
				      <div class="carousel-caption">
				      </div>
				    </div>
				  </div>
				
				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right"></span>
				    <span class="sr-only">Next</span>
				  </a>
			</div>
			<!--图片轮播 结束-->
			
			<hr />
			<!-- 以下为版权信息 -->
			<div class="alert alert-warning" role="alert">
				<p style="font-size: xx-small;">
					&copy;作者    北京交通大学
				</p>
				<p style="font-size: x-large;">
					技术总监攻城狮：校草
				</p>
				<p style="font-size: xx-small;">
					草哥手下：王欢 18210854168
				</p>
				<p style="font-size: xx-small;">
					&copy;首批内测人员
				</p>
				<p style="font-size: xx-small;">
					待定
				</p>
			</div>
					
			(c) Copyright 2014 校草. All Rights Reserved. 
			
		</div><!-- container div  -->
		
	</body>
	
	
	<!--cnzz统计代码-->
	<center hidden="hidden">
	<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cspan id='cnzz_stat_icon_1253156957'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/stat.php%3Fid%3D1253156957%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
	</center>
	
	
	<script type="text/javascript" charset="utf-8">var userscore = document.getElementById('userscore').value;
if (userscore == "")
	document.title = "交大校草我要追！";
else
	document.title = "我对交大校草的动心指数是" + userscore + ",你也来一起追交大校草吧！";</script>
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</html>
