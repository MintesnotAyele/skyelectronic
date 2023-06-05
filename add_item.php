<?php
include_once('conn.php');
session_start();
$model=$_POST['model'];
$item=$_POST['item_id'];
$menu= $_POST['menu_id'];
$price=$_POST['total_price'];
if(isset($_POST['submit'])){
$sql="insert into product1(
id,
 pid,model,price,numberofitem
)values('$item','$menu','$model','$price',5)
";
if(mysqli_query($conn, $sql)){
    header('location:product.php');  
echo"inserted  successfully";
}
else
{
echo"Error insertion on table:".$conn->error;
}
}
$conn->close();
?>
