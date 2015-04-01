<?php
	header("Content-type:text/html;charset=utf-8");  
	$con=mysql_connect("localhost","root","");
	if(!$con){
		die('Could not connect' . mysql_error());
	}

	mysql_select_db("hellodb",$con);

	$username=$_POST["username"];
	$userpwd=$_POST["userpwd"];
	$useremail=$_POST['useremail'];

	$md5_userpwd=md5($userpwd);


	$sql="INSERT INTO account VALUES ( '$username', '$md5_userpwd','$useremail','0')";

	if(mysql_query($sql,$con)){
		echo "成功";
	}else{
		echo "失败";
	}
	mysql_close($con);

	include 'mail_register.php';//发送验证邮件
?>

	<html>
	<body>
		<br/>
		请进入邮箱进行验证~待实现
		<a href="welcom.php">返回首页</a>
		<br/>

	</body>
	</html>