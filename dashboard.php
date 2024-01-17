<?php
include_once __DIR__.'/partials/header.php';
include_once __DIR__.'/partials/functions.php';
check_logout();

include_once __DIR__.'/partials/sidebar.php';

?>  

    <!-- Main bar -->
<div class="container main-bar p-3">
    <h2 class="text-center">Dashboard..</h2>
    <div class="container">
                <div class="row p-2">
                    <div class="col-md-4">
                        <div class="card shadow py-2 bg-transparent border-0">
                        <i class="card-img-top fa fa-book fa-4x text-center text-success"></i>
                            <div class="card-body text-center text-success">
                                <h2 class="card-title"><?php echo $book->count;?>10</h2>
                                <h4 class="card-text">Books Available</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow py-2 bg-transparent border-0">
                        <i class="card-img-top fa fa-recycle fa-4x text-center text-info-emphasis"></i>
                            <div class="card-body text-center text-info-emphasis">
                                <h2 class="card-title"><?php echo $issuedbook->count;?>0</h2>
                                <h4 class="card-text">Issued Books</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow py-2 bg-transparent border-0">
                        <i class="card-img-top fa fa-user-friends fa-4x text-center text-success-emphasis"></i>
                            <div class="card-body text-center text-success-emphasis">
                                <h2 class="card-title"><?php echo $admins->count; ?>0</h2>
                                <h4 class="card-text">Admins</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-md-4">
                            <div class="card shadow py-2 bg-transparent border-0">
                            <i class="card-img-top fa fa-user fa-4x text-center text-warning-emphasis"></i>
                                <div class="card-body text-center text-warning-emphasis">
                                    <h2 class="card-title"><?php echo $student->count;?>0</h2>
                                    <h4 class="card-text">Students</h4>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-4">
                            <div class="card shadow py-2 bg-transparent border-0">
                            <i class="card-img-top fa fa-list fa-4x text-center text-danger-emphasis"></i>
                                <div class="card-body text-center text-danger-emphasis">
                                    <h2 class="card-title"><?php echo $category->count;?>0</h2>
                                    <h4 class="card-text">Categories</h4>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-4">
                            <div class="card shadow py-2 bg-transparent border-0">
                            <i class="card-img-top fa fa-plus-circle fa-4x text-center text-warning-emphasis"></i>
                                <div class="card-body text-center text-warning-emphasis">
                                    <h2 class="card-title"><?php echo $pendingbook->count; ?>0</h2>
                                    <h4 class="card-text">Pending Requests</h4>
                                </div>
                            </div>
                    </div>
                </div>

                <!-- <div class="container m-5">
                    <h2 class="my-4">Welcome to the library Management System</h2>
                    <h4 class="my-4">There are many Features in our system..They include:-</h4>
                    <ul>
                        <li>Viewing Available Books in the library</li>
                        <li>Issuing books</li>
                        <li>Returning books books</li>
                    </ul>
                    <h4>The system requires you to create an account in order to issue and read books</h4>
                </div> -->
    </div>
</div> 

    <!-- Footer -->
<?php include_once __DIR__.'/partials/footer.php'; ?>