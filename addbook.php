<?php 
include_once __DIR__.'/partials/header.php';
include_once __DIR__.'/partials/functions.php';
check_logout();
include_once __DIR__.'/partials/sidebar.php';
?> 

    <!-- Main bar -->
<div class="container main-bar p-3 position-relative top-0 my-2">

    <div class="container p-5 bg-body-secondary rounded">
    <h2 class="text-center">Add Book..</h2>

        <div class="container">
            <form action="addbook_script.php" method="post" class="forms" enctype="multipart/form-data">
            <?php if(isset($_GET['error'])): ?>
            <div class="<?php echo $_GET['msg_class'];?> m-3 p-2"><?php echo $_GET['error']; ?></div>
            <?php endif; ?>

                <div class="form-group m-3">
                    <label for="title" class="py-1">Book Title:</label>
                    <input type="text" name="title" class="form-control rounded-0 bg-transparent focus-ring focus-ring-success">
                </div>
                <div class="form-group m-3">
                    <label for="author" class="py-1">Book Author:</label>
                    <input type="text" name="author" class="form-control rounded-0 bg-transparent focus-ring focus-ring-success">
                </div>
                <div class="form-group m-3">
                    <label for="isbn" class="py-1">Book isbn:</label>
                    <input type="text" name="isbn" class="form-control rounded-0 bg-transparent focus-ring focus-ring-success" maxlength="6">
                </div>
                <div class="form-group m-3">
                    <label for="category" class="py-1">Book Category:</label>
                    <select name="category" class="form-select p-2 border rounded focus-ring focus-ring-success bg-light" id="category">
                        <!-- <?php foreach($cats as $cat): ?>
                        <option value="<?php echo $cat->name;?>"><?php echo $cat->name;?></option>
                        <?php endforeach; ?> -->
                        <option value="Science">Science</option>
                    </select>
                </div>
                <div class="row">
                    <div class="form-group col-6 m-3">
                        <label for="book_file" class="py-1">Book File:</label>
                        <input type="file" name="file" class="form-control focus-ring focus-ring-success">
                    </div>

                    <div class="form-group col-5 m-3">
                        <label for="cover_img" class="py-1">Cover Image:</label>
                        <input type="file" name="cover_img" class="form-control focus-ring focus-ring-success">
                    </div>
                </div>

                <div class="form-group m-4">
                    <input type="submit" value="Add Book" class="btn btn-dark btn-block form-control">
                </div>
            </form>
        </div>
    </div>
</div> 

    <!-- Footer -->
<?php include_once __DIR__.'/partials/footer.php'; ?>