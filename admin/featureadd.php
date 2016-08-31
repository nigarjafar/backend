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
         
        
        
        
        
        <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <h3> Add Features</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="icon" placeholder="Add icon name" >
                </div>
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

    if( isset($_POST["submit"]) ){
        
		if(!empty($_POST['icon']) && !empty($_POST['heading']) &&!empty($_POST['text']) ){
            
			$icon=$_POST["icon"];
			$heading=$_POST["heading"];
            $text=$_POST["text"];
			$query="INSERT INTO features (icon,heading,text) VALUES ('$icon','$heading','$text')";
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
