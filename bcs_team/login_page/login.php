<?php
session_start();
$conn=mysqli_connect("localhost","root","","library");
if(!$conn){
    die("connection failed:".mysqli_connect_error());
}
$email=$_POST['email'];
$password=$_POST['password'];
$sql="SELECT * FROM user WHERE user_email='$email' AND user_password='$password'";
if(mysqli_num_rows(mysqli_query($conn,$sql))>0){
    //header('location:home.php');
}else{
    $result='wrong password or email';
}
?>
