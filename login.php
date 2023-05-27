<?php
include 'conn.php';

  if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $select = "SELECT * FROM user WHERE email = '$email' && password='$password'";
    $result = mysqli_query($con,$select);
    if(mysqli_num_rows($result)>0){
       $row = mysqli_fetch_array($result);
       if($row['username']=='admin'){
        echo "yesss admin";
        header('location:admin.html');
       }
       else{
        echo "noooadmin";
        header('location:home.html');
       }
    }
    else{
      echo ("<SCRIPT LANGUAGE='JavaScript'>alert('username or password doesnot exist!')</script>");
    }
   
  }
?>