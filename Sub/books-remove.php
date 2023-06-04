<?php

require '_methods.php';
include 'Parts/header.php';
include 'Parts/getBooksByISBN.php';

removeBook($ISBN);
echo "<script type='text/javascript'>toIndex();</script>";

?>