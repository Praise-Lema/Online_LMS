<?php 
include_once __DIR__.'/partials/header.php';
include_once __DIR__.'/partials/sidebar.php' ?>  

    <!-- Main bar -->
<div class="container main-bar p-3">
    <div class="container pb-1 mt-5 d-flex justify-content-between align-items-center">
        <p class="fa fa-user-friends fa-lg"></p>
        <h2 class="text-center">Categories</h2>
        <a href="" data-bs-toggle="modal" data-bs-target="#categoryModal" class="btn btn-sm btn-outline-dark fs-6">Add Category</a>
    </div>

    <table class ="table table-light table-striped table-hover mb-5">
        <thead class="table-dark text-white">
            <tr>
                <th>s/n</th>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($Admins as $i => $admin): ?>
            <tr>
                <td><?php echo $i + 1; ?></td>
                <td><?php echo $admin['firstName']; ?></td>
                <td class="<?php if($admin['status'] == "active"){echo "text-success";} else{echo "text-danger";}?>"><?php echo $admin['status']; ?></td>
                <td><a href="./Edits/editUser.php?user_id=<?php echo $admin['id'];?>" class="btn btn-outline-dark mx-2">Change Status</a><a href="deleteUser.php?id=<?php echo $admin['id'];?>" class="btn btn-outline-danger">Delete</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


    <!-- Add Category Modal Section -->
    <div class="modal fade" tabindex="-1" aria-hidden="true" id="categoryModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header bg-secondary-subtle">
                    <h4 class="modal-title">Add Category</h4>
                    <a href="" class="text-dark nav-link fa fa-close fa-lg p-2" data-bs-dismiss="modal"></a>
                </div>

                <!-- Modal body -->
                <div class="modal-body bg-body-secondary">
                    <form action="scripts/add_category_script.php" enctype="multipart/form-data" method="post">
                        <div class="form-group m-2 fs-5">
                            <label for="Name">Name:</label>
                            <input type="text" name="name" class="form-control bg-transparent rounded-0">
                        </div>

                        <div class="form-group m-2 pt-2 fs-5">
                            <textarea name="category-desc" class="form-control bg-secondary-subtle rounded-0" cols="20" rows="5" placeholder="Write Category Description Here.." style="border: none; border-bottom: 2px solid #4f4f50;"></textarea>
                        </div>

                        <div class="form-group m-2 pt-2 fs-5">
                            <label for="Image">Image</label>
                            <input type="file" name="category-img" class="form-control bg-transparent rounded-0">
                        </div>
                    </div>

                <!-- Modal footer -->
                <div class="modal-footer bg-secondary-subtle">
                    <input type="submit" value="Add" class="btn btn-success bg-gradient"> 
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>
                </div>
            </div>
    </div>
</div> 

    <!-- Footer -->
<?php include_once __DIR__.'/partials/footer.php'; ?>