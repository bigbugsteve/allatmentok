<?php
    include('config.inc.php');
     
    $images = array();
    $reader = opendir($FOLDER);
    while (($file = readdir($reader)) !== false)
        if (is_file($FOLDER.$file)) {
            $end = strtolower(substr($file, strlen($file)-4));
            if (in_array($end, $TYPES))
                $images[$file] = filemtime($FOLDER.$file);            
        }
    closedir($reader);
?>

<div class="bg-blue text-white text-center text-size-large">
    <p>Galéria</p>
</div>
    <div class="gallery">
    <?php
    arsort($images);
    foreach($images as $file => $date)
    {
    ?>
    <div class="picture">
        <div class="card" style="width: 18rem; margin: 10px;">
        <img src="<?php echo $FOLDER.$file ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Név:  <?php echo $file; ?></h5>
            <p class="card-text">Dátum:  <?php echo date($DATEFORM, $date); ?></p>
            <a href="<?php echo $FOLDER.$file ?>" class="btn btn-primary bg-blue">Megnyitás</a>
        </div>
        </div>

    </div>
    <?php
    }
    ?>
    </div>
