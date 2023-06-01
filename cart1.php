<?php
session_start();
include_once('conn.php');
if (!isset($_SESSION['email'])) {
	header('location: loginpage.html');
}
$user_id = $_SESSION['id'];
$user_products_query = "select i.id,i.model,i.price from cart_order u inner join product1 i on i.id=u.item_id where u.user_id='$user_id'";
$user_products_result = mysqli_query($conn, $user_products_query) or die(mysqli_error($conn));
$no_of_user_products = mysqli_num_rows($user_products_result);
$sum = 0;
if ($no_of_user_products == 0) {
	//echo "Add items to cart first.";
} 
else {
	while ($row = mysqli_fetch_array($user_products_result)) {
		$sum = $sum + $row['price'];
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<link rel="shortcut icon" href="" />
	<title>cart</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/head1.css">
	<link rel="stylesheet" href="css/carts.css">
  <link rel="stylesheet" href="fonts-web/css/all.css">
</head>

<body>
	<div>
		<div class="container">
			<table class="table table-bordered table-striped" border="1">
				<tbody>
					<tr>
						<th>Item Number</th>
						<th>Item Name</th>
						<th>Price</th>
						<th></th>
					</tr>
					<?php
					$user_products_result = mysqli_query($conn, $user_products_query) or die(mysqli_error($conn));
					$no_of_user_products = mysqli_num_rows($user_products_result);
					$counter = 1;
					while ($row = mysqli_fetch_array($user_products_result)) {

						?>
						<tr>
							<th>
								<?php echo $counter ?>
							</th>
							<th>
								<?php echo $row['model'] ?>
							</th>
							<th>
								<?php echo $row['price'] ?>
							</th>
							<th><a href='remove.php?id=<?php echo $row['id'] ?>'>Remove</a></th>
						</tr>
						<?php $counter = $counter + 1;
					} ?>
					<tr>
						<th></th>
						<th>Total</th>
						<th>
							<?php echo $sum; ?> ETB
						</th>
						<!-- <th><a href="success.php?id=<?php echo $user_id ?>" class="btn btn-primary">Confirm Order</a></th> -->
						<th><a href="cart_check.php">Confirm Order</a></th>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</body>

</html>