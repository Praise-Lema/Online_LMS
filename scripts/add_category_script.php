<?php 

include_once __DIR__.'/../database/connection.php';

define('REQ_ERR', 'This field is required..');

$name = '';
$desc = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST['name'];
    $desc = $_POST['category-desc'];
    $image = $_FILES['category-img']['name'];

    if(empty($name) || empty($desc) || empty($image)){
        echo 'Failed to Add Category';
    }else{
        $sql = "INSERT INTO categories(name, description, category_img) VALUES('$name', '$desc', '$image')";
        mysqli_query($conn, $sql);

        echo 'Category Added Succesfully';
    }
    // echo '<pre>';
    // var_dump($image);
    // echo '</pre>';
    // die;
}