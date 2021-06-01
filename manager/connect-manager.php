<?php
session_start();
include 'db-connect.php';
$req = $pdo->query('SELECT id FROM joueurs');
$count = $req->rowCount();

if ($count > 23) {
    return header('location: ../connect.php?error=too-many');
}


if (!isset($_SESSION) || !isset($_SESSION['username'])) {
    header('location: login.php');
}

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
    $req = $pdo->prepare('INSERT INTO joueurs (nom, prenom, age, poste)
VALUES(:nom, :prenom, :age, :poste)');

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
