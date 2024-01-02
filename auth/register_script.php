<?php
include_once __DIR__.'/../database/connection.php';

define('REQ_ERR', 'This field is required..');
define('PASS_MATCH', 'Passwords Do not Match..');
define('EMAIL_EXIST', 'Email Already Exist..');

$firstname = '';
$lastname = '';
$email = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $errors = [];

    $firstname = $_POST['fname']; 
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirmation = $_POST['confirm_pwd'];
    if($_SERVER['REQUEST_URI'] == '/LMS/auth/register.php'){
        $usertype = 'Student';
    }else{
        $usertype = 'Admin';
    }

    if(empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($password_confirmation)){

        if(!$firstname){
            $errors['fname'] = REQ_ERR;
        }
        if(!$lastname){
            $errors['lname'] = REQ_ERR;
        }
        if(!$email){
            $errors['email'] = REQ_ERR;
        }
        if(!$password){
            $errors['pwd'] = REQ_ERR;
        }
        if(!$password_confirmation){
            $errors['conf-pwd'] = REQ_ERR;
        }
    }else{

        // Unique email verification
        $query = "SELECT * FROM users WHERE email = '$email'";
        $results = mysqli_query($conn, $query);

        if(mysqli_num_rows($results) > 0){
            $errors["email"] = EMAIL_EXIST;
        }else{
            // Password confirmation
            if($password === $password_confirmation){

                // Hash password
                $pwd = password_hash($password, PASSWORD_DEFAULT);
        
                // sql query to store records to database
                $sql= "INSERT INTO users(first_name, last_name, email, password, user_type, status) VALUES('$firstname','$lastname','$email','$pwd','$usertype','1')";
                mysqli_query($conn, $sql);
        
                // Redirect to Login Page
                header('Location: login.php');
            }else{
                $errors['pwd'] = PASS_MATCH;
                $errors['conf-pwd'] = PASS_MATCH;
            }
        }   
    }    
}
