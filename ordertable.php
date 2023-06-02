<?php
include_once('conn.php');
$query="select *from `order`";
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
<tr><th colspan="2"><h1>order TABLE</h1></th></tr>
<t>
  <th>USER_ID</th>
  <th>ITEM_ID</th>
</t>
<?php
while($rows = $result->fetch_assoc())
{
?>
<tr>
  <td><?php echo $rows['user_id'];?> </td>
  <td><?php echo $rows['item_id'];?> </td>
 <td> <a href="remove.php?user_id=<?php echo $rows['user_id'];?>&item_id=<?php echo $rows['item_id'];?>">Remove</a></td>
</tr>
<?php
}
?>
  </table> 
</body>
</html>