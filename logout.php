<?php
session_start();
if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: index.php');
    exit;
}


// Redirect to the index page
header('Location: admin-add.php');
exit;
?>