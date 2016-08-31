<?php
session_start();
if($_SESSION["login"]){
?>

<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="../assets/css/bootstrap.css">
   <link rel="stylesheet" href="../assets/css/bootstrap-theme.css">
	<title>Delete</title>
        <style>
            body{ width:900px; margin:60px auto;}
            p {padding:10px;}
        </style>
	</head>
	<body>
		<p class="col-md-12 bg-danger">Are you sure you want to delete this feature?</p>
		<form action="" method="post">
			<input class="btn btn-success col-md-3 col-md-offset-3" type="submit" name="yes" value="YES">
			<input class="btn btn-danger col-md-3" type="submit" name="no" value="NO">
		</form>
		<?php
			if(isset($_POST['yes'])){
				include "db.php";
				$id=$_GET['id'];
				$query="DELETE FROM features WHERE id=$id";
				$sendQuery=mysqli_query($db_con,$query);
				header('Location:adminfeature.php');
			}else if(isset($_POST['no'])){
				header('Location:adminfeature.php');
			}
		?>
	</body>
</html>
<?php
}else{
	header("Location:admin.php");
}
	?>