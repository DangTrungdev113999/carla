<?php 
ob_start();
session_start();
include '../config/connect.php ';

if(isset($_SESSION['login']) && isset($_SESSION['cart'])){
	$accountId = $_SESSION['login'][0];
	$id = 0;
	if(mysqli_query($conn, "INSERT INTO orders(account_id) values('$accountId')")){
		$id = mysqli_insert_id($conn);
	}
	foreach ($_SESSION['cart'] as $value) {
		$id_product = $value['idProduct'];
		$quantity = $value['quantity'];
		$price = $value['price'];
		mysqli_query($conn, "INSERT INTO order_detail(order_id, product_id, quantity, price) values('$id','$id_product','$quantity','$price ')");

	}
	unset($_SESSION['cart']);
	echo json_encode([
	'success' => true,
	'message' => 'Buy Products Success !'
	]);

	




}
?>