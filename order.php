<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    .cont {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    
    .nav_inner {
      width: 100%;
      background-color: #333;
      color: #fff;
      padding: 10px;
      text-align: center;
    }
    
    .nav_inner h1 {
      font-size: 32px;
      font-weight: bold;
    }
    
    .body {
      width: 100%;
      max-width: 500px;
      margin-top: 50px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      padding: 20px;
    }
    
    .login {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    
    .login label {
      font-size: 24px;
      margin-bottom: 20px;
    }
    
    .login input[type="text"],
    .login input[type="number"] {
      padding: 10px;
      margin-bottom: 20px;
      width: 100%;
      border: none;
      border-radius: 5px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    
    .login input[type="submit"] {
      background-color: #333;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 18px;
    }
    
    .login input[type="submit"]:hover {
      background-color: #555;
    }
  </style>
</head>
<body>
  <div class="cont">
    <div class="nav_inner"><a href="index.php"><h1>EVIL SHOPPING</h1></a></div>
    <div class="body">
      <div class="login">
        <label>Information</label>
        <form action="add_order.php" method="post">
          <p>Credit card number</p>
          <input type="text" name="ccn">
          <p>Address</p>
          <input type="text" name="address">
          <p>Phone number</p>
          <input type="number" name="phone">
          <input name="Confirm" type="submit" value="Confirm" id="login-btn"><br>
        </form>
      </div>
    </div>
  </div>
</body>
</html>