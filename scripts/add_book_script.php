<?php 

include_once __DIR__.'/../database/connection.php';

define('REQ_ERR', 'This field is required..');

$title = '';
$author = '';
$isbn = '';
$category = '';
$book_file = '';
$cover_img = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $title = $_POST['title'];
    $author = $_POST['author'];
    $isbn = $_POST['isbn'];
    $category = $_POST['category'];
    $book_file = $_FILES['book_file']['name'];
    $cover_img = $_FILES['cover_img']['name'];

    // echo '<pre>';
    // var_dump($_FILES);
    // echo '</pre>';
    // die;

    if(empty($title) || empty($author) || empty($isbn) || empty($category) || empty($book_file) || empty($cover_img)){

        if(!$title){
            $errors['title'] = REQ_ERR;
        }
        if(!$author){
            $errors['author'] = REQ_ERR;
        }
        if(!$isbn){
            $errors['isbn'] = REQ_ERR;
        }
        if(!$book_file){
            $errors['book_file'] = REQ_ERR;
        }
        if(!$cover_img){
            $errors['cover_img'] = REQ_ERR;
        }

    }else{
        
        // SQL Query to Add Book to the Database
        $sql = "INSERT INTO books(title, author, isbn, category, cover_img, book_file) VALUES('$title','$author','$isbn','$category','$cover_img','$book_file')";
    
        mysqli_query($conn, $sql);
    
        header("Location: addbook.php?msg=success");
    }
}