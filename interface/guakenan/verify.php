<?php
	//这一堆是用来验证注册邮箱的，主要实现的是将该username的status置为1，以表示激活状态
	header("Content-type:text/html;charset=utf-8");  
	$con=mysql_connect("localhost","root","");
	if(!$con){
		die('Could not connect' . mysql_error());
	}

	mysql_select_db("hellodb",$con);

	$username=$_GET['username'];
	
	echo $username;

	$verify_sql="
		update account
		set status=1
		where username='" . $username . "';";

	if(mysql_query($verify_sql,$con)){
		echo "恭喜您注册成功";
	}else{
		echo "对不起，出错了";
	}

	mysql_close($con);




?>