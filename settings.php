<?php
 include 'common.php';
if (!isset($_SESSION['email'])) { header('location:login.php'); }
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
  <body style="background-color: #379683">
    <?php
 include 'header.php';?>
      
     <div class="container">
            <div class="row"style="margin-top: 100px">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2>Change Password</h2>
                        <form action="settings_script.php " method="POST">
                            <div class="form-group">
                                <input type="passsword" class="form-control" placeholder="Old Password" name="old password"  required = "true">
                            </div>
                            <div class="form-group">
                                <input type="password " class="form-control"  placeholder="New Password"  name="new password" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Re-Type New Password" name="re-type new password" required = "true">
                            </div>
                             <button type="submit" name="change" class="btn btn-primary">Change</button>
                        </form>
                    </div>
            </div>
     </div>
      <?php
     include 'footer.php';
      ?>
    </body>
   </html>