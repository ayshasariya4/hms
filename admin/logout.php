<?php
    session_start();
    unset($_SESSION['id']);
    session_destroy();
    header('Location:../admin/home2.php');
?>