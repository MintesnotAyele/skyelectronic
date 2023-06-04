<?php
include_once('conn.php');
$orr="select *from `order`";
$sql="select users.email, product1.id, `order`.user_id from `order` inner join  users on  `order`.user_id=users.id inner join product1 on `order`.item_id=product1.id";
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
</head>
<body>
   
<table  align"center" border="1px" styles="width:600px; line-height:40px;">
<tr><th colspan="2"><h1>order TABLE</h1></th></tr>
<t>
  <th>USER_EMAIL</th>
  <th>ITEM_ID</th>
</t>
<?php
while($row = $result->fetch_assoc())
{
?>
<tr>
  <td><?php echo $row['email'];?> </td>
  <td><?php echo $row['id'];?> </td>
 <td> <a href="remove.php?user_id=<?php echo $row['user_id'];?>&item_id=<?php echo $row['id'];?>">Remove</a></td>
</tr>
<?php
}
?>
  </table> 
</body>
</html>