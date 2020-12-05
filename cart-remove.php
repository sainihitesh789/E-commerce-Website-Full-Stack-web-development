<?php
require 'common.php';
if (isset($_GET['id']) && is_numeric($_GET['id']))
    {
    $item_id = $_GET["id"];
    $user_id = $_SESSION['user_id'];
$delete = "DELETE from users_items WHERE user_id = '$user_id' AND item_id = '$item_id'";
$delete_result = mysqli_query($con, $delete) or die(mysqli_error($con));
header('location:cart.php');
}
?>