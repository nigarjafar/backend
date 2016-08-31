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
        
        <form class="form-horizontal" action="" method="post">
                <h3> Update Features</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="heading" placeholder="Add heading" >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="text" placeholder="Add text" >
                </div>
                <div class="form-group ">
                    <input type="submit" class="form-control btn btn-success" name="submit">
                </div>
        </form>
            
   

<?php
    include "db.php";

    $id=$_GET['id'];
    if( isset($_POST["submit"]) ){
        
		if(!empty($_POST['heading']) &&!empty($_POST['text']) ){
            
			$heading=$_POST["heading"];
            $text=$_POST["text"];
			$query="UPDATE featureslider SET  name='$heading' , text='$text' WHERE id=$id";
			$sendQuery=mysqli_query($db_con,$query);
            header("Location:adminfeatureslider.php");
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
