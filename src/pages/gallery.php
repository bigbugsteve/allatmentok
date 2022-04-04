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
                <div class="card1">
                <a href="<?php echo $GALLERY . $file ?>">
                <img src="<?php echo $GALLERY . $file ?>" class="card1-image" alt="...">
                
                    <h5 class="card1-title">Név: <?php echo $file; ?></h5>
                </a>
                </div>
            </div>
    <?php
    }
    ?>
</div>