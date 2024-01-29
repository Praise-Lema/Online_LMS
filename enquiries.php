<?php 
include_once __DIR__.'/partials/header.php';
include_once __DIR__.'/partials/functions.php';
check_logout();
include_once __DIR__.'/partials/sidebar.php';
?>

    <!-- Main bar -->
<div class="container main-bar p-3">
    <h2 class="text-center">Enquiries..</h2>
    <div class="container">
        <div class="my-card d-flex">
            <div>
                <h2 class="card-header">The Art Of Debugging</h2>
                <p class="my-text">Written by: Praise Lema</p>
                <p class="my-text">12th Jan, 2024</p>
            </div>

            <div className="btns">
                <a class="btn btn-sm btn-danger-outline">Delete</a>
            </div>
        </div>
    </div>
</div> 

    <!-- Footer -->
<?php include_once __DIR__.'/partials/footer.php'; ?>