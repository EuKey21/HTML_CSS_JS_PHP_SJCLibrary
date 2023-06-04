<?php
require '_methods.php';
include 'Parts/header.php';

$search = $_POST['search'];
$books = searchBooks($search);

?>
<?php include 'navbar.php'; ?>

<?php include 'user-status_bar.php'; ?>
<div class='container' style="clear:both;">
<?php include 'books-searchbar.php'; ?>
    <h5 class="card-subtitle mb-2 text-muted">Search</h5>
    <?php
        if (empty($books)) {
            echo "<script type='text/javascript'>myAlert();</script>";
        }
        
        include 'books-filterbar.php';
        include 'books-__table.php';    

        echo "<br><br><br>";

        if (isset($_SESSION['userid'])):
            if ($_SESSION['user_type']):
                echo '<p style="padding: 10px; display:inline-block;">';
                echo '<a class="btn btn-primary" href="books-reserved-show.php">My Rental</a>';
                echo '</p>';
            endif;
            
            if ($_SESSION['user_type'] == 'admin'):
                echo '<p style="padding: 10px; display:inline-block;">';
                echo '<a class="btn btn-success" href="books-add.php">Add New Book</a>';
                echo '</p>';
            endif;
        endif;
    ?>
</div>

<?php include 'Parts/footer.php'; ?>