<?php 

function check_logout(){
    if(!isset($_SESSION["email"])){
        header('Location:'.APP_URL.'/auth/login.php');
    }
}

function check_login(){
    if(isset($_SESSION["email"])){
        header('Location:'.APP_URL.'/dashboard.php');
    }
}