<?php session_start(); ?>
<?php if (file_exists('src/controller/' . $currentPage['file'] . '.php')) {
	include("src/controller/{$currentPage['file']}.php");
    
} else echo "nincs controller" ?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <script type="module" src="./assets/js/main.js"></script>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
    <!-- <link rel="shortcut icon" href="../../assets//images/favicon.png"> -->
    <link rel="stylesheet" href="./assets/css/main.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tetovált Állatmentők</title>
</head>
<style>
    body {
        position: relative;
        min-height: 100vh;
    }
</style>

<body>
    <div class="page__container">
        <?php include("templates/layout/navigation.php"); ?>
        <div class="wrapper">
            <?php include("{$currentPage['file']}.php") ?>
        </div>
        <?php include("templates/layout/footer.php"); ?>
    </div>
</body>



</html>