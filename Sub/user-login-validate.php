<?php

require '_methods.php';
include 'Parts/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['userid'] = $_POST['userid'];
    $_SESSION['password'] = $_POST['password'];
    if (validateUser($_SESSION['userid'], $_SESSION['password'])) {
        $_SESSION['user_type'] = getUserTypeById($_SESSION['userid']);
        $_SESSION['name'] = getUserNameById($_SESSION['userid']);
        echo "<script type='text/javascript'>";
        echo "myAlertLoginS();";
        echo "toIndex();";
        echo "</script>";
    }
    else {
        echo "<script type='text/javascript'>myAlertLoginF();</script>";
    }
}

?>

<?php include 'Parts/footer.php'; ?>