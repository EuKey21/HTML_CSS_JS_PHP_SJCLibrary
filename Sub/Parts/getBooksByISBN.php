<?php

if ( !isset($_GET['ISBN']) ) {
    echo "<script type='text/javacript'>alert('Book Not Found')";
    exit;
}

$ISBN = $_GET['ISBN'];

$book = getBookByISBN($ISBN);
if ( !$book ) {
    echo "<script type='text/javacript'>alert('Book Not Found'); </script>";
    exit;
}

?>