<?php
    $dbserver = getenv('DB_HOST_LOCAL');
	$db = getenv('DB_DATABASE');
	$db_user = getenv('DB_USERNAME');
	$db_password = getenv('DB_PASSWORD');

    
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $gender = 'm';
	$email = $_POST["email"];
	$password = $_POST["password"];


	$conn = new mysqli($dbserver,$db,$db_password,$db_user);
	if (!$conn)
	{
		die("Sikertelen kapcsolodas a szerverhez!" . mysqli_connect_error());
	}
	$sql = "INSERT INTO user (id, firstName, lastName, gender, email, password) VALUES ('0', '$firstName', '$lastName', '$gender', '$email', '$password')";
	$rs = mysqli_query($conn, $sql);
	mysqli_close($conn);
?>