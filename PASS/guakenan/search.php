<?php

	header("Content-type:text/html;charset=utf-8");  
	$con=mysql_connect("localhost","root","");
	if(!$con){
		die('Could not connect' . mysql_error());
	}

	mysql_select_db("hellodb",$con);

	$search=$_POST["search"];

	$sql="select *
		  from account
		  where email like '%" . $search . "%'";

	$search_result=mysql_query($sql,$con);		

	$search_row=mysql_fetch_array($search_result);

	$search_username=$search_row['username'];
	$search_email=$search_row['email'];
	$search_userpwd=$search_row['userpwd'];
	echo $search_email;
	echo $search_userpwd;




?>