<?php 

// Students
$student_sql = "SELECT * FROM users WHERE user_type = 'Student'";
$student_result = mysqli_query($conn, $student_sql);

// Admins
$admin_sql = "SELECT * FROM users WHERE user_type = 'Admin'";
$admin_result = mysqli_query($conn, $admin_sql);
