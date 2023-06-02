<?php
    
    session_start();
    include_once('conn.php');
    $item_id=$_GET['id'];
    $user_id=$_SESSION['id'];
    $add_to_cart_query="insert into cart_order(user_id,item_id,status) values ('$user_id','$item_id','Added to cart')";
    $add_to_cart_result=mysqli_query($conn,$add_to_cart_query) or die(mysqli_error($conn));
   if( $item_id<=8){
    header('location: phone.php');}
    elseif($item_id>8&&$item_id<=16){
        header('location:computer.php');
    }
    elseif ($item_id>16&&$item_id<=24) {
        header('location:camera.php');
    }
    elseif ($item_id>24&&$item_id<=32) {
        header('location:tv.php');
    }
?>