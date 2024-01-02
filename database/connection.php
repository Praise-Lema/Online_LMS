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

// $conn = new PDO("mysql=dbname:lms;port:3306;;","root","");

// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $conn->setAttribute