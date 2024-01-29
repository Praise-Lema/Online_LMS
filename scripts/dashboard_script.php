<?php 

// SQL Query to pull books from the database
$sql = "SELECT * FROM books LIMIT 5";
$result = mysqli_query($conn, $sql);

// SQL Query for Book Counts
$count_sql = "SELECT COUNT(*) AS count FROM books";
$book_result = mysqli_query($conn, $count_sql);
$book_count = mysqli_fetch_object($book_result);

// SQL Query for category Counts
$cat_sql = "SELECT COUNT(*) AS count FROM categories";
$cat_result = mysqli_query($conn, $cat_sql);
$cat_count = mysqli_fetch_object($cat_result);

// SQL Query for students Counts
$student_sql = "SELECT COUNT(*) AS count FROM users WHERE user_type = 'Student'";
$student_result = mysqli_query($conn, $student_sql);
$student_count = mysqli_fetch_object($student_result);

// SQL Query for admins Counts
$admin_sql = "SELECT COUNT(*) AS count FROM users WHERE user_type = 'Admin'";
$admin_result = mysqli_query($conn, $admin_sql);
$admin_count = mysqli_fetch_object($admin_result);

// SQL Query for Issued books Counts
$issued_sql = "SELECT COUNT(*) AS count FROM issuedbooks";
$issued_result = mysqli_query($conn, $issued_sql);
$issued_count = mysqli_fetch_object($issued_result);

// SQL Query for Pedning Request Counts
$pending_sql = "SELECT COUNT(*) AS count FROM issuedbooks WHERE status = 1";
$pending_result = mysqli_query($conn, $pending_sql);
$pending_count = mysqli_fetch_object($pending_result);