<?php
if (isset($_POST['subscribe'])) {
	$name= $_POST['name'];
	$mail=$_POST['mail'];
	

if (!empty($name) && !empty($mail)) {
	include "db.php";
	$sql="INSERT INTO subscribe (`name`,`mail`) VALUES ('$name','$mail')";

	$query=mysqli_query($db_con,$sql);
	header("Location:../index.php");

}
else{	
	echo "Type a name and e-mail";
		
		
	}
}
