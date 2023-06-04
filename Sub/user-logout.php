<?php

require '_methods.php';
include 'Parts/header.php';

session_unset();
session_destroy();

echo "<script type='text/javascript'>toIndex();</script>"; //takes the user to back to the home page

?>

<?php include 'Parts/footer.php'; ?>