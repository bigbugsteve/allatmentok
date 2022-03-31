<?php
    // Alkalmazás logika:
    include('config.inc.php');
    
    // adatok összegyűjtése:    
    $images = array();
    $reader = opendir($FOLDER);
    while (($file = readdir($reader)) !== false)
        if (is_file($FOLDER.$file)) {
            $end = strtolower(substr($file, strlen($file)-4));
            if (in_array($end, $TYPES))
                $images[$file] = filemtime($FOLDER.$file);            
        }
    closedir($reader);
    
    // Megjelenítés logika:
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Galéria</title>
    <style type="text/css">
        div#galeria {margin: 0 auto; width: 1000px;}
        div.kep { display: inline-block; }
        div.kep img { width: 286px; }
    </style>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
</head>
<body>
<div class="shadow-lg p-3 mb-5 bg-body rounded"><p class="fs-1">Galéria</p></div>
    <div id="galeria">


    <?php
    arsort($images);
    foreach($images as $file => $date)
    {
    ?>
    <!--
        <div class="kep">
            <a href="<?php echo $FOLDER.$file ?>">
                <img src="<?php echo $FOLDER.$file ?>" class="img-thumbnail" alt="...">
            </a>            
            <p class="fw-light">Név:  <?php echo $file; ?><br>
            Dátum:  <?php echo date($DATEFORM, $date); ?></p>
        </div>
    -->
    <div class="kep">
        <div class="card" style="width: 18rem; margin: 10px;">
        <img src="<?php echo $FOLDER.$file ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Név:  <?php echo $file; ?></h5>
            <p class="card-text">Dátum:  <?php echo date($DATEFORM, $date); ?></p>
            <a href="<?php echo $FOLDER.$file ?>" class="btn btn-primary">Megnyitás</a>
        </div>
        </div>
        </div>
    <?php
    }
    ?>
    </div>
</body>
</html>