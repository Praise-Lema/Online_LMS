<?php
include_once __DIR__.'/../database/connection.php';

define('REQ_ERR', 'This Field is Required..');
define('LOGIN_ERR', 'Wrong Email or Password..');

$email = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $errors = [];
    $email= $_POST['email'];
    $password= $_POST['password'];

    if(empty($email) || empty($password)){
        if(empty($email)){
            $errors['email'] = REQ_ERR;
        }
        if(empty($password)){
            $errors['password'] = REQ_ERR;
        }
    }else{
        $sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1;";

        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row['password'])){
                // Set session values
                $_SESSION['firstname'] = $row['first_name'];
                $_SESSION['lastname'] = $row['last_name'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['status'] = '1';
                $_SESSION['user_type'] = $row['user_type'];

                // Redirect to Dashboard
                header('location:'.APP_URL.'/dashboard.php');
            }else{
                $errors['email'] = LOGIN_ERR;
            }
        }else{
            $errors['email'] = LOGIN_ERR;
            // $result='wrong password or email';
        }
    } 
}