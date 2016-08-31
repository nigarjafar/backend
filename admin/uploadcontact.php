<?php if (isset($_POST['confirm'])) {
	$mail= $_POST['mail'];
	$place=$_POST['place'];
	$phone=$_POST['phone'];
	

if (!empty($_POST['mail']) && !empty($_POST['place']) && !empty($_POST['phone'])) {
	include "db.php";
	$sql="UPDATE editcontact SET mail='$mail',place='$place',phone='$phone'";

	$query=mysqli_query($db_con,$sql);
	header("adminpage.php");

}
else{	
	echo "Type a mail,place and phone";
		
		
	}
}
?>