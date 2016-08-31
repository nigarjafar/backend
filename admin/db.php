<?php
	$host="localhost";
	$username="root";
	$password="";
	$db_name="startuply";
	$db_con=mysqli_connect($host,$username,$password,$db_name);

	if(!$db_con){
		echo "Qosulmadi!";
	}
?>