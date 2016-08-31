<?php 
session_start();
if($_SESSION["login"]){ ?>

<!DOCTYPE html>
<html>
    <head></head>
    
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    
    <style>
        body{width:900px; margin:0 auto;}
    </style>
    <body>
        <h1 class="text-center">Admin Panel </h1>
<?php
			include "db.php";
			$id=$_GET['id'];
		
			$query="SELECT * FROM about3tab WHERE id=$id";
			$sendQuery=mysqli_query($db_con,$query);
            $row=mysqli_fetch_assoc($sendQuery);
?>
        <form class="form-horizontal" action="" method="post">
                <h3> Update About 3rd Tab</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="icon" value="<?=$row['icon']?>" placeholder="Add icon name" >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="name" value="<?=$row['name']?>" placeholder="Add name " >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="text" value="<?=$row['text']?>" placeholder="Add text" >
                </div>
                <div class="form-group ">
                    <input type="submit" class="form-control btn btn-success" name="submit" value="Update">
                </div>
        </form>
            
   

<?php
    include "db.php";

    $id=$_GET['id'];
    if( isset($_POST["submit"]) ){
        
		if(!empty($_POST['name']) && !empty($_POST['icon'])&&!empty($_POST['text']) ){
            
			$name=$_POST["name"];
			$icon=$_POST["icon"];
            $text=$_POST["text"];
			$query="UPDATE about3tab SET name='$name', icon='$icon' , text='$text' WHERE id=$id";
			$sendQuery=mysqli_query($db_con,$query);
            header("Location:aboutlist.php");
		}
        else{ ?>
            <p class="text-danger">Please fill in all sections</p>
            <?php
			}
	   }
    else{
         
        }

?>
        
 </body>
</html>
<?php
}
else{ header("Location:admin.php");}
?>
