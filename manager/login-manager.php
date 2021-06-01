<?php
session_start();
if (!isset($_SESSION) || !isset($_SESSION['username'])) {
    header('location: login.php');
}
if (empty($_POST['username']) && empty($_POST['password'])) {
    return header("Location: ../login.php?error=no-saisie");
}
if (empty($_POST['username'])) {
    return header("Location: ../login.php?error=no-username");
}
if (empty($_POST['password'])) {
    return header("Location: ../login.php?error=no-password");
} else {
    if ($_POST['username'] == 'ddchamps' && $_POST['password'] == 'ddchamps') {
        $_SESSION['username'] = $_POST['username'];

        header("Location: ../connect.php");
    } else {
        header("Location: ../login.php?error=bad");
    }
}
