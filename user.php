<?php
include_once('conn.php');
$sql="select id, username, email from users where username !='admin'";
$result=$conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<table  align"center" border="1px" styles="width:600px; line-height:40px;">
<tr><th colspan="3"><h1>PRODUCTS TABLE</h1></th></tr>
<t>
  <th>ID</th>
  <th>USERNAME</th>
  <th>EMAIL</th>
</t>
<?php
while($rows = $result->fetch_assoc())
{
?>
<tr>
  <td><?php echo $rows['id'];?> </td>
  <td><?php echo $rows['username'];?> </td>
  <td><?php echo $rows['email'];?> </td>
</tr>
<?php
}
?>
  </table> 
</body>
</html>