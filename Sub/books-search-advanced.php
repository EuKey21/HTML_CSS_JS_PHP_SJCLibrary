<?php

require '_methods.php';
include 'Parts/header.php';

?>

<?php include 'navbar.php'; ?>
<?php include 'user-status_bar.php'; ?>


<div class="container">
<?php include 'books-searchbar.php'; ?>

    <div class="card my-transparent-table my-card my-center">
        <div class="card-header bg-light">
            <h3 class="card-title my-center-txt"><b>Advance Search</b></h3>
            <h6 class="card-subtitle mb-2 text-muted">Enter Exact Words</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="books-search-advance-show.php">
                <div class="form-group">
                    <label>ISBN</label>
                    <input name="ISBN" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Title</label>
                    <input name="title" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Author</label>
                    <input name="author" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Genre</label>
                    <input name="genre" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Publisher</label>
                    <input name="publisher" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Publish Year</label>
                    <input name="publish_year" type="text" class="form-control">
                </div>
                <div class="my-btn-padding">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'Parts/footer.php'; ?>