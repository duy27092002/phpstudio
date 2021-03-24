<?php
	session_start();
	$connect = mysqli_connect('localhost', 'root', '', 'shop');
	if (isset($_POST['add_to_cart'])) {
		if (isset($_SESSION['shopping_cart'])) {
			$item_array_id = array_column($_SESSION['shopping_cart'], 'item_id');
			if (!in_array($_GET['id'], $item_array_id)) {
				$count = count($_SESSION['shopping_cart']);
				$item_array = array(
            		'item_id' => $_POST['id'],
					'item_name' => $_POST['hidden_name'],
					'item_price' => $_POST['hidden_price'],
					'item_quantity' => $_POST['quantity']
				);
				$_SESSION['shopping_cart'][$count] = $item_array;
			}
		} else {
			$item_array = array(
				'item_id' => $_GET['id'],
				'item_name' => $_GET['hidden_name'],
				'item_price' => $_GET['hidden_price'],
				'item_quantity' => $_GET['quantity']
			);
			$_SESSION['shopping_cart'][0] = $item_array;
		}
	}
	if (isset($_GET['action'])) {
		if ($_GET['action'] === "delete") {
			foreach ($_SESSION['shopping_cart'] as $key => $value) {
				if ($value['item_id'] == $_GET['id']) {
					unset($_SESSION['shopping_cart'][$key]);
				}
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Exercise 3</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../front-end_framework/bootstrap.min.css">
	<script src="../js-library/jquery.min.js"></script>
	<script src="../js-library/popper.min.js"></script>
	<script src="../js-library/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1 class="text-center my-5">Shopping Cart</h1>
		<div class="row text-center">
		<?php
			$query = "SELECT * FROM product ORDER BY id ASC";
			$result = mysqli_query($connect, $query);
			if (mysqli_num_rows($result)) {
				while ($row = mysqli_fetch_array($result)) {?>
					<div class="col-12 col-sm-12 col-md-6 col-lg-3 mb-3 card-deck">
						<div class="card p-3">
							<form method="post" action="index.php?action=add&id=<?php echo $row['id'] ?>">
								<img src="images/<?php echo $row['image']; ?>" class="img-fluid">
								<h4 class="text-info mt-3"><?php echo $row['name']; ?></h4>
								<h4 class="text-danger">$ <?php echo $row['price']; ?></h4>
								<input type="text" name="quantity" class="form-control mb-3" value="1">
								<input type="hidden" name="hidden_name" value="<?php echo $row['name']; ?>" class="mb-3">
								<input type="hidden" name="hidden_price" value="<?php echo $row['price']; ?>" class="mb-3">
								<input type="submit" name="add_to_cart" class="btn btn-info mb-3" value="Add to cart">
							</form>
						</div>
					</div>
		<?php	}}?>
		</div>
		<h3 class="text-center mt-5">Order Details</h3>
		<div class="table-responsive">
			<table class="table table-bordered">
				<tr>
					<th class="text-center">Name</th>
					<th class="text-center">Quantity</th>
					<th class="text-center">Unit Price</th>
					<th class="text-center">Price</th>
					<th class="text-center">Remove</th>
				</tr>
				<?php
					if (!empty($_SESSION['shopping_cart'])) {
						$total = 0;
						foreach ($_SESSION['shopping_cart'] as $key => $value) { ?>
							<tr>
								<td><?php echo $value['item_name']; ?></td>
								<td class="text-center"><?php echo $value['item_quantity']; ?></td>
								<td>$ <?php echo $value['item_price']; ?></td>
								<td>$ <?php echo number_format($value['item_quantity'] * $value['item_price']); ?></td>
								<td class="text-center"><a href="index.php?action=delete&id=<?php echo $value['item_id'] ?>"><span class="text-danger">&times;</span></a></td>
							</tr>
							<?php   $total = $total + ($value['item_quantity'] * $value['item_price']);} ?>
							<tr>
								<td colspan="3" align="right">Total</td>
								<td align="right">$ <?php echo number_format($total, ); ?></td>
							</tr>
				<?php	}?>
			</table>
		</div>
	</div>
</body>
</html>