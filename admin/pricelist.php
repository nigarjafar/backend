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
				
			}
            table{margin:10px;}
			table td{
				padding:5px;
			}
		</style>
	</head>
	<body>
        <h1>Price List </h1>
		<table class="table-striped col-md-12" >
			<tr>
                <th>Id</th>
				<th>Name</th>
				<th>Price</th>
				<th>Per</th>
				<th>Attr1</th>
				<th>Feature1</th>
				<th>Attr2</th>
				<th>Feature2</th>
                <th>Attr3</th>
				<th>Feature3</th>
                <th>Attr4</th>
				<th>Feature4</th>
				<th>Type</th>
			</tr>
			<?php
				include "db.php";
				
				if($db_con){
					$query="SELECT * FROM prices";
					$sendQuery=mysqli_query($db_con,$query);
					while($row=mysqli_fetch_assoc($sendQuery)){?>
						<tr>
                        <?php
						foreach($row as $key => $value){
							echo "<td>".$value."</td>";
						}
						$id=$row['id']; ?>
                        <td>
							<a class='btn btn-success' href='priceupdate.php?id=<?= $id ?>'>Edit</a>
						</td>
                        </tr>
					<?php }
				}else{
					echo "Cannot connect to database";
				}
			?>
		</table>
        
	</body>
<a href="adminpage.php" class="btn btn-default">Back</a>
</html>
<?php
}else{
	header("Location:admin.php");
}
	?>