<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="order.css">
  <title>Order</title>

</head>
<body>
  <div class="cont">
    <div class="nav_inner"><a href="home.html"><h1>SKY ELECTRONICS</h1></a></div>
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