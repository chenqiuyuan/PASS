<?php
	header("Content-type:text/html;charset=utf-8");  
	echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">';
	$paper_name=$_POST["papername"];
	$paper_URL=$_POST["URL"];
	$paper_download_times=$_POST["download_times"];

	echo $paper_name;


	$con=mysql_connect("localhost","root","");

	if(!$con){
		die('Could not connect' . mysql_error());
	}

	mysql_select_db("hellodb");

	$sql="insert into resource set paper = '" . $paper_name . "', URL = '" . $paper_URL . "', download_times = '" . $paper_download_times ."';";

	mysql_query("set names utf8");  
	if(mysql_query($sql,$con)){
		echo "插入成功";
	}else{
		echo "wrong"; 
	}

?>