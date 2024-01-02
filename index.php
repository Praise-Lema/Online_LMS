<?php 
include_once __DIR__.'/partials/header.php';
?>
    
<!-- Landing Page -->
    <section class="parallax-section">
        <div class="black-glass"></div>
        <img src="Pics/Parallax_pic.jpg" alt="My-pic" class="parallax">
        <div class="text-wrapper z-0">
            <h1 class="head-text">0nline Library System</h1>
            <h2 class="sub-head">The place to calm your mind</h2>
            <div class="btn-section">
                <a href="<?php echo APP_URL?>/auth/login.php" class="btn btn-dark btn-home border-0 px-3"><span class="fa fa-sign-in me-2"></span>Login</a>
                <a href="<?php echo APP_URL?>/auth/register.php" class="btn btn-dark btn-home border-0 px-2"><span class="fa fa-edit me-2"></span>Register</a>
            </div>
        </div>
    </section>

    <!-- Category section -->

    <div class="container" id="categories">
        <h2 class="category-title">Categories</h2>
        <div class="mainDIV d-flex justify-content-center flex-wrap gap-3">
        <!-- Category items -->
            <div class="gallery shadow rounded">
                <img class="img-category" src="./image/science_pic.jpg" alt="">
                <div class="desc d-flex flex-column justify-content-between p-4">
                    <h4>SCIENCE</h4> 
                    <p class="fs-6">description description Lorem ipsum dolor sit amet 
                    sint? Itaque quo eligendi quia quasi odio.
                    </p>
                </div>     
            </div>
            
            <div class="gallery shadow rounded">
                <img class="img-category" src="./image/lib6.jpg" alt="">
                <div class="desc d-flex flex-column justify-content-between p-4">
                    <h4>TECHNOLOGY</h4>
                    <p class="fs-6">description description Lorem ipsum dolor sit amet 
                    sint? Itaque quo eligendi quia quasi odio.
                    </p>
                </div>
            </div>
            
            <div class="gallery shadow rounded">
                <img class="img-category" src="./image/philosophy_pic.jpg" alt="">
                <div class="desc d-flex flex-column justify-content-between p-4">
                    <h4>PHILOSOPHY</h4> 
                    <p class="fs-6">description description Lorem ipsum dolor sit amet 
                    sint? Itaque quo eligendi quia quasi odio.
                    </p>
                </div>
            </div>

            <div class="gallery shadow rounded">
                <img class="img-category" src="./image/agriculture_pic.jpg" alt="">
                <div class="desc d-flex flex-column justify-content-between p-4">
                    <h4>AGRICULTURE</h4> 
                    <p class="fs-6">description description Lorem ipsum dolor sit amet 
                    sint? Itaque quo eligendi quia quasi odio.
                    </p>
                </div>
            </div>  

            <div class="gallery shadow rounded">
                <img class="img-category" src="./image/design_pic.jpg" alt="">
                <div class="desc d-flex flex-column justify-content-between p-4">
                    <h4>ART & DESIGN</h4> 
                    <p class="fs-6">description description Lorem ipsum dolor sit amet 
                    sint? Itaque quo eligendi quia quasi odio.
                    </p>
                </div>
            </div>  

            <div class="gallery shadow rounded">
                <img class="img-category" src="./image/business_pic.jpg" alt="">
                <div class="desc d-flex flex-column justify-content-between p-4">
                    <h4>BUSINESS</h4> 
                    <p class="fs-6">description description Lorem ipsum dolor sit amet 
                    sint? Itaque quo eligendi quia quasi odio.
                    </p>
                </div>
            </div>  
        </div>
    </div>

    <!-- Enquiry Section -->
    <div class="container" id="enquiry">
        <h2 class="category-title">Any Enquiry</h2>
    </div>
    

    <!-- Footer -->
<?php include_once __DIR__.'/partials/footer.php'; ?>