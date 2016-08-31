<?php include "admin/db.php"; ?>
<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://use.fontawesome.com/e74da2ab9b.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
  
</head>
<body>
    <header>    
        <nav class="navbar navbar-no-scroll hidden-xs">
          <div class="container">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">
                <img src="assets/img/logo.png">
              </a>
            </div>
            <ul class="nav navbar-nav navbar-left">
                <li class="home active"><a href="#">Home</a></li>
                <li class="about"><a  href="#">About</a></li>
                <li class="features"><a href="#">Features</a></li>
                <li class="prices"><a href="#">Prices</a></li>
                <li class="feedback"><a href="#">Feedback</a></li>
                <li class="team"><a href="#">Team</a></li>
                <li class="footer"><a href="#">Contacts</a></li>
                <li class="extra">
                  <a href="#" >Extra <span class="caret"></span></a>
                      <ul class="dropdown-extra">
                        <li><a href="#">Homepages <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            <ul style="top:0px;">
                                <li><a href="#">Default</a></li>
                                <li><a href="#">clickthrough</a></li>
                                <li><a href="#">colored</a></li>
                                <li><a href="#">fast registration</a></li>
                                <li><a href="#">promo</a></li>
                                <li><a href="#">video background</a></li>
                                <li><a href="#">youtube embed</a></li>
                                <li><a href="#">video embed</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Blog <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            <ul style="top:44px;">
                                <li><a href="#">List</a></li>
                                <li><a href="#">Post</a></li>
                            </ul>
                        </li>
                        <li><a href="#">E-commerce<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            <ul style="top:88px;">
                                <li><a href="#">Product Page</a></li>
                                <li><a href="#">Product List</a></li>
                                <li><a href="#">Product Grid</a></li>
                                <li><a href="#">Cart Checkout</a></li>
                                <li><a href="#">Payment Information</a></li>
                            </ul>

                        </li>
                        <li><a href="#">Registration</a></li>
                        <li><a href="#">Forms</a></li>
                        <li><a href="#">Shortcodes</a></li>
                      </ul>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                  <li><a href="#">Login</a></li>
                  <li><button>Sign up</button></li>
              </ul>
          </div>
        </nav>
        <section id="slider" class="text-center container-fluid">
            <h1>Do not wait — <font>launch</font> your startup now!</h1>
            <h3>this tempate is flexible enough to suit any kind of startup or new business</h3>
            <button>
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Get started</button>
            <button>Take tour</button>
        </section>
    </header>
    <section id="logos">
        <div class="container">
            <img class="animateTop"src="assets/img/logos/logo-1.png">
            <img class="animateBottom"src="assets/img/logos/logo-1.png">
            <img class="animateTop"src="assets/img/logos/logo-1.png">
            <img class="animateBottom"src="assets/img/logos/logo-1.png">
            <img class="animateTop"src="assets/img/logos/logo-1.png">
        </div>
    </section>
    <section id="about">
        <div class="row">
            <div class="button-group col-md-6 col-md-offset-3">
                <button class="active-button">First Tab</button>
                <button>Second Tab</button>
                <button>Third Tab</button>
            </div>
        </div>
        <div class="tabs">
<?php 
		
$query="SELECT * FROM about";
$sendQuery=mysqli_query($db_con,$query);
		
$about1=mysqli_fetch_assoc($sendQuery);
$about2=mysqli_fetch_assoc($sendQuery);
$about3=mysqli_fetch_assoc($sendQuery);
$about4=mysqli_fetch_assoc($sendQuery);
?>
            <!--First Tab-->
            <div class="container text-center firstTab">
                <div class="col-md-6 img-div animateLeft">
                    <img src="assets/img/features/people.jpg">
                </div>
                <div class="col-md-6 text-center text-div animateRight ">
                    <h2><?=$about1['name']?><font><?=$about1['nameblue']?></font></h2>
                    <p class="subtitle" style="margin: 0 auto;"><?=$about1['subtitle']?></p>
                    <p><?=$about1['text']?>.</p>
                    <button class="active-button">Get template</button>
                    <button>See elements</button>
                </div>
            </div>

            <!--Second Tab-->
            <div class="container text-center secondTab">
                <div class="col-md-6 text-center animateLeft text-div">
                    <h2><?=$about2['name']?><font><?=$about2['nameblue']?></font></h2>
                    <p class="subtitle" style="margin: 0 auto;"><?=$about2['subtitle']?></p>
                    <p><?=$about2['text']?></p>
                </div>
                 <div class="col-md-6 img-div animateRight">
                    <img src="assets/img/features/phone.jpg">
                </div>
            </div>
            <!--Third Tab-->

            <div class="container text-center thirdTab">
                <h2>3 easy steps</h2>
                <p class="subtitle animateZoom" style="margin:0 auto;">Lorem ipsum dolor sit atmet sit dolor greand fdanrh sdfs sit atmet sit dolor greand fdanrh sdfs</p>
                <div class="row animateTop">
<?php 
$query="SELECT * FROM about3tab";
$sendQuery=mysqli_query($db_con,$query);
$i=0;
while($row=mysqli_fetch_assoc($sendQuery)){ 
 ?> 
                    <div class="col-md-4 text-center">
                        <i class="fa fa-<?=$row['icon']?> fa-4x" aria-hidden="true"></i>
                        <h6><?=$row['name']?></h6>
                        <p><?=$row['text']?></p>
                    </div>     
<?php } ?>    
                    
                </div>
            </div>
        </div>
        
        <div class="bordered"></div>
        <div class="container newAgeTech">
            <div class="col-md-6 text-left text-div animateLeft">
                <h2><?=$about3['name']?><font><?=$about3['nameblue']?></font></h2>
                <p class="subtitle" style="float:left"><?=$about3['subtitle']?></p>
                <p><?=$about3['text']?></p>
            </div>
              <div class="col-md-6 img-div animateRight">
                <img src="assets/img/features/content_image1.png">
            </div>
        </div>
        <div class="container bordered"></div>
        <div class="container text-center helmet">
            <div class="col-md-6 img-div animateLeft">
                <img src="assets/img/features/helmet.jpg">
            </div>
            <div class="col-md-6 text-right text-div animateRight">
                <h2><?=$about3['name']?><font><?=$about3['nameblue']?></font></h2>
                <p class="subtitle" style="float:right"><?=$about3['subtitle']?></p>
                <p><?=$about3['text']?></p>
            </div>
        </div>
    </section>
    <section id="features">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <ul class="col-md-4">
<?php 
$query="SELECT * FROM featureslider";
$sendQuery=mysqli_query($db_con,$query);
$i=0;
while($row=mysqli_fetch_assoc($sendQuery)){ 
$i++ ?> 
                    <li id="feature<?=$i?>">
				        <span><?=$row['name']?></span>
				        <p><?=$row['text']?></p>
                    </li>       
<?php } ?>                                             
                    </ul>
                    <div class="col-md-8 img-div">
                        <img class="feature1" src="assets/img/features/rich_features_1.png">
                        <img class="feature2" src="assets/img/features/rich_features_2.png">
                        <img class="feature3" src="assets/img/features/rich_features_3.png">
                    </div>
                </div>
            </div>
        </div>
       <div class="container-fluid">
            <div class="container" id="featureList">
                <div class="row">
<?php 
$query="SELECT * FROM features";
$sendQuery=mysqli_query($db_con,$query);
$i=0;
while($row=mysqli_fetch_assoc($sendQuery)){
if($i%4==0 && $i!=0){ ?> 
                </div>
                <div class="row">
<?php } $i++;   ?>
                    <div class="col-md-3 text-center">
				        <i class="fa fa-<?=$row['icon']?> fa-3x"aria-hidden="true"></i>
					   <h6><?=$row['heading']?></h6>
				        <p><?=$row['text']?></p>
                    </div>		
<?php } ?>
                </div>
            </div>
        </div>
    </section>
    <section id="uptades">
        <div class="container">
            <div class="col-md-5 text-center animateLeft">
                <h1>get live uptades</h1>
                <p>No spam promise - only latest news and prices!</p>
            </div>
            <div class="col-md-7 animateRight">
                <div class="form-group">
                    <form method="post" action="admin/subscription.php">
                        <input type="text" name="name" placeholder="Your name">
                        <input type="email" name="mail" placeholder="your@email.com">
                        <button type="submit" name="subscribe">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="prices" class="text-center" class="container-fluid">
        <div class="container animateBottom">
            <h2>Product <font>Packages</font></h2>
            <p class="subtitle" style="margin:0 auto;">Lorem ipsum dolor sit atmet sit dolor greand fdanrh sdfs sit atmet sit dolor greand fdanrh sdfs</p>
            <div class="row">
<?php 
		
$query="SELECT * FROM prices";
$sendQuery=mysqli_query($db_con,$query);
while($row=mysqli_fetch_assoc($sendQuery)){?> 		

                 <div class="col-md-4">
                    <div class="price <?=$row['type']?>">
                        <h5><?=$row['name']?></h5>
                        <div>
                            <span>$</span>
                            <span><?=$row['price']?></span><br>
                            <span><?=$row['per']?></span>
                        </div>
                        <ul class="text-center">
                            <li><font><?=$row['attr1']?> </font><?=$row['feature1']?></li>
                            <li><font><?=$row['attr2']?> </font><?=$row['feature2']?></li>
                            <li><font><?=$row['attr3']?> </font><?=$row['feature4']?></li>
                            <li><font><?=$row['attr4']?> </font><?=$row['feature4']?></li>
                        </ul>
                        <button>Get Started</button>
                    </div>
                </div>
<?php } ?> 
            </div>
        </div>
    </section>
    <section id="awards" class="text-center">
        <div class="container-fluid animateTop">
            <h2>our <font>awards</font></h2>
            <p class="subtitle" style="margin:0 auto;">Lorem ipsum dolor sit atmet sit dolor greand fdanrh sdfs sit atmet sit dolor greand fdanrh sdfs</p> 
            <div class="row">
                <div class="col-md-2"></div>
<?php 
$query="SELECT * FROM logos";
$sendQuery=mysqli_query($db_con,$query);
while($row=mysqli_fetch_assoc($sendQuery)){?>
              
                <div class="col-md-2">
                    <img class="img-responsive" src="<?=$row['img']?>">
                </div>
                
<?php }   ?>   
                </div>
            </div>
        </div>
    </section>
    <section id="feedback">
        <div id="reviews" class="text-center animateTop">
<?php 
		
$query="SELECT * FROM quote";
$sendQuery=mysqli_query($db_con,$query);
		
$row1=mysqli_fetch_assoc($sendQuery);
$row2=mysqli_fetch_assoc($sendQuery);
$row3=mysqli_fetch_assoc($sendQuery);
?>
            <h2>what <font>clients</font> say</h2>
            <div class="container">
                <div class="row client1-review">
                    <div class="col-md-1 col-md-offset-1">
                        <img src="assets/img/icons/quotes-a.png">
                    </div>
                    <div  class="col-md-8">
                        <p><?=$row1['quote']?></p>
                    </div>
                    <div class="col-md-1">
                        <img src="assets/img/icons/quotes-b.png">
                    </div>
                </div>
                <div class="row client2-review">
                    <div class="col-md-1 col-md-offset-1">
                        <img src="assets/img/icons/quotes-a.png">
                    </div>
                    <div  class="col-md-8">
                        <p><?=$row2['quote']?></p>
                    </div>
                    <div class="col-md-1">
                        <img src="assets/img/icons/quotes-b.png">
                    </div>
                </div>
                <div class="row client3-review">
                    <div class="col-md-1 col-md-offset-1">
                        <img src="assets/img/icons/quotes-a.png">
                    </div>
                    <div  class="col-md-8">
                        <p><?=$row3['quote']?></p>
                    </div>
                    <div class="col-md-1">
                        <img src="assets/img/icons/quotes-b.png">
                    </div>
                </div>
            </div>
        </div>
        <div id="clients" class="animateTop">
            <div class="container">
                <div class="col-md-10 col-md-offset-1 ">
                    <div id="client1" class="col-md-4 client-active client">
                        <img src="<?= $row1['img']?>">
                        <div>
                            <h3><?= $row1['name']; ?></h3>
                            <span><?= $row1['job']; ?> at <font><?= $row1['workplace']; ?></font></span>
                        </div>
                    </div>
                    <div id="client2" class="col-md-4 client">
                        <img src="<?= $row2['img'] ?>">
                        <div>
                            <h3><?= $row2['name']; ?></h3>
                            <span><?= $row2['job']; ?> at <font><?= $row2['workplace']; ?></font></span>
                        </div>
                    </div>
                    <div id="client3" class="col-md-4 client">
                        <img src="<?= $row3['img'] ?>">
                        <div>
                            <h3><?= $row3['name']; ?></h3>
                            <span><?= $row3['job']; ?> at  <font><?= $row1['workplace']; ?></font></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="team" class="text-center">
        <h2>behind <font>the</font> scenes</h2>
        <p class="subtitle" style="margin:0 auto;">Lorem ipsum dolor sit atmet sit dolor greand fdanrh sdfs sit atmet sit dolor greand fdanrh sdfs</p>
        <div class="container">
             <div class="col-md-10 col-md-offset-1">
                 <p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil
                ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae
                qui non vident, nihilamane umquam magnum ac cognitione. In his rest gestiret. Sed ipsam inchoavit, nihil ampliusuma.
                Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident,
                nihilamane umquam magnum ac cognitione.</p>
            </div>
            <div id="teamMembers" class="row">
<?php 
$query="SELECT * FROM team";
$sendQuery=mysqli_query($db_con,$query);

                
while($row=mysqli_fetch_assoc($sendQuery)){?> 
                <div class="col-md-3 text-center team-member">
                    <img class="img-responsive" src="<?=$row['img']?>">
                    <h4><?=$row['name']?></h4>
                    <span><?=$row['position']?></span>
                    <div class=" info-team">
                        <p><?=$row['text']?>.</p> 
                        <div class="text-center">
<?php    foreach($row as $key=>$value){
        if(!empty($value)&& ($key=='envelope-o'|| $key=='facebook'|| $key=='twitter'|| $key=='skype'|| $key=='linkedin')){
?>
    <a href="<?= $value ?>"><i class="fa fa-<?=$key?>" aria-hidden="true"></i></a>
                        
<?php } }?>
                        </div>
                    </div>
                </div>
<?php } ?>
            </div>
        </div>
    </section>
    <section id="startup">
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                <i class="fa fa-bullhorn fa-5x"></i>
                </div>
                <div class="col-md-8 ">
                    <h1>launch your startup now!</h1>
                    <p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret.</p>
                </div>
                <div class="col-md-3">
                   <button>Get this template</button> 
                </div>
            </div>
        </div>
        
    </section>
    <footer id="footer">
        <div id="summary" class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="assets/img/logo-white.png">
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco. Qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Nisi ut aliquid ex ea commodi consequatur?</p>
                    <p><strong>John Doeson, Founder.</strong></p>
                </div>
                <div class="col-md-4 text-center">
                    <h3>Social Networks</h3>
                    <i class="fa fa-facebook fa-3x" aria-hidden="true"></i>
                    <i class="fa fa-skype fa-3x" aria-hidden="true"></i>
                    <i class="fa fa-google-plus fa-3x" aria-hidden="true"></i>
                    <i class="fa fa-pinterest fa-3x" aria-hidden="true"></i>
                    <br>
                    <i class="fa fa-twitter fa-3x" aria-hidden="true"></i>
                    <i class="fa fa-google-plus fa-3x" aria-hidden="true"></i>
                    <i class="fa fa-skype fa-3x" aria-hidden="true"></i>
                    <i class="fa fa-facebook fa-3x" aria-hidden="true"></i>
                </div>
                <div class="col-md-4">
                    <h3 class="text-center">Our contacts</h3>
                    <div class="col-md-1 col-md-offset-1">
                        <i style="top:0" class="fa fa-envelope i-contact" aria-hidden="true"></i>
                        <i style="top:40px" class="fa fa-map-marker i-contact" aria-hidden="true"></i>
                        <i style="top:100px;" class="fa fa-phone i-contact" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-9">
<?php
if($db_con){
    $query="SELECT * FROM editcontact";
    $myquery=mysqli_query($db_con,$query);
    $row=mysqli_fetch_assoc($myquery);
} ?> 
                        <a style="top:0" ><?=$row['mail']?></a><br>
                        <span style="top:40px"><?=$row['place']?></span><br>
                        <span style="top:100px;"><?=$row['phone']?></span>
                    </div>
                </div>
            </div>
        </div>
        <div id="copyright"></div>
    </footer>
    <!--Arrow button for scrolling top -->
    <div class="scrollTop text-center">
        <i class="fa fa-angle-up fa-2x" aria-hidden="true"></i>
    </div>
        
    <script src="assets/js/jquery-3.1.0.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.11.2.js"><\/script>')</script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
  
</body>
</html>
  <script src="assets/js/main.js"></script>
