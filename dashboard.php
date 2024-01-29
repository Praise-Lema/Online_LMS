<?php
include_once __DIR__.'/partials/header.php';
include_once __DIR__.'/partials/functions.php';
check_logout();

include_once __DIR__.'/partials/sidebar.php';
include_once __DIR__.'/scripts/dashboard_script.php';

?>

    <!-- Main bar -->
<div class="container main-bar p-3">
    <h2 class="text-center">Dashboard..</h2>
    <div class="container mb-5">
                <div class="row p-2">
                    <div class="col-md-4">
                        <div class="card shadow py-2 bg-transparent border-0">
                        <i class="card-img-top fa fa-book fa-3x text-center d-card-color"></i>
                            <div class="card-body text-center d-card-color">
                                <h2 class="card-title"><?php echo $book_count->count; ?></h2>
                                <h4 class="card-text fs-5">Books Available</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow py-2 bg-transparent border-0">
                        <i class="card-img-top fa fa-recycle fa-3x text-center d-card-color"></i>
                            <div class="card-body text-center d-card-color">
                                <h2 class="card-title"><?php echo $issued_count->count; ?></h2>
                                <h4 class="card-text fs-5">Issued Books</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow py-2 bg-transparent border-0">
                        <i class="card-img-top fa fa-user-friends fa-3x text-center d-card-color"></i>
                            <div class="card-body text-center d-card-color">
                                <h2 class="card-title"><?php echo $admin_count->count; ?></h2>
                                <h4 class="card-text fs-5">Admins</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-md-4">
                            <div class="card shadow py-2 bg-transparent border-0">
                            <i class="card-img-top fa fa-user fa-3x text-center d-card-color"></i>
                                <div class="card-body text-center d-card-color">
                                    <h2 class="card-title"><?php echo $student_count->count; ?></h2>
                                    <h4 class="card-text fs-5">Students</h4>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-4">
                            <div class="card shadow py-2 bg-transparent border-0">
                            <i class="card-img-top fa fa-list fa-3x text-center d-card-color"></i>
                                <div class="card-body text-center d-card-color">
                                    <h2 class="card-title"><?php echo $cat_count->count; ?></h2>
                                    <h4 class="card-text fs-5">Categories</h4>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-4">
                            <div class="card shadow py-2 bg-transparent border-0">
                            <i class="card-img-top fa fa-plus-circle fa-3x text-center d-card-color"></i>
                                <div class="card-body text-center d-card-color">
                                    <h2 class="card-title"><?php echo $pending_count->count; ?></h2>
                                    <h4 class="card-text fs-5">Pending Requests</h4>
                                </div>
                            </div>
                    </div>
                </div>
    </div>

    <!-- Latest Books Added -->
    <div class="container pb-1 mt-5 d-flex justify-content-between align-items-center">
        <p class="fa fa-bell fa-fade d-card-color fa-lg"></p>
        <h2 class="text-center">Latest Books</h2>
        <a href="<?php echo APP_URL?>/allbooks.php" class="btn btn-sm btn-outline-dark">View All</a>
    </div>
    <table class ="table table-light table-striped table-hover">
        <thead class="table-dark text-white">
            <tr>
                <th>s/n</th>
                <th>Book Image</th>
                <th>Book Title</th>
                <th>Author</th>
                <th>isbn</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php while($book = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td></td>
                <td class="fs-6"><?php echo $book['cover_img']; ?></td>
                <td class="fs-6"><?php echo $book["title"]; ?></td>
                <td class="fs-6"><?php echo $book['author']; ?></td>
                <td class="fs-6"><?php echo $book['isbn']; ?></td>
                <td class="fs-6"><a href="#" class="btn btn-sm btn-outline-dark mx-2">Edit</a>
                <a href="#" class="btn btn-sm btn-outline-danger">Delete</a></td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>

</div> 

    <!-- Footer -->
<?php include_once __DIR__.'/partials/footer.php'; ?>