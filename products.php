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
           
                <div class="jumbotron home-spacer"  style="background-color:#05386B;background-image: url('images/jbfinal.jpg');background-repeat: no-repeat;background-size: cover;background-position: center center; ">
                    <div style="background-color: rgba(0, 0, 0, 0.6);"><center><h1 style="color:white"> Watches </h1>
                      <p style="color: white">Crafted with excellence |
                        Designs to make you look different |Stand out from the crowd </p>
                    <p style="color: white" >Take Care Of your Costume And Your Confidence Will Take Care Of Itself.</p>
                    </center>  
                    </div>
               </div>
            </div>
      <div class="container">
      <div class="row text-center">
          <div class="col-md-3 col-sm-6 home-feature">
              <div class="thumbnail"><img src="images/w1r.jpg" alt="Ralph Lauren">
              <div class="caption">
                  <h4><b>Ralph Lauren</b></h3>
                  <h5>45 mm Automotive Skeleton</h5>
                  <p><b>₹ 49,999</b></p>
            <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(1))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
             <?php
             } 
             
         } ?>
              </div>
          </div>
          </div>
              
              <div class="col-md-3 col-sm-6 home-feature">
              <div class="thumbnail"><img src="images/w2r.jpg" alt="Tissot">
              <div class="caption">
                 <h4><b>Tissot</b></h3>
                  <h5>Men Traditional Swiss Analogue</h5>
                  <p><b>₹ 21,000</b></p>
                   <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(2))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
             <?php
             } 
             
         } ?>
              </div>
          </div>
          </div>
              
          
       <div class="col-md-3 col-sm-6 home-feature">
              <div class="thumbnail"><img src="images/w3r.jpg" alt="Curren">
              <div class="caption">
                  <h4><b>Curren</b></h3>
                  <h5>Men Analogue Watch CUR021</h5>
                  <p><b>₹ 5,000</b></p>
                  <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(3))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
             <?php
             } 
             
         } ?>
                 
              </div>
          </div>
          </div>
          <div class="col-md-3 col-sm-6 home-feature">
              <div class="thumbnail"><img src="images/w5r.png" alt="Omega Watches">
              <div class="caption">
                   <h4><b>Omega Watches</b></h3>
                  <h5>SpeedMaster</h5>
                  <p><b>₹ 8,50,000</b></p>
                   <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(4))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
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
          <div class="col-md-3 col-sm-6 home-feature">
              <div class="thumbnail"><img src="images/9.jpg" alt="Titan Model 301" width="400px height="300px">
              <div class="caption">
                 <h4><b>Titan Model 301</b></h3>
                  <h5>Sectoral Automative Watch</h5>
                  <p><b>₹ 13,000</b></p>
                  
                  <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(5))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
             <?php
             } 
             
         } ?>
              </div>
          </div>
          </div>
              
              <div class="col-md-3 col-sm-6 home-feature">
              <div class="thumbnail"><img src="images/10.jpg" alt="Titan Model 201" width="400px height="300px">
              <div class="caption">
                   <h4><b>Titan Model 201</b></h3>
                  <h5>Sectoral 30mm Fast Watch</h5>
                  <p><b>₹ 14,999</b></p>
                  
                  <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(6))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
             <?php
             } 
             
         } ?>
              </div>
          </div>
          </div>
              
          
       <div class="col-md-3 col-sm-6 home-feature">
              <div class="thumbnail"><img src="images/11.jpg" alt="Daniel Klien">
              <div class="caption">
                   <h4><b>Daniel Klien</b></h3>
                  <h5>Analog Black Dial Men Watch</h5>
                  <p><b>₹ 15,999</b></p>
                   <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(7))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
             <?php
             } 
             
         } ?>
                
              </div>
          </div>
          </div>
          <div class="col-md-3 col-sm-6 home-feature">
              <div class="thumbnail"><img src="images/12.jpg" alt="Faber Luba" width="400px height="300px">
              <div class="caption">
                   <h4><b>Faber Luba</b></h3>
                  <h5>40mm Dial Fabricated Watch</h5>
                  <p><b>₹ 18,000</b></p>
                  <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(8))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
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
          <div class="col-md-3 col-sm-6 home-feature">
              <div class="thumbnail "><img src="images/w9r.jpg" alt="Rolex" width="400px height="300px" >
              <div class="caption">
                 <h4><b>Rolex</b></h3>
                  <h5>Silver 30mm Dial Watch</h5>
                  <p><b>₹ 5,00,000</b></p>
                 <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(9))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
             <?php
             } 
             
         } ?>
              </div>
          </div>
          </div>
        
              
           <div class="col-md-3 col-sm-6 home-feature">
           <div class="thumbnail "><img src="images/w11r.jpg" alt="Seiko">
           <div class="caption">
                 <h4><b>Seiko</b></h3>
                  <h5>Green Dial Men's Watch</h5>
                  <p><b>₹ 18,169</b></p>
                   <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(10))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
             <?php
             } 
             
         } ?>
              </div>
          </div>
          </div>
              
          
       <div class="col-md-3 col-sm-6 home-feature">
           <div class="thumbnail "><img src="images/w12r.jpg" alt="Tommy Hilfiger" width="400px height="300px">
                                          
              <div class="caption">
                   <h4><b>Tommy Hilfiger</b></h3>
                  <h5>Analog White Dial Men's Watch</h5>
                  <p><b>₹ 13,000</b></p>
                   <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(11))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
             <?php
             } 
             
         } ?>
              </div>
          </div>
          </div>
          <div class="col-md-3 col-sm-6 home-feature">
              <div class="thumbnail"><img src="images/w8r.jpg" alt="Blancpain" width="400px height="300px" >
              <div class="caption">
                 <h4><b>Blancpain</b></h3>
                  <h5>Sectoral 30mm Fast Watch</h5>
                  <p><b>₹ 24,999</b></p>
                  <?php if (!isset($_SESSION['email'])) { ?>
                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
            <?php 
           }
            else
     {//We have created a function to check whether this particular product is added to cart or not.
                
                if (check_if_added_to_cart(12))
         { echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
         
         }
         else { 
             
             ?> <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
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