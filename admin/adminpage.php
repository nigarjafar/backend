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
        <h1 class="text-center">Admin Panel</h1>
         
        <a class="btn btn-default col-md-6" href="adminfeature.php">Edit Features List</a>
        <a class="btn btn-default col-md-6" href="adminfeatureslider.php">Edit Features Slider</a>
        <a class="btn btn-default col-md-6" href="quote.php">Edit Quotes</a>
        <a class="btn btn-default col-md-6" href="subsList.php">View Subscription List</a>
        <a class="btn btn-default col-md-6" href="aboutlist.php">Edit About</a>
        <a class="btn btn-default col-md-6" href="teamlist.php">Edit Team</a>
        <a class="btn btn-default col-md-6" href="pricelist.php">Edit Prices</a>
        <a class="btn btn-default col-md-6" href="logolist.php">Edit Logos</a>
        
        
        <form action="logout.php" method="post">
            <input type="submit" value="Logout" class="btn btn-danger col-md-12" name="logout">
        </form>
    </body>
</html>
<?php
}
else{ header("Location:admin.php");}
?>
