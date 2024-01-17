<?php 

include_once __DIR__.'/../database/connection.php';

define('REQ_ERR', 'This field is required..');

$name = '';
$email = '';
$subject = '';
$description = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $description = $_POST['description'];

    if(empty($name) || empty($email) || empty($subject) || empty($description)){
        if(!$name){
            $errors['name'] = REQ_ERR;
        }
        if(!$email){
            $errors['email'] = REQ_ERR;
        }
        if(!$subject){
            $errors['subject'] = REQ_ERR;
        }
        if(!$description){
            $errors['description'] = REQ_ERR;
        }
    }else{
        $sql = "INSERT INTO enquiries(name, email, subject, description) VALUES('$name','$email','$subject','$description')";
        mysqli_query($conn, $sql);

        header('Location: response.php');
    }
}