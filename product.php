<?php
include_once('conn.php');
$query="select *from product1";
$result = $conn->query($query);
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
<tr><th colspan="3"><h1>PRODUCTS TABLE</h1></th></tr>
<t>
  <th>ID</th>
  <th>MODEL</th>
  <th>QUANTITY</th>
</t>
<?php
while($rows = $result->fetch_assoc())
{
?>
<tr>
  <td><?php echo $rows['pid'];?> </td>
  <td><?php echo $rows['model'];?> </td>
  <td><?php echo $rows['numberofitem'];?> </td>
</tr>
<?php
}
?>
<a href="addprod.html">Add_product</a>
  </table> 
</body>
</html>