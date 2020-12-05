<?php
 include 'common.php';
if (!isset($_SESSION['email'])) { header('location: login.php'); }
$old_password = mysqli_real_escape_string($con,$$_POST['old password']);
$new_password = mysqli_real_escape_string($con,$_POST['new password']);
$reenter_new_password = mysqli_real_escape_string($con,$_POST['re-type new password']);
$old_password_encrypt = md5($old_password);
$email = $_SESSION['email'];
$fetch_password = "SELECT password FROM user WHERE email = '$email'";
$query_password = mysqli_query($con, $fetch_password) or die(mysqli_error($con));
$row = mysqli_fetch_array($query_password);
if($old_password_encrypt != $row['password'])
{
    echo 'Please Enter Correct Password';
    header('location:settings.php');
}
elseif (strlen($new_password)<8) {
    
 echo 'password sholud have at least 8 characters';
}
elseif ($new_password != $reenter_new_password) {
    echo"Password mismatch";

}
else
{
    $new_password_encrypted = md5($new_password);
    $query_update = "UPDATE user SET password ='$new_password_encrypted' WHERE email = '$email'";
   $update_execute = mysqli_query($con, $query_update) or die(mysqli_error($con));
 
}

?>