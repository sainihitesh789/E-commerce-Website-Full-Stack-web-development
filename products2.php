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
           
                <div class="jumbotron home-spacer"  style="background-color:#05386B;background-image: url('images/jbshirtsfinal.jpg');background-repeat: no-repeat;background-size: cover;background-position: center center; ">
                    <div style="background-color: rgba(0, 0, 0, 0.5);"><center><h1 style="color:white"> Shirts </h1>
                      <h3 style="color: white">You Imagine Comfort, We Make it For You.</h3>
                    <p style="color: white" >The Joy Of Best Wear</p>
                    </center>  
                    </div>
               </div>
            </div>
      <div class="container">
      <div class="row text-center">
          <div class="col-md-3 col-sm-6 home-feature c1" style="padding-left: 10px;padding-right:10px;">
              <div class="thumbnail" ><img src="images/roadster1.png" alt="roadster1">
              <div class="caption">
                  <h4><b>Roadster</b></h3>
                  <h5>Cotton Check  Casual Shirt</h5>
                  <p><b>₹ 1499</b></p>
            <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(13))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
             <?php
             } 
             
         } ?>
              </div>
          </div>
          </div>
              
              <div class="col-md-3 col-sm-6 home-feature" style="padding-left: 10px;padding-right:10px;">
              <div class="thumbnail"><img src="images/roadster2.png" alt="roadster2">
              <div class="caption">
                  <h4><b>Roadster</b></h3>
                  <h5>Cotton Jeans Faded Shirt</h5>
                  <p><b>₹ 1899</b></p>
                   <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(14))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
             <?php
             } 
             
         } ?>
              </div>
          </div>
          </div>
              
          
       <div class="col-md-3 col-sm-6 home-feature" style="padding-left: 10px;padding-right:10px;">
              <div class="thumbnail"><img src="images/luisphillip2.jpg" alt="luisphillip2">
              <div class="caption">
                  <h4><b>Louis Philipps</b></h3>
                  <h5>Regular Fit Casual Shirt</h5>
                  <p><b>₹ 2499</b></p>
                  <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(15))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=15" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
             <?php
             } 
             
         } ?>
                 
              </div>
          </div>
          </div>
          <div class="col-md-3 col-sm-6 home-feature" style="padding-left: 10px;padding-right:10px;">
              <div class="thumbnail"><img src="images/peterengland1.jpg" alt="peterengland1">
              <div class="caption">
                  <h4><b>Peter England</b></h3>
                  <h5>Men Classic Fit Formal Shirt</h5>
                  <p><b>₹ 1700</b></p>
                   <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(16))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
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
              <div class="thumbnail"><img src="images/roadster3.jpg" alt="roadster3">
              <div class="caption">
                 <h4><b>Roadster</b></h3>
                  <h5>Men Casual Checked Shirt</h5>
                  <p><b>₹ 1899</b></p>
                  <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(17))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=17" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
             <?php
             } 
             
         } ?>
              </div>
          </div>
          </div>
              
              <div class="col-md-3 col-sm-6 home-feature" style="padding-left: 10px;padding-right:10px;">
              <div class="thumbnail"><img src="images/peterengland2.jpg" alt="peterengland2">
              <div class="caption">
                 <h4><b>Peter England</b></h3>
                  <h5>Men Classic Fit Formal Shirt</h5>
                  <p><b>₹ 1400</b></p>
                  <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(18))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=18" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
             <?php
             } 
             
         } ?>
              </div>
          </div>
          </div>
              
          
       <div class="col-md-3 col-sm-6 home-feature" style="padding-left: 10px;padding-right:10px;">
              <div class="thumbnail"><img src="images/wrogn1.jpg" alt="wrogn1">
              <div class="caption">
                 <h4><b>Wrogn</b></h3>
                  <h5>Men Classic Fit Casual Shirt</h5>
                  <p><b>₹ 2800</b></p>
                   <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(19))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=19" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
             <?php
             } 
             
         } ?>
                
              </div>
          </div>
          </div>
          <div class="col-md-3 col-sm-6 home-feature" style="padding-left: 10px;padding-right:10px;">
              <div class="thumbnail"><img src="images/luisphillip1.jpg" alt="luisphillip1">
              <div class="caption">
                  <h4><b>Louis Philippe</b></h3>
                  <h5>Men Regular Fit Cotten Shirt</h5>
                  <p><b>₹ 1499  </b></p>
                  <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(20))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=20" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
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
              <div class="thumbnail"><img src="images/peterengland3.jpg" alt="peterengland3">
              <div class="caption">
                  <h4><b>Peter England</b></h3>
                  <h5>Men Slim Fit Stripped Shirt</h5>
                  <p><b>₹ 2999 </b></p>
                 <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(21))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=21" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
             <?php
             } 
             
         } ?>
              </div>
          </div>
          </div>
        
              
           <div class="col-md-3 col-sm-6 home-feature" style="padding-left: 10px;padding-right:10px;">
           <div class="thumbnail "><img src="images/wrogn2.jpg" alt="wrogn2" >
           <div class="caption">
                  <h4><b>Wrogn</b></h3>
                  <h5>Cotton Nvy Blue Shirt</h5>
                  <p><b>₹ 2899</b></p>
                   <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(22))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=22" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
             <?php
             } 
             
         } ?>
              </div>
          </div>
          </div>
              
          
       <div class="col-md-3 col-sm-6 home-feature" style="padding-left: 10px;padding-right:10px;">
           <div class="thumbnail "><img src="images/wrogn3.jpg" alt="wrogn3">
                                          
              <div class="caption">
                  <h4><b>Wrogn</b></h3>
                  <h5>Men Relaxed & Smart Fit Casual Shirt</h5>
                  <p><b>₹ 2299</b></p>
                   <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(23))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=23" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
             <?php
             } 
             
         } ?>
              </div>
          </div>
          </div>
          <div class="col-md-3 col-sm-6 home-feature" style="padding-left: 10px;padding-right:10px;">
              <div class="thumbnail"><img src="images/wrogn4.jpg" alt="wrogn4"  >
              <div class="caption">
                 <h4><b>Wrogn</b></h3>
                  <h5>Checked Casual Shirt</h5>
                  <p><b>₹ 2899</b></p>
                  <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(24))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=24" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
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