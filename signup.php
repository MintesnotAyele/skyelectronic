<?php
$servername="localhost";
$username="root";
$password="";
$dnname="project";
$conn=new mysqli($servername,$username,$password,$dnname);
if($conn->connect_error){
die("connection failed:".$conn->connect_error);

}
echo"connected succesfully";
echo"<br>";
if(isset($_POST['signup'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];

$sql="insert into user(id,
username ,
password ,
email)values(1,'$username','$password','$email')
";
if($conn->query($sql)===TRUE){
echo"inserted  successfully";
}
else
{
echo"Error insertion on table:".$conn->error;
}
}
$conn->close();
?>
