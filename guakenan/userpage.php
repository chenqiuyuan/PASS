<html>
<head>
<meta charset=("UTF-8")>
</head>
<body>


<?php 
	header("Content-type:text/html;charset=utf-8");  
	$con=mysql_connect("localhost","root","");
	if(!$con){
		die('could not connect' . mysql_error());
	}
	mysql_select_db("hellodb");

	$sql="select * from account where username='123'";

	$result=mysql_query($sql,$con);

	$row=mysql_fetch_array($result);

	$judge=$row['userpwd'];
	if($judge=md5(123)){
		echo "是123哟";
	}
	



?>


</body>
</html>