<?php
$servername="localhost";
$username="root";
$password="";
$dnname="project";
$conn=new mysqli($servername,$username,$password,$dnname);
if($conn->connect_error){
die("connection failed:".$conn->connect_error);

}
?>