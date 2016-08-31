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
        <h1>Team List </h1>
		<table class="table-striped col-md-12" >
			<tr>
                <th>Id</th>
				<th>Name</th>
				<th>Position</th>
				<th>img</th>
				<th>Info</th>
				<th>Mail</th>
				<th>Facebook</th>
				<th>Twitter</th>
				<th>Linkedin</th>
				<th>Skype</th>
				<th>Operations</th>
			</tr>
			<?php
				include "db.php";
				
				if($db_con){
					$query="SELECT * FROM team";
					$sendQuery=mysqli_query($db_con,$query);
					while($row=mysqli_fetch_assoc($sendQuery)){?>
						<tr>
                        <?php
						foreach($row as $key => $value){
							echo "<td>".$value."</td>";
						}
						$id=$row['id']; ?>
                        <td>
							<a class='btn btn-success' href='teamupdate.php?id=<?= $id ?>'>Edit</a>
						</td>
                        </tr>
					<?php }
				}else{
					echo "Cannot connect to database";
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