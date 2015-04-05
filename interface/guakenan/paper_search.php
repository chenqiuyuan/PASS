<?php

	header("Content-type:text/html;charset=utf-8");  
	$con=mysql_connect("localhost","root","");
	if(!$con){
		die('Could not connect' . mysql_error());
	}

	mysql_select_db("hellodb",$con);

	$search=$_POST["search"];


	$sql="select * from resource
		  where paper like '%" . $search . "%'";
	mysql_query("set names utf8");  
	$search_result=mysql_query($sql,$con);		


	while($search_row=mysql_fetch_array($search_result)){
		echo "科目名称：" . $search_row[0] . "</br>科目网址：" . $search_row[1] . "</br>下载次数：" . $search_row[2] . " </br>";
		echo "------------------------------------------------------------------------------------------------------------</br>";
	}

	$paper_search_name=$search_row['paper'];
	$paper_search_URL=$search_row['URL'];
	$paper_search_download=$search_row['download_times'];






?>