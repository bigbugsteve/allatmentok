<?php
$dbserver = getenv('DB_HOST_LOCAL');
$db = getenv('DB_DATABASE');
$db_user = getenv('DB_USERNAME');
$db_password = getenv('DB_PASSWORD');

if(isset($_POST['email']) && isset($_POST['password'])) {
	try {
        // Kapcsolódás
        $dbh = new PDO("mysql:host=$dbserver;dbname=$db", $db_user, $db_password,
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        
        // Felhsználó keresése
        $sqlSelect = "select id, firstName, lastName, gender, email from user where email = :email and password = :password;";
		echo $sqlSelect;
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute(array(':email' => $_POST['email'], ':password' => $_POST['password']));
        $row = $sth->fetch(PDO::FETCH_ASSOC);
        if($row) {
            $_SESSION['csn'] = $row['firstName']; $_SESSION['un'] = $row['lastName']; $_SESSION['login'] = $_POST['email'];
        }

		echo $_SESSION;
    }
    catch (PDOException $e) {
        $errormessage = "Hiba: ".$e->getMessage();
    }  
    // echo $row;    
}
// else {
//     header("Location: .");
// }
