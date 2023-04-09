<?php 
session_start();

if (isset($_POST['logout'])) {
    session_unset();
    if (session_destroy()) {
        header('location:../index.php');
        exit();
    }
}

?>