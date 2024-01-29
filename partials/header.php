<?php 
define('APP_URL','http://localhost/LMS');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo APP_URL?>/auth/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="<?php echo APP_URL?>/Assets/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo APP_URL?>/style.css">
    <link rel="stylesheet" href="<?php echo APP_URL?>/loader.css">

    <title>Library Management System</title>
</head>
<body>

<?php include_once __DIR__.'/../database/connection.php'; ?>
<?php include_once __DIR__.'/navbar.php'; ?>

    <div class="center" id="preloader">
        <div class="ring"></div>
        <span class="loading">Loading..</span>
    </div>