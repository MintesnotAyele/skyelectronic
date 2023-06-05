<?php
session_start();
include_once('conn.php');
if(isset($_POST['loggin'])){
    //$username=$_POST['username'];
    $email= mysqli_real_escape_string($conn,$_POST['email']);
      $password=$_POST['psw'];
      $select = "SELECT * FROM users WHERE email = '$email' && password='$password'";
      $result = mysqli_query($conn,$select);
      if(mysqli_num_rows($result)==0){
        echo ("<SCRIPT LANGUAGE='JavaScript'>alert('username or password doesnot exist!')</script>");
        ?>
        <meta http-equiv="refresh" content="3;url=loginpage.html" />
      <?php
      }
      else{

         $row = mysqli_fetch_array($result);
         $_SESSION['email']=$email;
         $_SESSION['id']=$row['id'];
         if($row['username']=='admin'){
            ?>
        <meta http-equiv="refresh" content="3;url=admin.html" />
      <?php
       //  echo "yesss admin";
       //   header('location:admin.html');
         }
         else{
            ?>
            <meta http-equiv="refresh" content="3;url=home.html" />
          <?php
         //echo "noooadmin";
          //header('location:home.html');
         }
      }
    // else{
      //  echo ("<SCRIPT LANGUAGE='JavaScript'>alert('username or password doesnot exist!')</script>");
     // }
     
    }



?>