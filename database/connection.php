<?php 

// Database connection variables
$username = "localhost";
$hostname = "root";
$password = "";
$dbname = "lms";

$conn = mysqli_connect($username, $hostname, $password, $dbname);
if(!$conn){
    die("connection failed:".mysqli_connect_error());
}
