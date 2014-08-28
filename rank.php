<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<title>追草大排行</title>
</head>

<body background="images/rank_bg.png">
    <div class="container">
    	<center><img src="images/rank_title.png" width="300"/></center>
    	<br />
    <?php
   		include "mysql_connect.php";
        $result = mysql_query("select * from lovecount order by userscore desc");
//		$count_result = mysql_query("select count(*) from lovecount");
//		$count_row = mysql_fetch_array($count_result);
//		$count_total = $count_row[0];
	    echo '<table class="table table-bordered">';
		echo '<tr><th>名次</th><th>爱慕者</th><th>心动指数</th><th>时间</th></tr>';
		$i = 1;
        while ($row = mysql_fetch_array($result))
        {
        	if($i<4){
				echo '<tr class="danger">';
	            echo '<td>'.$i++.'</td>'.'<td>'.$row['username'].'</td>'.'<td>'.$row['userscore'].'</td>'.'<td>'.$row['usertime'].'</td>';
	            echo "</tr>";
			}else{
				echo '<tr>';
	            echo '<td>'.$i++.'</td>'.'<td>'.$row['username'].'</td>'.'<td>'.$row['userscore'].'</td>'.'<td>'.$row['usertime'].'</td>';
	            echo "</tr>";
			}
        }
	?>
	<center><img src="images/rank_bottom.jpg" width="300"/></center>
	</div>

</body>
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
</html>