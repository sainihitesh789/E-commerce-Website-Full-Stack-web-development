<?php
require 'common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
$user_id = $_SESSION["user_id"];
$item = $_GET["itemsid"];
$query = "UPDATE users_items SET status='Confirmed' WHERE users_items.user_id = " .$user_id. " AND users_items.item_id =" . $item . " and status = 'Added To cart'";
mysqli_query($con, $query) or die(mysqli_error($con));
?>
<html>
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
    </head>
  <body style="background-image: url(images/intro-bg_1.jpg);background-repeat: no-repeat;background-size: cover;background-position: center center;">
     <?php
     include 'header.php';
     ?>
      <div class="container"style="margin-top: 200px;margin-bottom: 200px;">
      <div class="jumbotron " style="background-color: rgba(0,0,0,0.6);">
        
      </style> >
     
           
                
                    <h1 style="color:white;text-decoration: none"><center>Thank You </center></h1>
                    <h2 style="color: white;text-decoration: none"><center>Your Order is Confirmed</center></h2>
                    <h4  style="color: white;text-decoration: none"><center><a href="products.php"style="color: white" >Click Here to purchase an Another Item.</a></center></h4> 
                    </div>
               
            </div>
      <?php
     include 'footer.php';
      ?>
    </body>
   </html>