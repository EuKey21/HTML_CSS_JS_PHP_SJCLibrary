<?php

require '_methods.php';
include 'Parts/header.php';

$book = [
    "ISBN" => "",
    "title" => "",
    "author" => "",
    "genre" => "",
    "publisher" => "",
    "publish_year" => "",
    "reserved" => "",
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ( !($_FILES['picture']['name'] == "") ) {
        uploadImage($_FILES['picture'], $_POST['ISBN']);
    }
    $book = addBook($_POST);
    echo "<script type='text/javascript'>location.href = 'index.php';</script>";
}

?>

<?php include 'navbar.php'; ?>
<?php include 'user-status_bar.php'; ?>

<div class="container">
    <?php include 'books-__form.php'; ?>
</div>


<?php include 'Parts/footer.php'; ?>