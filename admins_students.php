<?php 
include_once __DIR__.'/partials/header.php';
include_once __DIR__.'/partials/functions.php';
check_logout();
include_once __DIR__.'/partials/sidebar.php';
?>

    <!-- Main bar -->
<div class="container main-bar p-3">
    <h2 class="text-center">Admins & Students..</h2>
    <div class="container pb-1 mt-5 d-flex justify-content-between align-items-center">
        <p class="fa fa-user-friends fa-lg"></p>
        <h2 class="text-center">Admins</h2>
        <a href="" data-bs-toggle="modal" data-bs-target="#adminModal" class="btn btn-sm btn-outline-dark">Add Admin</a>
    </div>
    <table class ="table table-light table-striped table-hover mb-5">
            <thead class="table-dark text-white">
                <tr>
                    <th>s/n</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($Admins as $i => $admin): ?>
                <tr>
                    <td><?php echo $i + 1; ?></td>
                    <td><?php echo $admin['firstName']; ?></td>
                    <td><?php echo $admin['lastName']; ?></td>
                    <td><?php echo $admin['email']; ?></td>
                    <td class="<?php if($admin['status'] == "active"){echo "text-success";} else{echo "text-danger";}?>"><?php echo $admin['status']; ?></td>
                    <td><a href="./Edits/editUser.php?user_id=<?php echo $admin['id'];?>" class="btn btn-outline-dark mx-2">Change Status</a><a href="deleteUser.php?id=<?php echo $admin['id'];?>" class="btn btn-outline-danger">Delete</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
    </table>

    <div class="container pb-1 mt-5 d-flex justify-content-between align-items-center">
        <p class="fa fa-users fa-lg"></p>
        <h2 class="text-center">Students</h2>
        <a href="" data-bs-toggle="modal" data-bs-target="#addModal" class="btn btn-sm btn-outline-dark">Add Student</a>
    </div>
    <table class ="table table-light table-striped table-hover">
        <thead class="table-dark text-white">
            <tr>
                <th>s/n</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Status</th>
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

    <!--Add student Modal -->
                    
    <div class="modal fade" tabindex="-1" aria-hidden="true" id="addModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header bg-secondary-subtle">
                    <h4 class="modal-title">Add Student</h4>
                    <a href="" class="text-dark nav-link fa fa-close fa-lg p-2" data-bs-dismiss="modal"></a>
                </div>

                <!-- Modal body -->
                <div class="modal-body bg-body-secondary">
                    <!-- <h5>Are you sure you want to delete? </h5> -->
                    <form action="./auth/addUser.php" method="post">
                        <div class="form-group m-2 fs-5">
                            <label for="firstName">First Name:</label>
                            <input type="text" name="fname" class="form-control bg-transparent rounded-0">
                        </div>

                        <div class="form-group m-2 fs-5">
                            <label for="LastName">Last Name:</label>
                            <input type="text" name="lname" class="form-control bg-transparent rounded-0">
                        </div>

                        <div class="form-group m-2 fs-5">
                            <label for="email">Email:</label>
                            <input type="email" name="email" class="form-control bg-transparent rounded-0">
                        </div>

                        <div class="form-group m-2 fs-5">
                            <label for="pwd">Password:</label>
                            <input type="password" name="pwd" class="form-control bg-transparent rounded-0">
                        </div>

                        <div class="form-group m-2 fs-5">
                            <label for="Status">Status:</label>
                            <select name="status" class="form-select w-100 border rounded focus-ring focus-ring-success">
                                <option value="active">active</option>
                                <option value="inactive">inactive</option>
                            </select>
                        </div>

                        <div class="form-group m-2">
                            <!-- <label for="Status">Status:</label> -->
                            <select name="UserType" class="w-100 p-2 border rounded focus-ring focus-ring-success" hidden>
                                <option value="User">User</option>
                            </select>
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

    <!--Add admin Modal -->
                    
    <div class="modal fade" tabindex="-1" aria-hidden="true" id="adminModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header bg-secondary-subtle">
                    <h4 class="modal-title">Add Admin</h4>
                    <a href="" class="text-dark nav-link fa fa-close fa-lg p-2" data-bs-dismiss="modal"></a>
                </div>

                <!-- Modal body -->
                <div class="modal-body bg-body-secondary">
                    <!-- <h5>Are you sure you want to delete? </h5> -->
                    <form action="./auth/addUser.php" method="post">
                        <div class="form-group m-2 fs-5">
                            <label for="firstName">First Name:</label>
                            <input type="text" name="fname" class="form-control bg-transparent rounded-0">
                        </div>

                        <div class="form-group m-2 fs-5">
                            <label for="LastName">Last Name:</label>
                            <input type="text" name="lname" class="form-control bg-transparent rounded-0">
                        </div>

                        <div class="form-group m-2 fs-5">
                            <label for="email">Email:</label>
                            <input type="email" name="email" class="form-control bg-transparent rounded-0">
                        </div>

                        <div class="form-group m-2 fs-5">
                            <label for="pwd">Password:</label>
                            <input type="password" name="pwd" class="form-control bg-transparent rounded-0">
                        </div>

                        <div class="form-group m-2 fs-5">
                            <label for="Status">Status:</label>
                            <select name="status" class="form-select w-100 border rounded focus-ring focus-ring-success">
                                <option value="active">active</option>
                                <option value="inactive">inactive</option>
                            </select>
                        </div>

                        <div class="form-group m-2 fs-5">
                            <!-- <label for="Status">Status:</label> -->
                            <select name="UserType" class="w-100 p-2 border rounded focus-ring focus-ring-success" hidden>
                                <option value="Admin">Admin</option>
                                <!-- <option value="User">User</option> -->
                            </select>
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

    <!-- Edit Modal -->
    <div class="modal fade" tabindex="-1" aria-hidden="true" id="editUser">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header bg-secondary-subtle">
                    <h4 class="modal-title">Edit User</h4>
                    <a href="" class="text-dark nav-link fa fa-close fa-lg p-2" data-bs-dismiss="modal"></a>
                </div>

                <!-- Modal body -->
                <div class="modal-body bg-body-secondary">
                    <h5>Change User status? </h5>
                    <?php foreach($Users as $i => $User): ?>
                    <form action="./Edits/editUser.php?user_id=<?php echo $User['id'];?>" method="post">
                    <?php endforeach; ?>
                        <div class="form-group m-4">
                            <label for="Status">Status:</label>
                            <select name="status" class="form-select w-100 p-2 border rounded focus-ring focus-ring-success">
                                <option value="active">active</option>
                                <option value="inactive">inactive</option>
                            </select>
                        </div>
                    </div>

                <!-- Modal footer -->
                <div class="modal-footer bg-secondary-subtle">
                    <input type="submit" value="Change" class="btn btn-success"> 
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>
                </div>
            </div>
    </div>
</div> 

    <!-- Footer -->
<?php include_once __DIR__.'/partials/footer.php'; ?>