<?php
session_start();
if (!isset($_SESSION) || !isset($_SESSION['username'])) {
    header('location: login.php');
}
include 'db-connect.php';
