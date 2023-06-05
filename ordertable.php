<?php
include_once('conn.php');
$orr="select *from `order`";
$sql="select users.email, product1.model,product1.id, `order`.user_id from `order` inner join  users on  `order`.user_id=users.id inner join product1 on `order`.item_id=product1.id";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="product.css">
    <title>Document</title>

    <style>
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>
<div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="home.html"><i class="fa fa-home" style="font-size:36px ;color:aliceblue;margin-left: 10px;"></i>Home</a>
          <a href="logout.php"> <i class="fa fa-sign-out" style="font-size:36px;color:rgb(230, 223, 223)"></i>Logout</a>
          <a href="cart1.php"><i class="fa fa-shopping-cart" style="font-size:36px;color:rgb(240, 235, 235)"></i>Cart</a>
          <a href="#foot"><i class="fa fa-at" style="font-size:36px;color:aliceblue;"></i>About Us</a>
          <a href="#foot"> <i class="fa fa-address-book" style="font-size:36px;color:aliceblue;margin-left: 20px;"></i>Contact Us</a>
        </div> 

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span> 
<table  align"center" border="1px" styles="width:600px; line-height:40px;">
<tr><th colspan="2"><h1>order TABLE</h1></th></tr>
<t>
  <th>USER_EMAIL</th>
  <th>ITEM_NAME</th>
</t>
<?php
while($row = $result->fetch_assoc())
{
?>
<tr>
  <td><?php echo $row['email'];?> </td>
  <td><?php echo $row['model'];?> </td>
 <td> <a href="remove.php?user_id=<?php echo $row['user_id'];?>&item_id=<?php echo $row['id'];?>">Remove</a></td>
</tr>
<?php
}
?>
  </table> 

  <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
</html>