<?php 
include_once __DIR__.'/partials/header.php';
include_once __DIR__.'/partials/functions.php';
check_logout();
include_once __DIR__.'/partials/sidebar.php';
?> 

    <!-- Main bar -->
<div class="container main-bar p-3 position-relative top-0 my-2">

<?php include_once __DIR__.'/scripts/add_book_script.php'; ?>

    <div class="container p-5 bg-body-secondary rounded">
    <h2 class="text-center">Add Book..</h2>

    <?php if(isset($_GET['msg'])): ?>
        <div class="alert alert-success m-3 p-2">Book Added Succesfully..</div>
    <?php endif; ?>

        <div class="container">
            <form action="addbook.php" method="post" class="forms" enctype="multipart/form-data">

                <div class="form-group m-3 fs-5">
                    <label for="title" class="py-1">Book Title:</label>
                    <input type="text" name="title" value="<?php echo $title ?>" class="form-control rounded-0 <?php echo isset($errors['title']) ? 'is-invalid' : ''?> bg-transparent focus-ring focus-ring-success">
                    <span class="invalid-feedback"><?php echo $errors['title']?></span>
                </div>

                <div class="form-group m-3 fs-5">
                    <label for="author" class="py-1">Book Author:</label>
                    <input type="text" name="author" value="<?php echo $author ?>" class="form-control rounded-0 <?php echo isset($errors['author']) ? 'is-invalid' : ''?> bg-transparent focus-ring focus-ring-success">
                    <span class="invalid-feedback"><?php echo $errors['author']?></span>
                </div>

                <div class="form-group m-3 fs-5">
                    <label for="isbn" class="py-1">Book isbn:</label>
                    <input type="text" name="isbn" value="<?php echo $isbn ?>" class="form-control rounded-0 <?php echo isset($errors['isbn']) ? 'is-invalid' : ''?> bg-transparent focus-ring focus-ring-success" maxlength="6">
                    <span class="invalid-feedback"><?php echo $errors['isbn']?></span>
                </div>

                <div class="form-group m-3 fs-5">
                    <label for="category" class="py-1">Book Category:</label>
                    <select name="category" class="form-select p-2 border rounded focus-ring focus-ring-success bg-light" id="category">
                        <option value="Science">Science</option>
                        <option value="Science">Arts & Design</option>
                        <option value="Science">Philosophy</option>
                    </select>

                </div>
                <div class="row">
                    <div class="form-group col-6 m-3 fs-5">
                        <label for="book_file" class="py-1">Book File:</label>
                        <input type="file" name="book_file" class="form-control <?php echo isset($errors['book_file']) ? 'is-invalid' : ''?> focus-ring focus-ring-success">
                        <span class="invalid-feedback"><?php echo $errors['book_file']?></span>

                    </div>

                    <div class="form-group col-5 m-3 fs-5">
                        <label for="cover_img" class="py-1">Cover Image:</label>
                        <input type="file" name="cover_img" class="form-control <?php echo isset($errors['cover_img']) ? 'is-invalid' : ''?> focus-ring focus-ring-success">
                        <span class="invalid-feedback"><?php echo $errors['cover_img']?></span>

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