<?php
include('./config/config.php');

$images = array();
$reader = opendir($GALLERY);
while (($file = readdir($reader)) !== false)
    if (is_file($GALLERY . $file)) {
        $end = strtolower(substr($file, strlen($file) - 4));
        if (in_array($end, $TYPES))
            $images[$file] = filemtime($GALLERY . $file);
    }
closedir($reader);
?>

<div class="bg-purple text-white text-center text-size-large">
    <h1 class="page-title">Galéria</p>
</div>
<div class="gallery">
    <?php
    arsort($images);
    foreach ($images as $file => $date) {
    ?>
        <div class="picture">
            <div class="card" style="width: 18rem; margin: 10px;">
                <img src="<?php echo $GALLERY . $file ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Név: <?php echo $file; ?></h5>
                    <!-- <p class="card-text">Dátum:  <?php echo date($DATEFORM, $date); ?></p> -->
                    <a href="<?php echo $GALLERY . $file ?>" class="btn btn-primary bg-purple w-100">Megnyitás</a>
                </div>
            </div>

        </div>
    <?php
    }
    ?>
</div>