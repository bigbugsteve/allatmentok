<?php
// echo 'anyad';
// if(isset($_POST['felhasznalo']) && isset($_POST['jelszo'])) {
//     try {
//         // Kapcsolódás
//         $dbh = new PDO('mysql:host=localhost;dbname=gyakorlat7', 'root', '',
//                         array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
//         $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        
//         // Felhsználó keresése
//         $sqlSelect = "select id, csaladi_nev, uto_nev from felhasznalok where bejelentkezes = :bejelentkezes and jelszo = sha1(:jelszo)";
//         $sth = $dbh->prepare($sqlSelect);
//         $sth->execute(array(':bejelentkezes' => $_POST['felhasznalo'], ':jelszo' => $_POST['jelszo']));
//         $row = $sth->fetch(PDO::FETCH_ASSOC);
//         if($row) {
//             $_SESSION['csn'] = $row['csaladi_nev']; $_SESSION['un'] = $row['uto_nev']; $_SESSION['login'] = $_POST['felhasznalo'];
//         }
//     }
//     catch (PDOException $e) {
//         $errormessage = "Hiba: ".$e->getMessage();
//     }  
//     echo $row;    
// }
// else {
//     header("Location: .");
// }
?>
