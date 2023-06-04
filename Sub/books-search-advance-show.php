<?php

require '_methods.php';
include 'Parts/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST)) {
        $books = searchAdvance($_POST);
    } 
}

?>

<?php include 'navbar.php'; ?>
<?php include 'user-status_bar.php'; ?>

<div class="container">
    <?php include 'books-searchbar.php'; ?>
    <h5 class="card-subtitle mb-2 text-muted">Advance Search</h5>
    <?php
        if (empty($books)) {
            echo "<script type='text/javascript'>myAlert();</script>";
        }

        include 'books-filterbar.php';
        include 'books-__table.php';
    ?>
</div>

<?php include 'Parts/footer.php'; ?>