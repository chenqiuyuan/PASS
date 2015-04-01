<?php
	
	header("Content-type:text/html;charset=utf-8");  
	$con=mysql_connect("localhost","root","");
	if(!$con){
		die('Could not connect' . mysql_error());
	}

	mysql_select_db("hellodb",$con);

	$username=$_GET['username'];


	$verify_sql="
		update account
		set status=1
		where username=" . $username . ";";

	if(mysql_query($verify_sql,$con)){
		echo "恭喜您注册成功";
	}else{
		echo "对不起，出错了";
	}

	mysql_close($con);




?>