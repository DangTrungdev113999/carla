<?php 
ob_start();
session_start();
include '../config/connect.php ';

if(isset($_POST['newName']) &&  isset($_POST['Address']) && isset($_POST['newUsername'])&& isset($_POST['newPhone']) && isset($_POST['newPassWord'])  && isset($_POST['RepeatPassWord']) ){
	$newName = $_POST['newName'];
	$newUsername = $_POST['newUsername'];
	$newPhone = $_POST['newPhone'];
	$newPassWord = $_POST['newPassWord'];
	$Address = $_POST['Address'];   
	mysqli_query($conn, "INSERT INTO account(name,email,phone,password,address)
						VALUES('$newName', '$newUsername', '$newPhone', '$newPassWord', '$Address')");
	echo json_encode([
		'success' => true,
		'message' => 'Create Account Success !'
	]);


}
?>