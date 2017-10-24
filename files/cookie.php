<?php 
if (isset($_GET) && $_GET['amount']) {
		$product_id = strip_tags(trim($_GET['product_id']));
		$amount = strip_tags(trim($_GET['amount']));
	if ($_COOKIE['cart']) {
		$cart = unserialize($_COOKIE['cart']);
		$cart[$product_id] = $amount;
		setcookie('cart', serialize($cart),time()+3600, '/');
	} else {
		$cart[$product_id] = $amount;
		setcookie('cart', serialize($cart),time()+3600, '/');
	}

	print_r(unserialize($_COOKIE['cart']));
	
	$cart_products = unserialize($_COOKIE['cart']);
	foreach ($cart_products as $id => $amount) {
		$product_cart[$id] = getProduct($product, $id);
		$product_cart[$id]->amount = $amount;
	}
}
?>
 <form method="get">
 	<label>amount</label>
	<input type="number" name="amount" value="1">
	<label>ID product</label>
	<input type="text" name="product_id" value="1">
	<input type="submit" name="buy" value="buy">
</form>
