<?php 
include_once __DIR__.'/partials/header.php';
include_once __DIR__.'/partials/functions.php';
check_logout();
include_once __DIR__.'/partials/sidebar.php';
?> 

    <!-- Main bar -->
<div class="container main-bar p-3">
    <h2 class="text-center">All Books..</h2>

    <?php if(isset($_GET['msg'])): ?>
        <div class="alert alert-success shadow col-md-9 m-3 p-2">Book Added Succesfully..</div>
    <?php endif; ?>

    <div class="container d-flex flex-wrap gap-2">

    <?php 
        $sql = "SELECT * FROM books;";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) :
            while($book = mysqli_fetch_assoc($result)) :      
    ?>
    
    <div class="card w-25 m-3 shadow border-0 bg-transparent">
        <img src="./image/default_pic.jpg" alt="" class="card-img-top">
        <div class="card-body p-4">
            <h5 class="card-title text-black">Title: <?php echo $book['title']; ?></h5>
            <p class="card-text fs-6 fw-light">Author: <?php echo $book['author']; ?></p>
            <p class="card-text fs-6 fw-light">Category: <?php echo $book['category']; ?></p>
            <?php if($_SESSION['user_type'] == "Admin"): ?>
            <a href="#" class="btn btn-sm btn-outline-dark">Edit</a>
            <a href="#" class="btn btn-sm btn-outline-danger">Delete</a>
            <?php else: ?>
            <a href="#" class="btn btn-sm btn-outline-dark">Borrow</a>
            <?php endif;?>
        </div>
    </div>

    <?php endwhile; endif; ?>

</div>
</div> 

    <!-- Footer -->
<?php include_once __DIR__.'/partials/footer.php'; ?>