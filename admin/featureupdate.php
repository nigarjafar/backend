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
		
			$query="SELECT * FROM features WHERE id=$id";
			$sendQuery=mysqli_query($db_con,$query);
            $row=mysqli_fetch_assoc($sendQuery);
?>
        <form class="form-horizontal" action="" method="post">
                <h3> Update Features</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="icon" value="<?=$row['icon']?>" placeholder="Add icon name" >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="heading" value="<?=$row['heading']?>" placeholder="Add heading" >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="text" value="<?=$row['text']?>" placeholder="Add text" >
                </div>
                <div class="form-group ">
                    <input type="submit" class="form-control btn btn-success" name="submit" value="Update">
                </div>
        </form>
            
   

<?php

    $id=$_GET['id'];
    if( isset($_POST["submit"]) ){
        
		if(!empty($_POST['icon']) && !empty($_POST['heading']) &&!empty($_POST['text']) ){
            
			$icon=$_POST["icon"];
			$heading=$_POST["heading"];
            $text=$_POST["text"];
			$query="UPDATE features SET icon='$icon', heading='$heading' , text='$text' WHERE id=$id";
			$sendQuery=mysqli_query($db_con,$query);
            header("Location:adminfeature.php");
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
