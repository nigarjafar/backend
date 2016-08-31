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
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                <h3> Update Logos</h3>
                <div class="form-group">
                    <input type="file" class="form-control" name="img" required >
                </div>
                <div class="form-group ">
                    <input type="submit" class="form-control btn btn-success" name="submit" value="Update">
                </div>
        </form>
            
   

<?php
    include "db.php";
    $id=$_GET['id'];
    if( isset($_POST["submit"]) ){
        
		if(!empty($_FILES['img']) ){
    
            $fileSource=$_FILES["img"]["tmp_name"];
            $fileName=$_FILES["img"]["name"];
            $fileType=pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);

            $targetFile="assets/img/logos/".date('dmYGis').".".$fileType;
            
            move_uploaded_file($fileSource,"../".$targetFile);
            
            $query="UPDATE logos SET img='$targetFile' WHERE id=$id ";
            $sendQuery=mysqli_query($db_con,$query);
			/*header("Location:logolist.php")	;*/
		}
        else{ ?>
            <p class="text-danger">Please fill in all sections</p>
            <?php
			}
	   }

?>
        
 </body>
</html>
<?php
}
else{ header("Location:admin.php");}
?>
