<?php
session_start();
if (!isset($_SESSION) || !isset($_SESSION['username'])) {
    header('location: login.php');
}
include 'db-connect.php';

if (empty($_POST['nom'])) {
    return header('location: ../connect.php?error=no-name');
}
if (empty($_POST['prenom'])) {
    return header('location: ../connect.php?error=no-firstname');
}
if (empty($_POST['age'])) {
    return header('location: ../connect.php?error=no-age');
}
if (empty($_POST['poste'])) {
    return header('location: ../connect.php?error=no-poste');
}


try {
    $req = $pdo->prepare('INSERT INTO joueur (nom, prenom, age, poste)
VALUES(:login, :nom, :prenom, :password)');

    $req->execute([
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'age' => $_POST['age'],
        'poste' => $_POST['poste'],

    ]);
    header('location: ../connect.php');
} catch (PDOException $e) {
    if ($e->getCode() == 23000) {
        header('location: ../connect.php?error=already-exist');
    }
}
