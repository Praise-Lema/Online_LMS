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

    if(empty($title) || empty($author) || empty($isbn) || empty($category) || empty($book_file) || empty($cover_img)){
        echo 'Failed to add book';
    
        echo '<pre>';
        echo var_dump($_POST);
        echo '</pre>';
    }else{
        
        $sql = "INSERT INTO books(title, author, isbn, category, cover_img, book_file) VALUES('$title','$author','$isbn','$category','$cover_img','$book_file')";
    
        mysqli_query($conn, $sql);
    
        header('Location: allbooks.php');
    }
}

