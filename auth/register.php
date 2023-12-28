<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="register.css">
    </head>
    <body>

        <div class="form-container">
            <form action="" method="post" class="form  ">
                <h2 class="form-title">Register</h2>
                
                <div class="form-group ">
                    <input type="text" class="form-control" name="fname" placeholder="First Name" id="first-name">
                </div>
                <div class="form-group ">
                    <input type="text" class="form-control" name="lname" placeholder="Last Name" id="last-name">
                </div>
                <div class="form-group ">
                    <input type="email" class="form-control" name="email" placeholder="Email" id="email">
                </div>
        
                <div class="form-group ">
                    <input type="password" class="form-control" name="pwd" placeholder="Password" id="password" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="cpwd" placeholder="Confirm Password" id="confirmPasword">
                </div>
        
                <div class="form-group ">
                    <label for="user-type" class="select-label">Select User Type:</label>
                    <select name="usertype" class="select" >
                        <option>Admin</option>
                        <option>User</option>
                    </select>
                </div>
                <div>
                    <button onclick="passwordCheck()" id="register" value="register" class="button">register<button>
                    
                </div>
            
    </body>
</html> -->

<?php include_once __DIR__.'/../partials/header.php'; ?>

<!-- <div class="bg-background"></div> -->
<div class="img">
    <img src="./../image/lib6.jpg" width="100%" height="100%" alt="" id="bg-img">
</div>


<div class="container px-0 form-container d-flex rounded gap-3 shadow-lg">
<!-- Left section -->
    <div class="section">
        <div class="container h-100 d-flex flex-column justify-content-center align-items-center gap-5">
            <h5>Already have an account?</h5>
            <a href="<?php echo APP_URL?>/auth/login.php" class="btn btn-dark bg-gradient">Login</a>
        </div>
        <hr class="vr vr-register text-black">
    </div>

    <!-- Middle section -->
    <div class="section">
        <div class="container d-flex flex-column justify-content-between align-items-center h-100 py-5">
            <h3 class="form-title">Register</h3>
            <h5>Register to continue..</h5>
            <form action="" class="form">
                <div class="form-group py-3">
                    <input type="text" class="form-control rounded-0 bg-transparent fs-6" name="username" id="" placeholder="First Name">
                </div>
                <div class="form-group py-3">
                    <input type="text" class="form-control rounded-0 bg-transparent fs-6" name="username" id="" placeholder="Last Name">
                </div>
                <div class="form-group py-3">
                    <input type="email" class="form-control rounded-0 bg-transparent fs-6" name="username" id="" placeholder="Email">
                </div>
                <div class="form-group py-3">
                    <input type="password" class="form-control rounded-0 bg-transparent fs-6" name="username" id="" placeholder="Password">
                </div>

                <div class="form-group py-3">
                    <input type="password" class=" form-control rounded-0 fs-6 bg-transparent" name="passwd" id="" placeholder="Confirm Password">
                </div>

                <div class="form-group">
                    <input type="submit" value="Register" class="btn btn-dark bg-gradient">
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

