<?php 
include_once __DIR__.'/partials/header.php';
include_once __DIR__.'/partials/functions.php';
check_logout();
include_once __DIR__.'/partials/sidebar.php';
?>

    <!-- Main bar -->
<div class="container main-bar p-3">
    <h2 class="text-center">My Books..</h2>
    <div class="container d-flex flex-column justify-content-center align-items-center" style="min-height: 70vh;">
        <p class="fs-4">No Books Borrowed</p>
        <a href="<?php echo APP_URL?>/allbooks.php" class="fs-6 fw-light">Check Available books here..</a>
    </div>
</div> 

    <!-- Footer -->
<?php include_once __DIR__.'/partials/footer.php'; ?>