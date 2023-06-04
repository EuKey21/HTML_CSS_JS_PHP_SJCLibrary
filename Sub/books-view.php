<?php

require '_methods.php';
include 'Parts/header.php';
include 'Parts/getBooksByISBN.php';

?>
<?php include 'navbar.php'; ?>

<?php include 'user-status_bar.php'; ?>


<div class="container">
    <?php include 'books-searchbar.php'; ?>
    <?php include 'books-__card.php' ?>
    
    <div class="card my-card my-center my-transparent-table ">
        <div class="card-body">
            <?php  if (isset($_SESSION['user_type'])): ?>
                <?php  if ($_SESSION['user_type']): ?>
                    <?php if ($book['reserved'] == ""): ?>
                        <a href="books-reserved.php?ISBN=<?php echo $book['ISBN']?>" class="btn btn-info">Reserve <i class ="fa fa-bookmark-o" ></i></a>
                    <?php elseif ($book['reserved'] == $_SESSION['userid']): ?>
                        <a href="books-reserved-return.php?ISBN=<?php echo $book['ISBN']?>&loc=1" class="btn btn-info">Return <i class ="fa fa-caret-square-o-left" ></i></a>
                    <?php else: ?>
                        <p class="btn btn-info">Unavailable</p>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        <div class="card-body">
            <?php  if (isset($_SESSION['user_type'])): ?>
                <?php  if ($_SESSION['user_type'] == 'admin'): ?>
                    <a href="books-update.php?ISBN=<?php echo $book['ISBN']?>" class="btn btn-secondary">
                        <?php echo 'Update '?><i class ="fa fa-edit" ></i></a>
                    <a href="books-remove.php?ISBN=<?php echo $book['ISBN']?>" class="btn btn-danger" 
                        onclick="return confirm('Do you want to remove this book?');"><?php echo 'Remove '?><i class ="fa fa-trash-o" ></i></a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php include 'Parts/footer.php'; ?>
