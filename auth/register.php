<?php 
include_once __DIR__.'/../partials/header.php';
include_once __DIR__.'/register_script.php';
include_once __DIR__.'/../partials/functions.php';

check_login();
?>

<!-- <div class="bg-background"></div> -->
<div class="img">
    <img src="./../image/lib6.jpg" width="100%" height="100%" alt="" id="bg-img">
</div>


<div class="container px-0 form-container d-flex rounded gap-3 shadow-lg">
<!-- Left section -->
    <div class="section">
        <div class="container h-100 d-flex flex-column justify-content-center align-items-center gap-5">
            <h5>Already have an account?</h5>
            <a href="<?php echo APP_URL?>/auth/login.php" class="btn btn-dark bg-gradient border-0 shadow">Login</a>
        </div>
        <hr class="vr vr-register text-black">
    </div>

    <!-- Middle section -->
    <div class="section">
        <div class="container d-flex flex-column justify-content-between align-items-center h-100 py-4">
            <h3 class="form-title">Register</h3>
            <h5>Register to continue..</h5>
            <form action="" method="POST" class="form mb-2">
                <div class="input-group py-2">
                    <!-- <span class="input-group-text fa fa-user bg-transparent border-0"></span> -->
                    <input type="text" class="form-control rounded-0 <?php echo isset($errors['fname']) ? 'is-invalid' : ''?> bg-transparent fs-6" name="fname" placeholder="First Name" value="<?php echo $firstname ?>">
                    <span class="invalid-feedback"><?php echo $errors['fname']?></span>
                </div>
                <div class="input-group py-2">
                    <input type="text" class="form-control rounded-0 <?php echo isset($errors['lname']) ? 'is-invalid' : ''?> bg-transparent fs-6" name="lname" placeholder="Last Name" value="<?php echo $lastname ?>">
                    <span class="invalid-feedback"><?php echo $errors['lname']?></span>
                </div>
                <div class="input-group py-2">
                    <input type="email" class="form-control rounded-0 <?php echo isset($errors['email']) ? 'is-invalid' : ''?> bg-transparent fs-6" name="email" placeholder="Email" value="<?php echo $email ?>">
                    <span class="invalid-feedback"><?php echo $errors['email']?></span>
                </div>
                <div class="input-group py-2">
                    <input type="password" class="form-control rounded-0 <?php echo isset($errors['pwd']) ? 'is-invalid' : ''?> bg-transparent fs-6" name="password" placeholder="Password">
                    <span class="invalid-feedback"><?php echo $errors['pwd']?></span>
                </div>

                <div class="input-group py-2">
                    <input type="password" class=" form-control rounded-0 <?php echo isset($errors['conf-pwd']) ? 'is-invalid' : ''?> fs-6 bg-transparent" name="confirm_pwd" placeholder="Confirm Password">
                    <span class="invalid-feedback"><?php echo $errors['conf-pwd']?></span>
                </div>

                <div class="input-group py-2">
                    <input type="submit" value="Register" class="btn btn-dark form-control bg-gradient border-0 shadow">
                </div>
            </form>
        </div>   
    </div>

    <!-- Right section -->
    <div class="section " class="px-0">
        <img src="./../Pics/shelves.jpg" width="100%" height="100%" alt="">
        <div class="blur-container py-4 d-flex flex-column justify-content-between">
            <div class="container text-light d-flex flex-column justify-content-center align-items-center px-4">
                <span class="fa fa-book-open fa-3x"></span>
                <h5 class="my-2">Welcome</h5>
                <p>Register now to continue</p>
            </div>

            <div class="container text-light d-flex px-4">
                <p class="fs-6 text-intro">Welcome to the online library management system. This system tends to help a student get access to a varsity number of online books that can be read online.</p>
            </div>

            <div class="container text-light px-4">
                <ul class="p-4 fs-6" type="circle">
                    <li>Viewing Books</li>
                    <li>Borrowing Books</li>
                    <li>Issuing Books</li>
                </ul>
            </div>
        </div>
    </div>
</div>
        
<?php include_once __DIR__.'/../partials/footer.php'; ?>

