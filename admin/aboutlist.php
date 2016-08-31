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
    <style>
        table{width:95%; margin:0 auto}
        td,th{padding:5px 1px;}
    </style>
</head>
<body>
    <h1>About list</h1>
	<table class="table-striped">
	<thead>
		<tr>
			<th>id</th>
			<th>Name</th>
			<th>Name(blue)</th>
			<th>Subtitle</th>
			<th>Text</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		include "db.php";
				 $sql="SELECT * FROM about";
	 $query=mysqli_query($db_con,$sql);
		
	 while ($row=mysqli_fetch_assoc($query)) {?>
	 	<tr>
<?php foreach ($row as $key => $value) {?>
		<td><?=$value?></td>
<?php } ?>
            <td><a class="btn btn-success" href="aboutupdate.php?id=<?=$row['id']?>">Edit</a></a></td>
        </tr>   
<?php	 } ?>
		</tbody>	
		</tr>
	</table>

    <h1>About list 3rd Tab</h1>
	<table class="table-striped">
	<thead>
		<tr>
			<th>id</th>
			<th>Icon</th>
			<th>Name</th>
			<th>Text</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		include "db.php";
				 $sql="SELECT * FROM about3tab";
	 $query=mysqli_query($db_con,$sql);
		
	 while ($row=mysqli_fetch_assoc($query)) {?>
	 	<tr>
<?php foreach ($row as $key => $value) {?>
		  <td><?=$value?></td>
<?php } ?>
            <td><a class="btn btn-success" href="abouttabupdate.php?id=<?=$row['id']?>">Edit</a></a></td>
        </tr>   
<?php	 } ?>
		</tbody>	
		</tr>
	</table>


<a href="adminpage.php" class="btn btn-default">Back</a>
</body>
</html>
<?php
}else{
	header("Location:admin.php");
}
	?>