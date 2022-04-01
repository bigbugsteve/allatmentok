
<?php
	// szerver oldali ellenőrzés példa

	if(!isset($_POST['contactName']) || strlen($_POST['contactName']) < 5)
	{
		exit("Hibás név: ".$_POST['contactName']);
	}

	$re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
	if(!isset($_POST['contactEmail']) || !preg_match($re,$_POST['contactEmail']))
	{
		exit("Hibás email: ".$_POST['contactEmail']);
	}

	if(!isset($_POST['contactMessage']) || empty($_POST['contactMessage']))
	{
		exit("Hibás szöveg: ".$_POST['contactMessage']);
	}

	echo "Kapott értékek: ";
	echo "<pre>";
	var_dump($_POST);
	echo "</pre>";

	$name = $_POST["contactName"];
	$email = $_POST["contactEmail"];
	$message = $_POST["contactMessage"];
	$anonym = 0;
	$date = time();


	// Adatbazis kapcsolodas / mentes

	$conn = new mysqli('localhost','mestervi_allatmentok','Allat2000','mestervi_allatmentok');
	if (!$conn)
	{
		die("Sikertelen kapcsolodas a szerverhez!" . mysqli_connect_error());
	}
	$sql = "INSERT INTO contact (id, name, email, message, anonym, date) VALUES ('0', '$name', '$email', '$message', '$anonym', '$date')";
	$rs = mysqli_query($conn, $sql);
	if($rs)
	{
		echo "Az adatok mentve az adatbazisba! ";
		echo $date;
	}
	mysqli_close($conn);

?>