<nav class="navbar position-sticky top-0 z-1 navbar-expand-lg shadow" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo APP_URL?>"><span class="brand-text">Online</span> Library</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php echo ($_SERVER['REQUEST_URI'] == '/LMS/') ? 'active' : '' ?> fs-6" aria-current="page" href="<?php echo APP_URL?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($_SERVER['REQUEST_URI'] == '/LMS/index.php#categories') ? 'active' : '' ?> fs-6" href="<?php echo APP_URL?>/index.php#categories">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($_SERVER['REQUEST_URI'] == '/LMS/about_us.php') ? 'active' : '' ?> fs-6" href="<?php echo APP_URL?>/about_us.php">About Us</a>
        </li>
      </ul>

      <!-- Right side nav-group -->
      <ul class="navbar-nav">
        <?php if(isset($_SESSION['status'])): ?>
      <li class="nav-item dropdown dropdown">
          <a class="nav-link dropdown-toggle fs-6 d-flex align-items-center justify-content-center me-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="fa fa-user-circle fa-lg mx-2"></span><?php echo $_SESSION["firstname"] ?>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="<?php echo APP_URL?>/dashboard.php">Dashboard</a></li>
            <li><a class="dropdown-item" href="<?php echo APP_URL?>/profile.php">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="<?php echo APP_URL?>/auth/logout.php">Logout</a></li>
          </ul>
        </li>
        <?php else: ?>
        <li class="nav-item"><a class="nav-link fs-6" href="<?php echo APP_URL?>/auth/register.php"><span class="fa fa-edit me-2"></span>Register</a></li>
        <li class="nav-item"><a class="nav-link fs-6" href="<?php echo APP_URL ?>/auth/login.php"><span class="fa fa-sign-in me-2"></span>Login</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>