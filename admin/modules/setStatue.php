<?php 
	$condition = $_GET['condition'];
	$value = $_GET['value'];
	echo '<pre>';
	print_r($condition);
	print_r($value);
	echo '</pre>';

	$sql = "UPDATE orders SET status = '$value' where id = '$condition'";
	echo '<pre>';
	print_r($sql);
	echo '</pre>';
	// die();
	$result = mysqli_query($conn, $sql);
	header('location: index.php?module=orders');
 ?>