<?php
include_once('conn.php');
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$email= $_POST['email'];
if(isset($_POST['signup'])){
$sql="insert into users(
username,
 email,password
)values('$username','$email','$password')
";
if(mysqli_query($conn, $sql)){
echo"inserted  successfully";
header('location:home.html');
}
else
{
echo"Error insertion on table:".$conn->error;
}
}
$conn->close();
?>
