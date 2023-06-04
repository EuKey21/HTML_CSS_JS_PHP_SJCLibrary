<?php

require '_methods.php';
include 'Parts/header.php';

returnBook($_GET['ISBN'], $_SESSION['userid']);

if ($_GET['loc'] == 1)  {
    echo "<script type='text/javascript'>location.href = 'books-view.php?ISBN=".$_GET['ISBN']."'</script>";
}
else if ($_GET['loc'] == 2) {
    echo "<script type='text/javascript'>location.href = 'books-reserved-show.php'</script>";
}



?>

<?php include 'Parts/footer.php' ?>