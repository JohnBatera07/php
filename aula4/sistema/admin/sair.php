<?php

session_start();

if (isset($_SESSION['logar'])) {
    session_destroy();
    //unset( $_SESSION['logar']);
    header("Location: ../index.php");
} else {
    session_start();
    header("Location: ../index.php");
}
