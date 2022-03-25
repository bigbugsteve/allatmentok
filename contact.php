<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
<?php
	// szerver oldali ellenőrzés példa

	if(!isset($_POST['nev']) || strlen($_POST['nev']) < 5)
	{
		exit("Hibás név: ".$_POST['nev']);
	}

	$re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
	if(!isset($_POST['email']) || !preg_match($re,$_POST['email']))
	{
		exit("Hibás email: ".$_POST['email']);
	}

	if(!isset($_POST['szoveg']) || empty($_POST['szoveg']))
	{
		exit("Hibás szöveg: ".$_POST['szoveg']);
	}

	echo "Kapott értékek: ";
	echo "<pre>";
	var_dump($_POST);
	echo "</pre>";

	$nev = $_POST["nev"];
	$email = $_POST["email"];
	$szoveg = $_POST["szoveg"];

	// Adatbazis kapcsolodas / mentes

	$conn = new mysqli('localhost','mestervi_allatmentok','Allat2000','mestervi_allatmentok');
	if (!$conn)
	{
		die("Connection failed!" . mysqli_connect_error());
	}
	$sql = "INSERT INTO contact (id, nev, email, szoveg) VALUES ('0', '$nev', '$email', '$szoveg')";
	$rs = mysqli_query($conn, $sql);
	if($rs)
	{
		echo "Successfully saved";
	}
	mysqli_close($conn);

?>
	</body>
</html>
