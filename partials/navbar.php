<nav class="navbar position-sticky top-0 z-1 navbar-expand-lg shadow" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LMS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active fs-6" aria-current="page" href="<?php echo APP_URL?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6" href="<?php echo APP_URL?>/index.php#categories">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6" href="<?php echo APP_URL?>/about_us.php">About Us</a>
        </li>
      </ul>

      <!-- Right side nav-group -->
      <ul class="navbar-nav">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle fs-6" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Username
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link fs-6" href="<?php echo APP_URL?>/auth/register.php">Register</a></li>
        <li class="nav-item"><a class="nav-link fs-6" href="<?php echo APP_URL ?>/auth/login.php">Login</a></li>
      </ul>
    </div>
  </div>
</nav>