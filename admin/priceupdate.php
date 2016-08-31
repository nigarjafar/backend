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
		
			$query="SELECT * FROM prices WHERE id=$id";
			$sendQuery=mysqli_query($db_con,$query);
            $row=mysqli_fetch_assoc($sendQuery);
?>
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                <h3> Update Prices</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="name" value="<?=$row['name']?>" placeholder="Add name" required >
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="price" value="<?=$row['price']?>" placeholder="Add Price" required >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="per" value="<?=$row['per']?>" placeholder="Add subscription type" required >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="attr1" value="<?=$row['attr1']?>" placeholder="Add attribute 1" required >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="feature1" value="<?=$row['feature1']?>" placeholder="Add feature 1"  >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="attr2" value="<?=$row['attr2']?>" placeholder="Add attribute 2" required >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="feature2" value="<?=$row['feature2']?>" placeholder="Add feature 2"  >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="attr3" value="<?=$row['attr3']?>" placeholder="Add attribute 3" required >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="feature3" value="<?=$row['feature3']?>" placeholder="Add feature 3"  >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="attr4" value="<?=$row['attr4']?>" placeholder="Add attribute 4" required >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="feature4" value="<?=$row['feature4']?>" placeholder="Add feature 4"  >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="type" value="<?=$row['type']?>" placeholder="Add type (write disabled or nothing)"  >
                </div>
                <div class="form-group ">
                    <input type="submit" class="form-control btn btn-success" name="submit" value="Update">
                </div>
        </form>
            
   

<?php
    include "db.php";

    $id=$_GET['id'];
    if( isset($_POST["submit"]) ){
        
		if( !empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['per']) && !empty($_POST['attr1'])&& !empty($_POST['feature1'])&& !empty($_POST['attr2'])&& !empty($_POST['feature2'])&& !empty($_POST['attr3'])&& !empty($_POST['feature3'])&& !empty($_POST['attr4'])&& !empty($_POST['feature4']) ){
            
			$name=$_POST["name"];
			$price=$_POST["price"];
            $per=$_POST["per"];
            $attr1=$_POST["attr1"];
            $feature1=$_POST["feature1"];
            $attr2=$_POST["attr2"];
            $feature2=$_POST["feature2"];
            $attr3=$_POST["attr3"];
            $feature3=$_POST["feature3"];
            $attr4=$_POST["attr4"];
            $feature4=$_POST["feature4"];
            $type=$_POST["type"];
            

            $query="UPDATE prices SET name='$name', price='$price', per='$per', attr1='$attr1', feature1='$feature1',attr2='$attr2', feature2='$feature2',attr3='$attr3', feature3='$feature3',attr4='$attr4', feature4='$feature4', type='$type' WHERE id=$id";
            $sendQuery=mysqli_query($db_con,$query);
			header("Location:pricelist.php")	;
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
