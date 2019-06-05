<?php
	if(isset($_GET['module']) && isset($_GET['table']) && isset($_GET['id'])) {
		$table = $_GET['table'];
		$sqlDelData = "DELETE FROM $table WHERE id=".$_GET['id'];
		mysqli_query($conn, $sqlDelData) or die('không xoá được rồi hehe '.$sqlDelData);
		header("location: index.php?module=".$_GET['location']);
	}
?>