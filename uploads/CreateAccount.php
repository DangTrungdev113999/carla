<?php 
ob_start();
session_start();
include '../config/connect.php ';

if(isset($_POST['username']) && isset($_POST['password'])){
	$email = $_POST['username'];
	$password = $_POST['password'];

	$account = mysqli_query($conn, "SELECT * FROM account where email='$email' AND password='$password' AND level = 0");

	if(mysqli_num_rows($account) == 1){
		$row = mysqli_fetch_row($account);
		$_SESSION['login'] = $row;
		header('location: ../index.php');
	}
	else{
		header('location: ../account.php');
	}
}
?>