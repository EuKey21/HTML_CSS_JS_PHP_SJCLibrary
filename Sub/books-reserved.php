<?php

require '_methods.php';
include 'Parts/header.php';

reserveBook($_GET['ISBN'], $_SESSION['userid']);

echo "<script type='text/javascript'>location.href = 'books-view.php?ISBN=".$_GET['ISBN']."'</script>";

?>

<?php include 'Parts/footer.php' ?>