<?php include "head.php";?>
<?php 
	//database ko lagi constant define gareko
	const DB_HOST = "localhost"; 
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_NAME = "admin_6pm";
	const DB_SOCKET = "";

	//database ly connect gareko
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD) OR die("Error in establishing database");
	$db = mysqli_select_db($conn, DB_NAME) OR die("mysqli_error($conn)");

	echo "<pre>";
	print_r($conn);
	echo "</pre>";
?>
<?php include "foot.php";?>