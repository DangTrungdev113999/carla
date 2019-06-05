<?php
	if(isset($_GET['module']) && isset($_GET['id'])) {
		$sqlDelData = "DELETE FROM category WHERE id=".$_GET['id'];
		mysqli_query($conn, $sqlDelData) or die('không xoá được rồi hehe '.$sqlDelData);
		header("location: index.php?module=categories");
	}
?>