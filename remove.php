<?php
 include_once('conn.php');
  session_start();
  $user_id = $_GET['user_id'];
$item_id = $_GET['item_id'];
  $delete_query="delete from `order` where user_id='$user_id' and item_id='$item_id'";
  $delete_query_result=mysqli_query($conn,$delete_query) or die(mysqli_error($con));
  header('location: ordertable.php');
?>