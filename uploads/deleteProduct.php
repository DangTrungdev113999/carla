<?php 
	session_start();
	if(isset($_POST["id"])){
		$id = $_POST["id"];
		$cart = $_SESSION["cart"];
		print_r($cart[$id]);
		unset($cart[$id]);
		$_SESSION["cart"] = $cart;
}

 ?>