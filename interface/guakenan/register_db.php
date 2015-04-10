
<?php
	//这一堆是用来将注册信息和数据库连接的~
	header("Content-type:text/html;charset=utf-8");//改变字符集以便于中文  
	$con=mysql_connect("localhost","root","");
	if(!$con){
		die('Could not connect' . mysql_error());
	}//

	mysql_select_db("hellodb",$con);

	$username=$_POST["username"];
	$userpwd=$_POST["userpwd"];

	$md5_userpwd=md5($userpwd);


	$sql="INSERT INTO account set username='" . $username . "',userpwd='" . $md5_userpwd . "',status=0;";

	if(mysql_query($sql,$con)){
		echo "成功</br>";
		echo "请进入邮箱进行验证~已经实现</br>";
			//mail_register.php 包含了一大堆代码，欲修改请跳转，并注意两页公用变量名mail（用户名必须用邮箱）
		include 'mail_register.php';//发送验证邮件
	}else{
		echo "失败!</br>";
		echo "原因：网络不通畅或该账号已经被注册";
	}
	mysql_close($con);


	

?>

