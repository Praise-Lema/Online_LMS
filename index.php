<?php 
include_once __DIR__.'/partials/header.php';
?>

<div id="particles-js"></div>
    
<!-- Landing Page -->
    <section class="parallax-section">
        <div class="black-glass"></div>
        <img src="Pics/Parallax_pic.jpg" alt="My-pic" class="parallax">
        <div class="text-wrapper z-0" data-aos="zoom-out" data-aos-duration="1100">
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
            <div class="gallery shadow rounded" data-aos="fade-right">
                <img class="img-category" src="./image/science_pic.jpg" alt="">
                <div class="desc d-flex flex-column justify-content-between p-4">
                    <h4>SCIENCE</h4> 
                    <p class="fs-6">From Biological knowledge of the human life and ecosystem to Applied Physics
                    </p>
                </div>     
            </div>
            
            <div class="gallery shadow rounded" data-aos="fade-down">
                <img class="img-category" src="./image/lib6.jpg" alt="">
                <div class="desc d-flex flex-column justify-content-between p-4">
                    <h4>TECHNOLOGY</h4>
                    <p class="fs-6">With the need of technology, records regarding latest technology advancements is provided.
                    </p>
                </div>
            </div>
            
            <div class="gallery shadow rounded" data-aos="fade-left">
                <img class="img-category" src="./image/philosophy_pic.jpg" alt="">
                <div class="desc d-flex flex-column justify-content-between p-4">
                    <h4>PHILOSOPHY</h4> 
                    <p class="fs-6">Philosophical facts from different philosophers like Plato.
                    </p>
                </div>
            </div>

            <div class="gallery shadow rounded" data-aos="fade-right">
                <img class="img-category" src="./image/agriculture_pic.jpg" alt="">
                <div class="desc d-flex flex-column justify-content-between p-4">
                    <h4>AGRICULTURE</h4> 
                    <p class="fs-6">Books regarding Agriculture and Livestock is one of our best categories.
                    </p>
                </div>
            </div>  

            <div class="gallery shadow rounded" data-aos="fade-up">
                <img class="img-category" src="./image/design_pic.jpg" alt="">
                <div class="desc d-flex flex-column justify-content-between p-4">
                    <h4>ART & DESIGN</h4> 
                    <p class="fs-6">Modern Art and designs from different Art galleries and Showcase events.
                    </p>
                </div>
            </div>  

            <div class="gallery shadow rounded" data-aos="fade-left">
                <img class="img-category" src="./image/business_pic.jpg" alt="">
                <div class="desc d-flex flex-column justify-content-between p-4">
                    <h4>BUSINESS</h4> 
                    <p class="fs-6">Growth of economical life is an important aspect for an individual to know. 
                    </p>
                </div>
            </div>  
        </div>
    </div>

    <?php include_once __DIR__.'/scripts/enquiry_script.php'; ?>

    <!-- Enquiry Section -->
    <div class="container d-flex flex-column align-items-center justify-content-center" id="enquiry">
        <h2 class="category-title">Any Enquiry</h2>
        <div class="container rounded-3 d-flex gap-5 justify-content-between p-5 shadow-lg" data-aos="zoom-out" style="width: 90%;">
            <form action="" method="POST" class="form w-50 p-4">
                    <div class="input-group py-2">
                        <!-- <span class="input-group-text fa fa-user bg-transparent border-0"></span> -->
                        <input type="text" class="form-control rounded-0 <?php echo isset($errors['name']) ? 'is-invalid' : ''?> bg-transparent fs-6 enquiry" name="name" placeholder="Name" value="<?php echo $name ?>">
                        <span class="invalid-feedback"><?php echo $errors['name']?></span>
                    </div>
                    <div class="input-group py-2">
                        <input type="text" class="form-control rounded-0 <?php echo isset($errors['email']) ? 'is-invalid' : ''?> bg-transparent fs-6 enquiry" name="email" placeholder="Email" value="<?php echo $email ?>">
                        <span class="invalid-feedback"><?php echo $errors['email']?></span>
                    </div>
                    <div class="input-group py-2">
                        <input type="text" class="form-control rounded-0 <?php echo isset($errors['subject']) ? 'is-invalid' : ''?> bg-transparent fs-6 enquiry" name="subject" placeholder="Subject" value="<?php echo $subject ?>">
                        <span class="invalid-feedback"><?php echo $errors['subject']?></span>
                    </div>
                    <div class="input-group py-2">
                        <textarea name="description" id="floatingTextarea2" class="form-control bg-transparent rounded-0 enquiry <?php echo isset($errors['description']) ? 'is-invalid' : ''?>" placeholder="Write Your Message Here" cols="20" rows="5" style="border: none; border-bottom: 2px solid #4f4f50;"></textarea>
                        <span class="invalid-feedback"><?php echo $errors['description']?></span>
                    </div>

                    <div class="input-group pt-4">
                        <input type="submit" value="Send Message" class="btn btn-dark form-control bg-gradient border-0 shadow z-0">
                    </div>
            </form>
            <div class="container contact_details w-50">
                <h3 class="contact_title text-center">Contact Us</h3>
                <p class="fs-6 mb-3">We're open for suggestions and any questions regarding our service</p>
                <div class="container mt-4">
                    <div class="group mt-2 d-flex flex-column gap-2">
                        <div class="sub_group d-flex gap-4 align-items-center">
                            <p class="fa fa-user rounded text-bg-dark p-2"></p>
                            <p class="fs-6"><small class="fw-bold">Address:</small> Kinondoni, Dar es salaam</p>   
                        </div>

                        <div class="sub_group d-flex gap-4 align-items-center">
                            <p class="fa fa-phone rounded text-bg-dark p-2"></p>
                            <p class="fs-6"><b>Phone:</b> +255 713 779 149</p>   
                        </div>

                        <div class="sub_group d-flex gap-4 align-items-center">
                            <p class="fa fa-envelope rounded text-bg-dark p-2"></p>
                            <!-- <p class="fs-6"><b>Email:</b> Kinondoni, Dar es salaam</p> -->
                            <p class="fs-6"><b>Email:</b> <a href="mailto:lms2024@gmail.com" class="link-success fs-6">lms2024@gmail.com</a></p>
                        </div>

                        <div class="sub_group d-flex gap-4 align-items-center">
                            <p class="fa fa-instagram rounded text-bg-dark p-2"></p>
                            <p class="fs-6"><b>Instagram:</b> Kinondoni, Dar es salaam</p>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Services Section -->
    <div class="container mt-5" id="services">
        <h2 class="category-title">Services</h2>
        <div class="container d-flex gap-5">
            <div class="mx-2 card shadow-lg rounded-0 border-0 w-50" data-aos="fade-right">
                <img src="./image/service_pic.jpg" class="card-img-top rounded-0" alt="">
            </div>

            <div class="service-desc d-flex flex-column justify-content-between w-50" data-aos="zoom-in">
                <h2>Library at your fingertips</h2>
                <p class="fs-6">We provide Diversified, Qualified and Professional Services that are Quite and Distinctively Unique</p>
                <div class="services">
                    <div class="sub_group d-flex gap-4 align-items-center">
                        <p class="fa fa-instagram rounded-circle text-bg-dark p-2"></p>
                        <p class="fs-5">Quality Books</p>   
                    </div>

                    <div class="sub_group d-flex gap-4 align-items-center">
                        <p class="fa fa-instagram rounded-circle text-bg-dark p-2"></p>
                        <p class="fs-5">Easy Access</p>   
                    </div>

                    <div class="sub_group d-flex gap-4 align-items-center">
                        <p class="fa fa-instagram rounded-circle text-bg-dark p-2"></p>
                        <p class="fs-5">Cross Platform</p>   
                    </div>

                    <div class="sub_group d-flex gap-4 align-items-center">
                        <p class="fa fa-instagram rounded-circle text-bg-dark p-2"></p>
                        <p class="fs-5">Different Categories</p>   
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>
    

    <!-- Footer -->
<?php include_once __DIR__.'/partials/footer.php'; ?>