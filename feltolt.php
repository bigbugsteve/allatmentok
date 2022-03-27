<?php
    // Alkalmazás logika:
    include('config.inc.php');
    $message = array();   

    // Űrlap ellenőrzés:
    if (isset($_POST['kuld'])) {
        //print_r($_FILES);
        foreach($_FILES as $file) {
            if ($file['error'] == 4);   // Nem töltött fel fájlt
            elseif (!in_array($file['type'], $MEDIATYPES))
                $message[] = " Nem megfelelő típus: " . $file['name'];
            elseif ($file['error'] == 1   // A fájl túllépi a php.ini -ben megadott maximális méretet
                        or $file['error'] == 2   // A fájl túllépi a HTML űrlapban megadott maximális méretet
                        or $file['size'] > $MAXSIZE) 
                $message[] = " Túl nagy állomány: " . $file['name'];
            else {
                $endlocation = $FOLDER.strtolower($file['name']);
                if (file_exists($endlocationy))
                    $message[] = " Már létezik: " . $file['name'];
                else {
                    move_uploaded_file($file['tmp_name'], $endlocation);
                    $message[] = ' Ok: ' . $file['name'];
                }
            }
        }        
    }
    // Megjelenítés logika:
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Galéria</title>
    <style type="text/css">
        label { display: block; }
        #wrapper {
            width: 500px;
            margin: 20px;
            }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <div class="shadow-lg p-3 mb-5 bg-body rounded"><p class="fs-1">Feltöltés a galériába</p></div>
<?php
    if (!empty($message))
    {
        echo '<ul>';
        foreach($message as $u)
            echo "<li>$u</li>";
        echo '</ul>';
    }
?>
<div id="wrapper">
    <form action="feltolt.php" method="post"
                enctype="multipart/form-data">
        <label>Első:
            <input type="file" name="elso" required>
        </label> <br><br>
        <label>Második:
            <input type="file" name="masodik">
        </label> <br><br>
        <label>Harmadik:
            <input type="file" name="harmadik">
        </label> <br><br>
        <!-- <input type="submit" name="kuld"> -->
        <button type="submit" class="btn btn-primary" name="kuld">Feltöltés</button>
      </form>  
</div>  
</body>
</html>
