<?php session_start(); ?>
<?php if (file_exists('src/controller/' . $currentPage['file'] . '.php')) {
	include("src/controller/{$currentPage['file']}.php");
    
} else echo "";

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- <script type="module" src="./assets/js/main.js"></script> -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
    <!-- <link rel="shortcut icon" href="../../assets//images/favicon.png"> -->
    <link rel="stylesheet" href="./assets/css/main.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tetovált Állatmentők</title>
    <style>
    body {
        position: relative;
        min-height: 100vh;
    }
    </style>
</head>

<body>
    <div class="page__container">
        <div class="page__wrapper">
            <?php include("templates/layout/navigation.php"); ?>
    
            <div class="wrapper">
                <?php include("{$currentPage['file']}.php") ?>
            </div>
            
            <?php include("templates/layout/footer.php"); ?>
        </div>
    </div>
    <script type="module" src="./assets/js/main.js"></script>
</body>

</html>
