<?php

require '_methods.php';
include 'Parts/header.php';

$books = getBooks();

//echo $_SESSION['userid']."<br>".$_SESSION['password'].
    //"<br>".$_SESSION['user_type']."<br>".$_SESSION['name'];

?>
<?php include 'navbar.php'; ?>

<?php include 'user-status_bar.php'; ?>

<div class="container" style="clear:both;">

    <?php  
        include 'books-searchbar.php';
        include 'books-filterbar.php';
        include 'books-__table.php';

        echo "<br><br><br>";

        if (isset($_SESSION['userid'])):
            if ($_SESSION['user_type']):
                echo '<p style="padding: 10px; display:inline-block;">';
                echo '<a class="btn btn-primary" href="books-reserved-show.php">My Rental <i class ="fa fa-book" ></i></a>';
                echo '</p>';
            endif;
            
            if ($_SESSION['user_type'] == 'admin'):
                echo '<p style="padding: 10px; display:inline-block;">';
                echo '<a class="btn btn-success" href="books-add.php">Add New Book <i class ="fa fa-plus" ></i></a>';
                echo '</p>';
            endif;
        endif;
    ?>
</div>

<?php include 'Parts/footer.php'; ?>