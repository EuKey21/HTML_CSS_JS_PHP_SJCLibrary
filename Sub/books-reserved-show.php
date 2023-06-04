<?php

require '_methods.php';
include 'Parts/header.php';

$books = getMyReservedBooks($_SESSION['userid']);

?>

<?php include 'navbar.php'; ?>

<?php include 'user-status_bar.php'; ?>

<div class="container">

    <?php include 'books-searchbar.php'; ?>
    
    <h5 class="card-subtitle mb-2 text-muted">My Rental</h5>
    <div style="float:left; width:90%; position:relative;">
    
        <?php include 'books-__table.php'; ?>
    </div>
    <div style="float:left; width:10%; position:relative;">
        <table class="table table-bordered table-hover my-transparent-table">
            <thead><tr class="my-row-height"><th>Action</th></tr></thead>
            <tbody>
                <?php foreach ($books as $book): ?>
                    <tr class="my-row-height"><td>
                        <a href="books-reserved-return.php?ISBN=<?php echo $book['ISBN']?>&loc=2"
                            class="btn btn-sm btn-info">Return <i class ="fa fa-caret-square-o-left" ></i></a>
                    </td></tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'Parts/footer.php'; ?>