<?php 
require'common.php';
if (isset($_SESSION['email'])) { header('location: products.php'); }
?>
<html lang="en">
  <head>
    <title>Sign Up | LifeStyle Store</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    </head>
  <body>
   <?php
    include 'header.php';
    ?>
     <div class="container  backgroundimg">
            <div  class="row"style="margin-top: 125px; width:auto;height: auto;" >
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3"style="padding:30px;border-style: double;border-color:white">
                       
                        <form method="POST" action="signup_script.php" >
                            <legend><h2 style="color: white"><center>Sign Up</center></h2></legend>
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name" pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+"   required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email"  name="e-mail" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                                 <?php
                                if(isset($_GET["m1"])){
                                  echo $_GET['m1'];
                                }
                                ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" pattern=".{6,}" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" name="contact" maxlength="10" size="10" required>
                                <?php
                                if(isset($_GET["m2"])){echo $_GET['m2'];}
                                ?>
                            </div>
                            <div class="form-group">
                                <input class="form-control"  placeholder="City" name="city" required = "true">
                            </div>
                            <div class="form-group">
                                <input class="form-control"  placeholder="Address" name="address" required = "true">
                            </div>
                            <center><button type="submit" name="submit" class="btn btn-primary btn-group-lg">Submit</button></center>
                        </form>
                    </div>
                </div>
            </div>
      <?php
    include 'footer.php';
    ?>
    </body>
   </html>