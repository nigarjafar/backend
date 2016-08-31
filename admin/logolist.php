<?php
session_start();
if($_SESSION["login"]){
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
<table class=" table table-striped">
	<thead>
		<tr>
			<th>id</th>
			<th>img</th>
		</tr>
	</thead>
	<tbody>
<?php 
include "db.php";
$sql="SELECT * FROM logos";
$query=mysqli_query($db_con,$sql);
		
	 while ($row=mysqli_fetch_assoc($query)) {?>
	 	<tr>
<?php foreach ($row as $key => $value) { ?>
		  <td><?=$value?></td>
		
<?php } ?> 
           <td><a class='btn btn-success' href="logoupdate.php?id=<?= $row['id'] ?>">Edit</a></td> 
        </tr>
	
<?php } ?>
    </tbody>		
</table>
<a href="adminpage.php" class="btn btn-default">Back</a>
</body>
</html>
<?php
}else{
	header("Location:admin.php");
}
	?>