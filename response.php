<?php 
include_once __DIR__.'/partials/header.php';
?>

<section class="parallax-section">
        <div class="black-glass"></div>
        <img src="Pics/Parallax_pic.jpg" alt="My-pic" class="parallax">
        <div class="text-wrapper z-0">
            <h1 class="head-text">Thank You for Contacting Us</h1>
            <h2 class="text-light">We will get back to you as soon as we can..</h2>
            <div class="btn-section">
                <a href="<?php echo APP_URL?>/auth/login.php" class="btn btn-dark btn-home border-0 px-3"><span class="fa fa-sign-in me-2"></span>Login</a>
                <a href="<?php echo APP_URL?>/index.php" class="btn btn-dark btn-home border-0 px-2"><span class="fa fa-home me-2"></span>Home</a>
            </div>
        </div>
    </section>