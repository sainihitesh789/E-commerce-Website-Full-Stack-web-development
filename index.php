<?php 
require'common.php';
?>
<html lang="en">
  <head>
    <title>LifeStyle Store</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    </head>
  <body style="background-color: #379683">
    <div class="navbar navbar-inverse navbar-fixed-top"> 
    <div class="container"> 
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
            </button> <a class="navbar-brand active" href="index.php">Lifestyle Store</a> </div>
            <div class="collapse navbar-collapse" id="myNavbar"> <ul class="nav navbar-nav navbar-right">
 <?php if (isset($_SESSION['email'])) 
     { ?>    <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
             <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li> 
             <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li> 
 <?php } else
  { ?> 
        <li><a href="index.php"><span class="glyphicon glyphicon-home active"></span> Home</a></li>
        <li><a href="#section1"><span class="glyphicon glyphicon-th-list"></span> Category</a></li>
       <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
       <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
 <?php } ?> </ul> </div> </div> </div>
    <?php
   
    require 'Check-if-addedd.php';
    ?>
    

<div class="container-fluid" style="padding-left: 0px;padding-right: 0px; padding-top: 20px;">
  

 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="images/i2.jpg" alt="Los Angeles"  style="width:100%;height:90vh;">
        <div class="carousel-caption">
          <div id="banner-content">
                 <h1><b>We Sell Lifestyle</b></h1>
                <h3><b>Best Of Men's Wear</b></h3>
                <br>
                <a  href="signup.php" class="btn btn-danger  btn-lg active">Shop Now</a>
                  
                    
                </div>
        </div>
      </div>

      <div class="item">
        <img src="images/i3.jpg" alt="Chicago" style="width:100%;height: 90vh">
        <div class="carousel-caption">
         <div id="banner-content">
                 <h1 ><b>Top Pick's For Men</b></h1>
                <h3><b>Best Offer on Must Halves</b></h3><br>
                <a  href="signup.php" class="btn btn-warning btn-lg active">Shop Now</a>
                  
                    
                </div>
        </div>
      </div>
    
      <div class="item">
        <img src="images/i6.jpg" alt="New York" style="width:100%; height: 90vh">
        <div class="carousel-caption">
        <div id="banner-content">
                 <h1><b>Catch The Best Deal</b></h1>
                <h3><b>Featured Brand</b></h3><br>
                <a  href="signup.php" class="btn btn-success btn-lg active">Shop Now</a>
                  
                    
                </div>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- section1-->
<section id="section1" style="margin: 20px;">
  <div class="container" ><hr><h1 class="text-center" style="color: white">Category</h1><hr></div>
   <div class="container" style="padding-top: 40px; padding-bottom: 80px;">
      <div class="row text-center">
          <div class="col-md-4 col-sm-6 home-feature " >
            <a href="products3.php">
            <div class="thumbnail"><img src="images/d1levis.jpg" class="img-responsive img-rounded" alt="imgindex" style="padding-top: 20px;height: 350px; ">
              <div class="caption"><h2><b>Jeans</b></h2></div>
             </div>
           </a>
         </div>
         <div class="col-md-4 col-sm-6 home-feature " >
            <a href="products.php">
            <div class="thumbnail"><img src="images/imgindex.jpg" class="img-responsive img-rounded" alt="imgindex" style="padding-top: 20px;height: 350px; ">
              <div class="caption"><h2><b>Watches</b></h2></div>
             </div>
           </a>
         </div>
         <div class="col-md-4 col-sm-6 home-feature " >
            <a href="products2.php">
            <div class="thumbnail"><img src="images/peterengland3.jpg" class="img-responsive img-rounded" alt="imgindex" style="padding-top: 20px;height: 350px; ">
              <div class="caption"><h2><b>Shirts</b></h2></div>
             </div>
           </a>
         </div>
       </div>
     </div>
</section>
            <?php  include 'footer.php';  ?>     
         
    </body>
   </html>