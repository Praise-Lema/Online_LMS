<?php
$conn=mysqli_connect("localhost","root","","lms");
if(!$conn){
    die("connection failed:".mysqli_connect_error());
}
$email=$_POST['email'];
$password=$_POST['password'];
$firstname=$_POST['fname']; 
$lastname=$_POST['lname'];
$dropdown=$_POST['usertype'];
$sql="INSERT INTO user(first_name,last_name,email,pin,typeofuser)VALUES('$firstname','$lastname','$email','$password','$dropdown')";
if(mysqli_query($conn,$sql)){
    //header('location:home.html');
    echo "data is submitted successfuly...!";
}else{
    // mysqli_close($conn);
    echo "nothing to submit...!!";
}
?>