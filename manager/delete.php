<?php
session_start();
require 'db-connect.php';


$req = $pdo->prepare("DELETE FROM joueurs WHERE id = :id");
$req->execute(['id' => $_GET['id']]);


header('Location: ../admin-gestion.php');
