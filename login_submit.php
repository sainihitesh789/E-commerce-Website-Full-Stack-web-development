<?php
require 'common.php';
$email = $_POST['e-mail'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con,$password);
$password = md5($password);
$user_query = "SELECT id, email FROM user WHERE email='" . $email . "' AND password='" . $password . "'";
$user_query_result = mysqli_query($con,$user_query) or die(mysqli_error($con));
$num = mysqli_num_rows($user_query_result);
if ($num == 0) {
  $error = $$_GET['error'];
  $error = "<span class='red'>Enter Correct E-mail and Password Combination</span>";
  header('location: login.php?error=' . $error);
 
}
else
{
  $row= mysqli_fetch_array($user_query_result);
  $_SESSION ['email'] = $row['email'];
  $_SESSION ['user_id'] = $row['id'];
  header('location:products.php');
}
    


?>
