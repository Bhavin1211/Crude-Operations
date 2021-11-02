<?php
    session_start();
    if(!isset($_SESSION["s_name"])) {
        header("Location: login.php");
        exit();
    }
?>