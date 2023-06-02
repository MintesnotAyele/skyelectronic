<?php
session_start();
include_once('conn.php');
$user_id = $_SESSION['id'];
$delete = "DELETE FROM cart_order WHERE user_id='$user_id'";
$sql = "SELECT * FROM cart_order WHERE user_id='$user_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $sql1 = "INSERT INTO `order` (user_id, item_id) VALUES ('".$row["user_id"]."', '".$row["item_id"]."')";
        if ($conn->query($sql1) === TRUE) {
            echo ("<SCRIPT LANGUAGE='JavaScript'>alert(' item ordered successfully!')</script>");
            // header('location: home.html');
        } else {
            echo "Error inserting into table: " . $conn->error;
        }
    }
    $sql_update = "UPDATE product1 SET numberofitem = numberofitem-1 WHERE id IN (SELECT item_id FROM cart_order WHERE user_id='$user_id')";
    if ($conn->query($sql_update) === TRUE) {
      // Records updated in item table successfully
    } else {
      echo "Error updating records in item table: " . $conn->error;
    }
    // Execute the DELETE query to remove the rows from the cart_order table
    if ($conn->query($delete) === TRUE) {
         echo "Rows deleted successfully";
    } else {
        echo "Error deleting rows: " . $conn->error;
        header('location: home.html');
    }   
} else {
    echo ("<SCRIPT LANGUAGE='JavaScript'>alert('no item selected!')</script>");
   header('location: home.html'); 
}
$conn->close();
?>