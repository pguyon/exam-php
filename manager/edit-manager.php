<?php
session_start();
include 'db-connect.php';

if (!isset($_SESSION) || !isset($_SESSION['username'])) {
    header('location: login.php');
}
include 'db-connect.php';

if (empty($_POST['nom'])) {
    return header('location: ../edit-joueur.php?error=no-name&id=' . $_GET['id']);
}
if (empty($_POST['prenom'])) {
    return header('location: ../edit-joueur.php?error=no-firstname&id=' . $_GET['id']);
}
if (empty($_POST['age'])) {
    return header('location: ../edit-joueur.php?error=no-age&id=' . $_GET['id']);
}
if (empty($_POST['poste'])) {
    return header('location: ../edit-joueur.php?error=no-poste&id=' . $_GET['id']);
} else {
    try {
        $req  = $pdo->prepare('UPDATE joueurs SET nom = :nom, prenom = :prenom, 
        age = :age, poste = :poste WHERE id = :id');
        $req->execute([
            'nom' => $_POST['nom'],
            'prenom' => $_POST['prenom'],
            'age' => $_POST['age'],
            'poste' => $_POST['poste'],
            'id' => $_GET['id']

        ]);
        header('location: ../admin-gestion.php');
    } catch (\PDOException $e) {
        var_dump($e);
        die;
    }
}
