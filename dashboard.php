<?php
include_once __DIR__.'/partials/header.php';
include_once __DIR__.'/partials/functions.php';
check_logout();

include_once __DIR__.'/partials/sidebar.php';

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
                                <h2 class="card-title"><?php echo $book->count;?>10</h2>
                                <h4 class="card-text fs-5">Books Available</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow py-2 bg-transparent border-0">
                        <i class="card-img-top fa fa-recycle fa-3x text-center d-card-color"></i>
                            <div class="card-body text-center d-card-color">
                                <h2 class="card-title"><?php echo $issuedbook->count;?>0</h2>
                                <h4 class="card-text fs-5">Issued Books</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow py-2 bg-transparent border-0">
                        <i class="card-img-top fa fa-user-friends fa-3x text-center d-card-color"></i>
                            <div class="card-body text-center d-card-color">
                                <h2 class="card-title"><?php echo $admins->count; ?>0</h2>
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
                                    <h2 class="card-title"><?php echo $student->count;?>0</h2>
                                    <h4 class="card-text fs-5">Students</h4>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-4">
                            <div class="card shadow py-2 bg-transparent border-0">
                            <i class="card-img-top fa fa-list fa-3x text-center d-card-color"></i>
                                <div class="card-body text-center d-card-color">
                                    <h2 class="card-title"><?php echo $category->count;?>0</h2>
                                    <h4 class="card-text fs-5">Categories</h4>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-4">
                            <div class="card shadow py-2 bg-transparent border-0">
                            <i class="card-img-top fa fa-plus-circle fa-3x text-center d-card-color"></i>
                                <div class="card-body text-center d-card-color">
                                    <h2 class="card-title"><?php echo $pendingbook->count; ?>0</h2>
                                    <h4 class="card-text fs-5">Pending Requests</h4>
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

    <!-- Latest Books Added -->
    <div class="container pb-1 mt-5 d-flex justify-content-between align-items-center">
        <p class="fa fa-book d-card-color fa-lg"></p>
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
            <?php foreach($students as $i => $student): ?>
            <tr>
                <td><?php echo $i + 1; ?></td>
                <td><?php echo $student['firstName']; ?></td>
                <td><?php echo $student['lastName']; ?></td>
                <td><?php echo $student['email']; ?></td>
                <td class="<?php if($student['status'] == "active"){echo "text-success";} else{echo "text-danger";}?>"><?php echo $student['status']; ?></td>
                <td><a href="./Edits/editUser.php?user_id=<?php echo $student['id'];?>" class="btn btn-outline-dark mx-2">Change Status</a><a href="deleteUser.php?id=<?php echo $student['id'];?>" class="btn btn-outline-danger">Delete</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div> 

    <!-- Footer -->
<?php include_once __DIR__.'/partials/footer.php'; ?>