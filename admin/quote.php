<?php
session_start();
if($_SESSION["login"]){
?>
<!DOCTYPE html>
<html>
	<head>
		 <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	</head>
	<body>
		<table class="table table-striped">
			<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Job</th>
				<th>Workplace</th>
				<th>Quote</th>
				<th>Image URL</th>
				<th>Operations</th>
			</tr>
			</thead>
			<tbody>
			<?php
				include "db.php";
			
				$query=("SELECT * FROM quote");
				$sendQuery=mysqli_query($db_con,$query);
			
				while($row=mysqli_fetch_assoc($sendQuery)){
					echo "<tr>";
					foreach($row as $key => $value){
						echo "<td>".$value."</td>";
					}
					$id=$row['id']; ?>
					<td>
						<a class='btn btn-success' href='editquote.php?id=<?= $id ?>'>Edit</a>
					</td>
					<?php echo "</tr>";
				}
				
			?>
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