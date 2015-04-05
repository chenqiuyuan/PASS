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

	$type_in_username=$_POST["username"];//输入的账号
	$type_in_userpwd=$_POST["userpwd"];//输入的密码

	$sql="select * from account where username='" . $type_in_username . "'";
	$result=mysql_query($sql,$con);
	$row=mysql_fetch_array($result);

	$verify_status=$row['status'];		//数据库取出的激活状态码
	$verify_username=$row['username'];	//数据库取出的账号
	$verify_userpwd=$row['userpwd'];	//数据库取出的密码

	if(!$verify_username){
		echo "对不起，该用户不存在~";
		die();
	}

	if($verify_username&&$verify_status==0){
		echo "对不起，该用户尚未激活";
		die();
	}


	if($verify_userpwd==md5($type_in_userpwd)){
		echo "恭喜登陆成功";
	}else{
		echo "对不起账号或密码错误";
	}
	
	



?>


</body>
</html>