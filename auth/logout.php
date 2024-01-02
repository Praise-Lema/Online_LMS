<?php 

session_start();
session_unset();
session_destroy();

// Redirect to Login Page
header('Location: login.php');