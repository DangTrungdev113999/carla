<?php 
session_start();
if(isset($_POST['id']) && isset($_POST['quantity'])  ){
	include '../config/connect.php ';
	$id = $_POST['id'];
	$quantity = $_POST['quantity'];
	$detail_product = mysqli_query($conn, "select * from product where id = '$id' ");
	$row = mysqli_fetch_row($detail_product);
	$price = $row[5];
	print_r($price);
	if(isset($row[6])){
	$price = $row[6];
	}
	if(!isset($_SESSION['cart']) ){
		$cart = array();
		$cart[$id] = array(
			'name' => $row[1],
			'quantity'=> $quantity,
			'price' => $price,
			'image' => $row[2],
			'idProduct' => $id
		);
	}else{
		$cart = $_SESSION["cart"];
		if(array_key_exists($id, $cart)){
			$cart[$id] = array(
			'name' => $row[1],
			'quantity'=> (int)$cart[$id]['quantity']+$quantity,
			'price' => $price,
			'image' => $row[2],
			'idProduct' => $id
		);
		}else{
			$cart[$id] = array(
			'name' => $row[1],
			'quantity'=> $quantity,
			'price' => $price,
			'image' => $row[2],
			'idProduct' => $id
		);
		}
	}
	$_SESSION["cart"] = $cart;


}

 ?>