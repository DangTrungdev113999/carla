<?php 
	session_start();
	if(isset($_POST["id"]) && isset($_POST["quantity"])){
		$quantity = $_POST["quantity"];
		$id = $_POST["id"];
		$cart = $_SESSION["cart"];
		if(array_key_exists($id, $cart)){
			print_r($cart[$id]);
			if($quantity > 0 ){
			$cart[$id] = array(
				"name"=>$cart[$id]['name'],
				"quantity"=>$quantity,
				"price"=>$cart[$id]["price"],
				"image"=>$cart[$id]['image']
			);
		}else{
			unset($cart[$id]);
		}
			$_SESSION["cart"] = $cart;

		}



		}


 ?>