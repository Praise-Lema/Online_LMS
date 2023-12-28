<?php include_once __DIR__.'/../partials/header.php'; ?>

<!-- <div class="bg-background"></div> -->
<div class="img">
    <img src="./../image/lib6.jpg" width="100%" height="100%" alt="" id="bg-img">
</div>


<div class="container px-0 form-container d-flex rounded gap-3 shadow-lg">
<!-- Left section -->
    <div class="section " class="px-0">
        <img src="./../Pics/shelves.jpg" width="100%" height="100%" alt="">
        <div class="blur-container py-4 d-flex flex-column justify-content-between">
            <div class="container text-light d-flex flex-column justify-content-center align-items-center px-4">
                <span class="fa fa-book-open fa-3x"></span>
                <h5 class="my-2">Welcome</h5>
                <p>Please sign in to continue</p>
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

    <!-- Middle section -->
    <div class="section">
        <div class="container d-flex flex-column justify-content-between align-items-center h-100 py-5">
            <h3 class="form-title">Login</h3>
            <h5>Login to continue..</h5>
            <form action="" class="form py-3">
                <div class="form-group py-3">
                    <input type="text" class="form-control rounded-0 border-dark bg-transparent" name="username" id="" placeholder="Email">
                </div>

                <div class="form-group py-3">
                    <input type="password" class="form-control rounded-0 border-dark bg-transparent" name="passwd" id="" placeholder="Password">
                </div>

                <div class="form-group py-3">
                    <input type="submit" value="Login" class="btn form-control btn-dark bg-gradient">
                </div>
            </form>
        </div>   
    </div>

    <!-- Right section -->
    <div class="section">
    <hr class="vr vr-login text-black">
        <div class="container h-100 d-flex flex-column justify-content-center align-items-center gap-5">
            <h5>Don't have an account?</h5>
            <a href="<?php echo APP_URL?>/auth/register.php" class="btn btn-dark bg-gradient">Register</a>
        </div>
    </div>
</div>
        
<?php include_once __DIR__.'/../partials/footer.php'; ?>
