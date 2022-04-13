
<?php
	// szerver oldali ellenőrzés
	$dbserver = getenv('DB_HOST_LOCAL');
	$db = getenv('DB_DATABASE');
	$db_user = getenv('DB_USERNAME');
	$db_password = getenv('DB_PASSWORD');

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

	// echo "Kapott értékek: ";
	// echo "<pre>";
	// var_dump($_POST);
	// echo "</pre>";

	$name = $_POST["contactName"];
	$email = $_POST["contactEmail"];
	$message = $_POST["contactMessage"];

	if(!isset($_SESSION['login'])){
			$anonym = "Vendég";
		} else {
			$anonym = "Felhasználó";
		}

	$date = date('Y-m-d H:i');


	// Adatbazis kapcsolodas / mentes

	$conn = new mysqli($dbserver,$db,$db_password,$db_user);
	if (!$conn)
	{
		die("Sikertelen kapcsolodas a szerverhez!" . mysqli_connect_error());
	}
	$sql = "INSERT INTO contact (id, name, email, message, anonym, date) VALUES ('0', '$name', '$email', '$message', '$anonym', '$date')";
	$rs = mysqli_query($conn, $sql);
	if($rs)
	{
		// echo "Az adatok mentve az adatbazisba! ";
		// echo $date;
		header( 'Location: ?page=contact_all' );
	}
	mysqli_close($conn);

?>