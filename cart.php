<?php
require 'common.php';
    
?>
<html lang="en">
  <head>
    <title>Cart | LifeStyle Store</title>
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
    <?php include 'header.php';
    ?>
      
      <div class="container"style="margin-top: 150px;margin-left:350px">
          
          <div class="row">
              <div class="col-sm-8 col-sm-offset2">
           
      <div class="table-responsive">
                   
          <table class="table table-stripped ">
              <?php
              $sum =0;
              $user_id = $_SESSION['user_id'];
              $select_query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
              $select_query_execute = mysqli_query($con, $select_query) or die(mysqli_error($con));
              if(mysqli_num_rows($select_query_execute) >=1){
              ?>
              <thead>
              <tr>
              <th><center>Item Number</center></th>                  
              <th><center>Item Name</center></th>
              <th><center>Price</center></th>
              <th><center>Edit Order</center></th>
              </tr>
              </thead>
              <tbody>
               <?php 
                          
                  while($row = mysqli_fetch_array($select_query_execute))
                  {
                  $sum+=$row["Price"];
                  $id = "";
                  $id .= $row["id"] . ",";
                  echo "<tr>
                                
                  <td><center>" .$row["id"] . "</center></td>
                  <td><center>" . $row["Name"]."</center></td>
                  <td><center> ₹".$row["Price"]."</center></td>
                  <td><center><a href = 'cart-remove.php?id={$row['id']}' class = 'remove_item_link btn btn-danger btn-block'>Remove</a></center></td>
              </tr>";
                  }
                  $id = rtrim($id, ",");
                  echo "<tr>
                  <td></td>
                  <td><center>Total</center></td>
                  <td><center> ₹" .$sum. " </center></td>  
              <td><a href = 'success.php?itemsid=".$id."'class='btn btn-primary'>Confirm Order</a></td>
              </tr>";
                  ?>
              </tbody>
              <?php
              }
              else {
              echo "<br><br><center><h3>Add Items to the cart first<!/h3></center>";
              }
              ?>
              <?php
              ?>
          </table>
        </div>
       </div>
      </div>
     </div>
    <?php include 'footer.php';?>
  </body>
 </html>