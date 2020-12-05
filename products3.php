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
    <?php
    require  'header.php';
    require 'Check-if-addedd.php';
    ?>
     <div class="container"style="margin-top: 55px">
           
                <div class="jumbotron home-spacer"  style="background-color:#05386B;background-image: url(images/jbfinaljeans.jpg);background-repeat: no-repeat;background-size: cover;background-position: center center;">
                    <center><h1 style="color:white">Jeans</h1>
                    <p style="color:white "> Fashionable Denim Combined With Our Craftsmanship</p>
                         
                    </center>  
                    </div>
               
            </div>
      <div class="container">
      <div class="row text-center">
          <div class="col-md-3 col-sm-6 home-feature c1" style="padding-left: 10px;padding-right:10px;">
              <div class="thumbnail" ><img src="images/d1levis.jpg" alt="d1levis">
              <div class="caption">
                  <h4><b>Levis</b></h3>
                  <h5>Men's Tappered Navy Blue Jogger</h5>
                  <p><b>₹ 2999</b></p>
            <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(25))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=25" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
             <?php
             } 
             
         } ?>
              </div>
          </div>
          </div>
              
              <div class="col-md-3 col-sm-6 home-feature" style="padding-left: 10px;padding-right:10px;">
              <div class="thumbnail"><img src="images/d2flyingmachine.jpg" alt="d2flyingmachine">
              <div class="caption">
                  <h4><b>Flying Machine</b></h3>
                  <h5>Men's Jackson Skinny Fit Jeans</h5>
                  <p><b>₹ 1999</b></p>
                   <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(26))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=26" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
             <?php
             } 
             
         } ?>
              </div>
          </div>
          </div>
              
          
       <div class="col-md-3 col-sm-6 home-feature" style="padding-left: 10px;padding-right:10px;">
              <div class="thumbnail"><img src="images/d3hrx.jpg" alt="d3hrx">
              <div class="caption">
                  <h4><b>HrX</b></h3>
                  <h5>Men's Regular Fit Jeans</h5>
                  <p><b>₹ 1899</b></p>
                  <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(27))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=27" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
             <?php
             } 
             
         } ?>
                 
              </div>
          </div>
          </div>
          <div class="col-md-3 col-sm-6 home-feature" style="padding-left: 10px;padding-right:10px;">
              <div class="thumbnail"><img src="images/d4levis.jpg" alt="d4levis">
              <div class="caption">
                  <h4><b>Levis</b></h3>
                  <h5>Men's 511 Slim Fit Jeans</h5>
                  <p><b>₹ 3400</b></p>
                   <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(28))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=28" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
             <?php
             } 
             
         } ?>
              </div>
          </div>
          </div>
      </div>
      </div>
          <div class="container">
           <div class="row text-center">
          <div class="col-md-3 col-sm-6 home-feature" style="padding-left: 10px;padding-right:10px;">
              <div class="thumbnail"><img src="images/d5levis.jpg" alt="d5levis">
              <div class="caption">
                 <h4><b>Levis</b></h3>
                  <h5>Men's Tapered Cotton White Jeans</h5>
                  <p><b>₹ 2999</b></p>
                  <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(29))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=29" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
             <?php
             } 
             
         } ?>
              </div>
          </div>
          </div>
              
              <div class="col-md-3 col-sm-6 home-feature" style="padding-left: 10px;padding-right:10px;">
              <div class="thumbnail"><img src="images/d6roadster.jpg" alt="d6roadster">
              <div class="caption">
                 <h4><b>Roadster</b></h3>
                  <h5>Men's Midrise Skinny Fit Jeans</h5>
                  <p><b>₹ 1400</b></p>
                  <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(30))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=30" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
             <?php
             } 
             
         } ?>
              </div>
          </div>
          </div>
              
          
       <div class="col-md-3 col-sm-6 home-feature" style="padding-left: 10px;padding-right:10px;">
              <div class="thumbnail"><img src="images/d7roadster.jpg" alt="d7roadster">
              <div class="caption">
                 <h4><b>Roadster</b></h3>
                  <h5>Men's Slim Fit Lowrise Jeans</h5>
                  <p><b>₹ 2400</b></p>
                   <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(31))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=31" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
             <?php
             } 
             
         } ?>
                
              </div>
          </div>
          </div>
          <div class="col-md-3 col-sm-6 home-feature" style="padding-left: 10px;padding-right:10px;">
              <div class="thumbnail"><img src="images/d8wrogn.jpg" alt="d8wrogn">
              <div class="caption">
                  <h4><b>Wrogn</b></h3>
                  <h5>Men's Regular Fit Joggers</h5>
                  <p><b>₹ 2399 </b></p>
                  <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(32))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=32" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
             <?php
             } 
             
         } ?>
              </div>
          </div>
          </div>
           </div>
          </div>
      <div class="container"style="margin-bottom: 100px">
           <div class="row text-center">
          <div class="col-md-3 col-sm-6 home-feature" style="padding-left: 10px;padding-right:10px;">
              <div class="thumbnail"><img src="images/d9wrogn.jpg" alt="d9wrogn">
              <div class="caption">
                  <h4><b>Wrogn</b></h3>
                  <h5>Men's Higly Distressed Joggers</h5>
                  <p><b>₹ 2999 </b></p>
                 <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(33))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=33" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
             <?php
             } 
             
         } ?>
              </div>
          </div>
          </div>
        
              
           <div class="col-md-3 col-sm-6 home-feature" style="padding-left: 10px;padding-right:10px;">
           <div class="thumbnail "><img src="images/d10wrogn.jpg" alt="d10wrogn" >
           <div class="caption">
                  <h4><b>Wrogn</b></h3>
                  <h5>Cotton Nvy Blue Fit Acid Wash Jeans</h5>
                  <p><b>₹ 2899</b></p>
                   <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(34))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=34" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
             <?php
             } 
             
         } ?>
              </div>
          </div>
          </div>
              
          
       <div class="col-md-3 col-sm-6 home-feature" style="padding-left: 10px;padding-right:10px;">
           <div class="thumbnail "><img src="images/d11arrow.jpg" alt="d11arrow">
                                          
              <div class="caption">
                  <h4><b>Arrow</b></h3>
                  <h5>Men's Fit Casual Jeans</h5>
                  <p><b>₹ 2299</b></p>
                   <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(35))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=35" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
             <?php
             } 
             
         } ?>
              </div>
          </div>
          </div>
          <div class="col-md-3 col-sm-6 home-feature" style="padding-left: 10px;padding-right:10px;">
              <div class="thumbnail"><img src="images/d12wrogn.jpg" alt="d12wrogn"  >
              <div class="caption">
                 <h4><b>Wrogn</b></h3>
                  <h5>Men's Skinny Fit Jeans</h5>
                  <p><b>₹ 2899</b></p>
                  <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(36))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=36" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
             <?php
             } 
             
         } ?>
              </div>
          </div>
          </div>
           </div>
          </div>
            <?php  include 'footer.php';  ?>     
         
    </body>
   </html>