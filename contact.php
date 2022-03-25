<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
<?php
	//szerver oldali ellenőrzés példa

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

	// Database connection

	$conn = new mysqli('localhost','mestervi_allatmentok','Allat2000','mestervi_allatmentok');
	if($conn->connect_error){
		die('Sikertelen kapcsolodas : '.$conn->connect_error);
	}else{
		echo "Sikeres kapcsolodas a szerverhez...";
		$stmt = $conn->prepare("instert into contact(nev, email, szoveg)values(?, ?, ?)");
		$stmt->bind_parm("sss", $nev, $email, $szoveg);
		$stmt->execute();
		echo "Adatok elkuldve.";
		$stmt->close();
		$conn->close();

	}



?>
	</body>
</html>
