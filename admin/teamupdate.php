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
		
			$query="SELECT * FROM team WHERE id=$id";
			$sendQuery=mysqli_query($db_con,$query);
            $row=mysqli_fetch_assoc($sendQuery);
?>
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                <h3> Update Team member</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="name" value="<?=$row['name']?>" placeholder="Add name" required >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="position" value="<?=$row['position']?>" placeholder="Add position" required >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="text" value="<?=$row['text']?>" placeholder="Add info" required >
                </div>
                <div class="form-group">
                    <input type="file" class="form-control" name="img" required >
                </div>
                <h3>Social Media</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="facebook" value="<?=$row['facebook']?>" placeholder="Add facebook "  >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="twitter" value="<?=$row['twitter']?>" placeholder="Add twitter" >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="skype" value="<?=$row['skype']?>" placeholder="Add skype"  >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="mail" value="<?=$row['envelope-o']?>" placeholder="Add mail" >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="linkedin" value="<?=$row['linkedin']?>" placeholder="Add linkedin"  >
                <div class="form-group ">
                    <input type="submit" class="form-control btn btn-success" name="submit" value="Update">
                </div>
        </form>
            
   

<?php

    if( isset($_POST["submit"]) ){
        
		if( !empty($_POST['name']) && !empty($_POST['position']) && !empty($_POST['text']) && !empty($_FILES['img']) ){
            
			$name=$_POST["name"];
			$position=$_POST["position"];
            $text=$_POST["text"];
            $facebook=$_POST["facebook"];
            $twitter=$_POST["twitter"];
            $skype=$_POST["skype"];
            $linkedin=$_POST["linkedin"];
            $mail=$_POST["mail"];
    
            $fileSource=$_FILES["img"]["tmp_name"];
            $fileName=$_FILES["img"]["name"];
            $fileType=pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);

            $targetFile="assets/img/people/".date('dmYGis').".".$fileType;
            
            move_uploaded_file($fileSource,"../".$targetFile);
            
            $query="UPDATE team SET name='$name',img='$targetFile', position='$position', text='$text', facebook='$facebook', twitter='$twitter',skype='$skype', linkedin='$linkedin', `envelope-o`='$mail' WHERE id=$id ";
            $sendQuery=mysqli_query($db_con,$query);
			header("Location:teamlist.php")	;
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
