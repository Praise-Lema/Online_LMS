<?php 
include_once __DIR__.'/partials/header.php';
include_once __DIR__.'/partials/functions.php';
check_logout();
include_once __DIR__.'/partials/sidebar.php';
?> 

    <!-- Main bar -->
<div class="container main-bar p-3">
    <h2 class="text-center">All Books..</h2>
    <div class="container d-flex flex-wrap gap-2">

    <?php # foreach($books as $book): ?>
    <div class="card w-25 m-3 shadow border-0 bg-transparent">
        <img src="./image/default_pic.jpg" alt="" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title">Title: <?php echo $book['title']; ?>Programming in C</h5>
            <p class="card-text fs-6 fw-light">Author: <?php echo $book['author']; ?> Dennis Ritchie</p>
            <p class="card-text fs-6 fw-light">Category: <?php echo $book['category']; ?>Technology</p>
            <?php #if($user->userType == "Admin"): ?>
            <a href="./editBook.php?book_id=<?php echo $book['id'];?>" class="btn btn-outline-dark">Edit</a>
            <a href="./deleteBook.php?id=<?php echo $book['id'];?>" class="btn btn-outline-danger">Delete</a>
            <?php #else: ?>
            <!-- <a href="./auth/issuebookscript.php?book_id=<?php echo $book['id']; ?>" class="btn btn-outline-dark">Borrow</a> -->
            <?php #endif;?>
        </div>
    </div>

    <div class="card w-25 m-3 shadow border-0 bg-transparent">
        <img src="./image/default_pic.jpg" alt="" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title">Title: <?php echo $book['title']; ?>Programming in C</h5>
            <p class="card-text fs-6 fw-light">Author: <?php echo $book['author']; ?> Dennis Ritchie</p>
            <p class="card-text fs-6 fw-light">Category: <?php echo $book['category']; ?>Technology</p>
            <?php #if($user->userType == "Admin"): ?>
            <a href="./editBook.php?book_id=<?php echo $book['id'];?>" class="btn btn-outline-dark">Edit</a>
            <a href="./deleteBook.php?id=<?php echo $book['id'];?>" class="btn btn-outline-danger">Delete</a>
            <?php #else: ?>
            <!-- <a href="./auth/issuebookscript.php?book_id=<?php echo $book['id']; ?>" class="btn btn-outline-dark">Borrow</a> -->
            <?php #endif;?>
        </div>
    </div>

    <div class="card w-25 m-3 shadow border-0 bg-transparent">
        <img src="./image/default_pic.jpg" alt="" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title">Title: <?php echo $book['title']; ?>Programming in C</h5>
            <p class="card-text fs-6 fw-light">Author: <?php echo $book['author']; ?> Dennis Ritchie</p>
            <p class="card-text fs-6 fw-light">Category: <?php echo $book['category']; ?>Technology</p>
            <?php #if($user->userType == "Admin"): ?>
            <a href="./editBook.php?book_id=<?php echo $book['id'];?>" class="btn btn-outline-dark">Edit</a>
            <a href="./deleteBook.php?id=<?php echo $book['id'];?>" class="btn btn-outline-danger">Delete</a>
            <?php #else: ?>
            <!-- <a href="./auth/issuebookscript.php?book_id=<?php echo $book['id']; ?>" class="btn btn-outline-dark">Borrow</a> -->
            <?php #endif;?>
        </div>
    </div>

    <div class="card w-25 m-3 shadow border-0 bg-transparent">
        <img src="./image/default_pic.jpg" alt="" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title">Title: <?php echo $book['title']; ?>Programming in C</h5>
            <p class="card-text fs-6 fw-light">Author: <?php echo $book['author']; ?> Dennis Ritchie</p>
            <p class="card-text fs-6 fw-light">Category: <?php echo $book['category']; ?>Technology</p>
            <?php #if($user->userType == "Admin"): ?>
            <a href="./editBook.php?book_id=<?php echo $book['id'];?>" class="btn btn-outline-dark">Edit</a>
            <a href="./deleteBook.php?id=<?php echo $book['id'];?>" class="btn btn-outline-danger">Delete</a>
            <?php #else: ?>
            <!-- <a href="./auth/issuebookscript.php?book_id=<?php echo $book['id']; ?>" class="btn btn-outline-dark">Borrow</a> -->
            <?php #endif;?>
        </div>
    </div>

    <div class="card w-25 m-3 shadow border-0 bg-transparent">
        <img src="./image/default_pic.jpg" alt="" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title">Title: <b><?php echo $book['title']; ?>Programming in C</b></h5>
            <p class="card-text fs-6 fw-light">Author: <?php echo $book['author']; ?> Dennis Ritchie</p>
            <p class="card-text fs-6 fw-light">Category: <?php echo $book['category']; ?>Technology</p>
            <?php #if($user->userType == "Admin"): ?>
            <a href="./editBook.php?book_id=<?php echo $book['id'];?>" class="btn btn-outline-dark">Edit</a>
            <a href="./deleteBook.php?id=<?php echo $book['id'];?>" class="btn btn-outline-danger">Delete</a>
            <?php #else: ?>
            <!-- <a href="./auth/issuebookscript.php?book_id=<?php echo $book['id']; ?>" class="btn btn-outline-dark">Borrow</a> -->
            <?php #endif;?>
        </div>
    </div>
    <?php #endforeach; ?>
</div>
</div> 

    <!-- Footer -->
<?php include_once __DIR__.'/partials/footer.php'; ?>