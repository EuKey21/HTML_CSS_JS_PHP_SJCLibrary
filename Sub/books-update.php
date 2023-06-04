<?php

require '_methods.php';
include 'Parts/header.php';
include 'Parts/getBooksByISBN.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ( !($_FILES['picture']['name'] == "") ) {
        uploadImage($_FILES['picture'], $ISBN);
    }
    updateBook($_POST, $ISBN);

    //return to view page if ISBN is not changed
    //return to index if ISBN is changed
    //if ($book['ISBN'] == $ISBN) {
        //echo "<script type='text/javascript'>location.href = 'books-view.php?ISBN'".$book['ISBN'].";</script>";
    //}
    //else {
        echo "<script type='text/javascript'>location.href = 'index.php';</script>";
    //}
}

?>

<?php include 'navbar.php'; ?>

<?php include 'user-status_bar.php'; ?>

<div class="container">
    <?php include 'books-__form.php'; ?>
</div>

<?php include 'Parts/footer.php'; ?>