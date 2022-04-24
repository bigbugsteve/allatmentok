<?php

    $FOLDER = './assets/images/gallery/';
    $TYPES = array ('.jpg', '.png');
    $MEDIATYPES = array('image/jpeg', 'image/png');
    $DATEFORMAT = "Y.m.d. H:i";
    $MAXSIZE = 500*1024;
    $message = array();   


    if (isset($_POST['send'])) {

        foreach($_FILES as $file) {
            if ($file['error'] == 4);   // Nem töltött fel fájlt
            elseif (!in_array($file['type'], $MEDIATYPES))
                $message[] = " Nem megfelelő típus: " . $file['name'];
            elseif ($file['error'] == 1   // A fájl túllépi a php.ini -ben megadott maximális méretet
                        or $file['error'] == 2   // A fájl túllépi a HTML űrlapban megadott maximális méretet
                        or $file['size'] > $MAXSIZE) 
                $message[] = " Túl nagy állomány: " . $file['name'];
            else {
                $lastlocal = $FOLDER.strtolower($file['name']);
                if (file_exists($lastlocal))
                    $message[] = " Már létezik: " . $file['name'];
                else {
                    move_uploaded_file($file['tmp_name'], $lastlocal);
                    $message[] = ' Feltöltve: ' . $file['name'];
                }
            }
        }        
    }
?>

<?php 
if(!isset($_SESSION['login'])){
    die(header("location: ?page=404.php"));
    }
?>

<div class="bg-purple text-white text-center text-size-large p-0 m-0 mb-2">
    <h1 class="page-title">Feltöltés</h1>
</div>

<div class="global-container">
	<div class="card login-form bg-purple text-white">
        <div class="card-body">
        <h3 class="card-title text-center">Feltöltés a galériába:</h3>
        <form action="?page=upload" method="post"
                    enctype="multipart/form-data">
            <label>Első:<br>
                <input type="file" name="elso" required>
            </label><br>
            <label>Második:<br>
                <input type="file" name="masodik">
            </label><br>
            <label>Harmadik:<br>
                <input type="file" name="harmadik">
            </label><br><br>
            <input type="submit" name="send">
        </form>    

        <?php
        if (!empty($message))
        {
            echo '<ul>';
            foreach($message as $m)
                echo "<li>$m</li>";
            echo '</ul>';
        }
        ?>
        </div>
    </div>
</div>