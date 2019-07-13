<?php 
ob_start();
session_start();
include '../config/connect.php ';

if(!empty($_SESSION['login']) && isset($_SESSION['cart'])){
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


}else{
	if(!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['address']) && isset($_SESSION['cart']) ){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$id = 0;
	if(mysqli_query($conn, "INSERT INTO orders(name,email,phone,address) values('$name','$email ','$phone', '$address')")){
		$id = mysqli_insert_id($conn);
	foreach ($_SESSION['cart'] as $value) {
		$id_product = $value['idProduct'];
		$quantity = $value['quantity'];
		$price = $value['price'];
		mysqli_query($conn, "INSERT INTO order_detail(order_id, product_id, quantity, price) values('$id','$id_product','$quantity','$price ')");

		}
		
		echo json_encode([
		'success' => true,
		'message' => "Buy Products Success"
		]);
		unset($_SESSION['cart']);
		
		

	}
	


	}else{
		echo json_encode([
	'success' => false,
	'message' => 'Buy Products False !'
	]);
	}
	
}
?>