<?php 
require'common.php';
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
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    </head>
  <body style="background-color: #379683">
    <?php
    include 'header.php';
    ?>
      <div class="container">
          <div class="row"style="margin-top: 125px">
                <div class="col-xs-4 col-xs-offset-4 center-align-this">
                    <div class="panel panel-primary" >
                        <div class="panel-heading" style="background-color: #05386B">
                            <h4><center>LOGIN</center></h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to make a purchase</p>
                            <form method="POST" action="login_submit.php">
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email" name="e-mail" required = "true">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                                </div>
                                <button type="submit" name="login" class="btn btn-primary">Login</button><br><br>
                            </form><br/>
                        </div>
                        <div class="panel-footer"><p><center>Don't have an account? <a href="signup.php">Register</a></center></p></div>
                    </div>
                </div>
            </div>
        </div>
     <footer style="padding: 10px 0;background-color: #101010;color:#9d9d9d;left: 0;bottom: 0;width: 100%;position: fixed;
text-align: center;display: block;"> <div class="container"> <center> <p>Copyright &copy; Lifestyle Store. All Rights Reserved | Contact Us: +91 9822112212</p> </center> </div> </footer>
    </body>
   </html>