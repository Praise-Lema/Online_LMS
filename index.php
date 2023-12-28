<?php 
include_once __DIR__.'/partials/header.php';
?>
    
<!-- Landing Page -->
    <section class="parallax-section">
        <div class="black-glass"></div>
        <img src="Pics/Parallax_pic.jpg" alt="My-pic" class="parallax">
        <div class="text-wrapper z-0">
            <h1 class="head-text">Library Management System</h1>
            <h2 class="sub-head">The place to calm your mind</h2>
            <div class="btn-section">
                <a href="<?php echo APP_URL?>/auth/login.php" class="btn">Login</a>
                <a href="<?php echo APP_URL?>/auth/register.php" class="btn">Register</a>
            </div>
        </div>
    </section>

    <!-- Category section -->

    <div class="container" id="categories">
        <h2 class="category-title">Categories</h2>
        <div class="mainDIV d-flex justify-content-center gap-3">
            <div class="gallery shadow rounded">
                <img class="img-category" src="./image/lib9.jpg" alt="">
                <div class="desc d-flex flex-column justify-content-between p-4">
                    <h2>SCIENCE BOOK</h2> 
                    <p>description description Lorem ipsum dolor sit amet 
                    sint? Itaque quo eligendi quia quasi odio.
                    </p>
                </div>     
            </div>
            
            <div class="gallery shadow rounded">
                <img class="img-category" src="./image/lib6.jpg" alt="">
                <div class="desc d-flex flex-column justify-content-between p-4">
                    <h2>TECHNOLOGY BOOK</h2> 
                    <p>description description Lorem ipsum dolor sit amet 
                    sint? Itaque quo eligendi quia quasi odio.</p>
                </div>
            </div>
            
            <div class="gallery shadow rounded">
                <img class="img-category" src="./image/plant.jpg" alt="">
                <div class="desc d-flex flex-column justify-content-between p-4">
                    <h2>LIFE CONTENT BOOK</h2> 
                    <p>description Lorem ipsum dolor sit amet 
                    sint? Itaque quo eligendi quia quasi odio.</p>
                </div>
            </div>    
        </div>
    </div>
    

    <!-- Footer -->
<?php include_once __DIR__.'/partials/footer.php'; ?>