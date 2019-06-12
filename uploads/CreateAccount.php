<?php 
ob_start();
include '../config/connect.php ';
session_start();
if(isset($_POST['username']) && isset($_POST['password'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$account = mysqli_query($conn, 'SELECT * FROM account where account.level = 0');
	foreach ($account as $value => $key) {
		if($key['email'] === $username && $key['password'] === $password){
			$id = $key['id'];
			$accountLogin = mysqli_query($conn, "SELECT * FROM account where account.id = '$id' ");
			$row = mysqli_fetch_row($accountLogin);
			$_SESSION['login'] = $row;
			// $newURL = 'http://localhost:88/carla/';
			header('Location: http://localhost:88/carla/');
		}
	}
}
?>