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
		
			$query="SELECT * FROM about WHERE id=$id";
			$sendQuery=mysqli_query($db_con,$query);
            $row=mysqli_fetch_assoc($sendQuery);
?>
        <form class="form-horizontal" action="" method="post">
                <h3> Update About section</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="name"  value="<?=$row['name']?>" placeholder="Add name" >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="nameblue"  value="<?=$row['nameblue']?>" placeholder="Add name which will be written in blue" >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subtitle"  value="<?=$row['subtitle']?>" placeholder="Add subtitle" >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="text"  value="<?=$row['text']?>" placeholder="Add text" >
                </div>
                <div class="form-group ">
                    <input type="submit" class="form-control btn btn-success" name="submit" value="Update">
                </div>
        </form>
            
   

<?php
    include "db.php";

    $id=$_GET['id'];
    if( isset($_POST["submit"]) ){
        
		if(!empty($_POST['name']) && !empty($_POST['nameblue']) &&!empty($_POST['subtitle'])&&!empty($_POST['text']) ){
            
			$name=$_POST["name"];
			$nameblue=$_POST["nameblue"];
			$subtitle=$_POST["subtitle"];
            $text=$_POST["text"];
			$query="UPDATE about SET name='$name', nameblue='$nameblue' ,subtitle='$subtitle', text='$text' WHERE id=$id";
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
