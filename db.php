<?php  
	$db = mysqli_connect("localhost", "root", "", "emni");

	if ($db) {
		// echo "Database Connection Successfully";
	}
	else {
		die("mysqli_error" . mysqli_error($db));
	}
?>