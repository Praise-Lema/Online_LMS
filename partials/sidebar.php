<!-- Sidebar -->
    <aside class="sidebar z-1">
        <div class="container py-3 d-flex flex-column justify-content-center align-items-center gap-4">
            <!-- <p class="">Dashboard</p> -->
            <div class="user_profile d-flex flex-column gap-1 justify-content-center align-items-center">
                <img src="./image/lib9.jpg" class=" rounded-circle" width="80" height="80" alt="profile-picture">
                <span class="text-center fs-5"><?php echo $_SESSION['firstname'].' '. $_SESSION['lastname']; ?></span>
                <span class="badge text-bg-light rounded-pill fs-sm"><?php echo $_SESSION['user_type']; ?></span>
            </div>
            <div class="sidebar_items my-3">
                <ul class="list-group text-white">
                    <a href="<?php echo APP_URL?>/dashboard.php" class="list-group-item bg-transparent border-0 text-white fs-6 sidebar_item <?php echo $_SERVER['REQUEST_URI'] == '/LMS/dashboard.php' ? 'fw-bold': '' ?>"><span class="fa fa-chart-line me-3"></span>Dashboard</a>
                    <a href="<?php echo APP_URL?>/allbooks.php" class="list-group-item bg-transparent border-0 text-white fs-6 sidebar_item <?php echo $_SERVER['REQUEST_URI'] == '/LMS/allbooks.php' ? 'fw-bold': '' ?>"><span class="fa fa-book me-3"></span>View Books</a>
                    <?php if($_SESSION['user_type'] == 'Admin'): ?>
                    <a href="<?php echo APP_URL?>/admins_students.php" class="list-group-item bg-transparent border-0 text-white fs-6 sidebar_item <?php echo $_SERVER['REQUEST_URI'] == '/LMS/admins_students.php' ? 'fw-bold': '' ?>"><span class="fa fa-users-line me-3"></span>Admins & Students</a>
                    <a href="<?php echo APP_URL?>/addbook.php" class="list-group-item bg-transparent border-0 text-white fs-6 sidebar_item <?php echo $_SERVER['REQUEST_URI'] == '/LMS/addbook.php' ? 'fw-bold': '' ?>"><span class="fa fa-square-plus me-3"></span>Add Books</a>
                    <a href="<?php echo APP_URL?>/enquiries.php" class="list-group-item bg-transparent border-0 text-white fs-6 sidebar_item <?php echo $_SERVER['REQUEST_URI'] == '/LMS/enquiries.php' ? 'fw-bold': '' ?>"><span class="fa fa-question-circle me-3"></span>Enquiries</a>
                    <a href="<?php echo APP_URL?>/categories.php" class="list-group-item bg-transparent border-0 text-white fs-6 sidebar_item <?php echo $_SERVER['REQUEST_URI'] == '/LMS/categories.php' ? 'fw-bold': '' ?>"><span class="fa fa-list me-3"></span>Categories</a>
                    <?php endif; ?>
                    <a href="<?php echo APP_URL?>/mybooks.php" class="list-group-item bg-transparent border-0 text-white fs-6 sidebar_item <?php echo $_SERVER['REQUEST_URI'] == '/LMS/mybooks.php' ? 'fw-bold': '' ?>"><span class="fa fa-book-bookmark me-3"></span>My Books</a>
                    <a href="<?php echo APP_URL?>/profile.php" class="list-group-item bg-transparent border-0 text-white fs-6 sidebar_item <?php echo $_SERVER['REQUEST_URI'] == '/LMS/profile.php' ? 'fw-bold': '' ?>"><span class="fa fa-user me-3"></span>Profile</a>
                    <a href="<?php echo APP_URL?>/auth/logout.php" class="list-group-item bg-transparent border-0 text-white fs-6 sidebar_item"><span class="fa fa-sign-out me-3"></span>Logout</a>
                </ul>
            </div>
        </div>
    </aside>