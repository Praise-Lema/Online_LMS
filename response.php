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

    <!-- Footer -->
    <script src="<?php echo APP_URL?>/loader.js"></script>
    <script src="<?php echo APP_URL?>/script.js?>"></script>
    <script src="<?php echo APP_URL?>/auth/register.js"></script>
    <script src="https://kit.fontawesome.com/ce9709e331.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="<?php echo APP_URL?>/Assets/bootstrap-5.3.2-dist/js/bootstrap.js"></script>
</body>
</html>