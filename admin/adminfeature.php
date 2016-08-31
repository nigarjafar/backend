<?php
session_start();
if($_SESSION["login"]){
?>


<!DOCTYPE html>
<html>
	<head>
		<title>All users</title>
		<link rel="stylesheet" href="../assets/css/bootstrap.css">
		<style>
			body{
				width:1000px;margin:0 auto;
			}
            table{margin:10px;}
			table td{
				padding:5px;
			}
		</style>
	</head>
	<body>
        <h1>Features </h1>
        <a class='col-md-2 btn btn-success' href='featureadd.php'>Add</a>
		<table class="col-md-12" >
			<tr>
                <th>Id</th>
				<th>Icon</th>
				<th>Heading</th>
				<th>Text</th>
				<th>Operations</th>
			</tr>
			<?php
				include "db.php";
				
				if($db_con){
					$query="SELECT * FROM features";
					$sendQuery=mysqli_query($db_con,$query);
					while($row=mysqli_fetch_assoc($sendQuery)){?>
						<tr>
                        <?php
						foreach($row as $key => $value){
							echo "<td>".$value."</td>";
						}
						$id=$row['id']; ?>
                        <td>
							<a class='btn btn-success' href='featureupdate.php?id=<?= $id ?>'>Update</a>
							<a class='btn btn-danger' href='featuredelete.php?id=<?= $id ?>'>Delete</a>
						</td>
                        </tr>
					<?php }
				}else{
					echo "Qosulmadi!";
				}
			?>
		</table>
    <a href="adminpage.php" class="btn btn-default">Back</a> 
	</body>
</html>
<?php
}else{
	header("Location:admin.php");
}
	?>