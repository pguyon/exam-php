<?php
session_start();
include 'parts/global-stylesheet.php';
if (!isset($_SESSION) || !isset($_SESSION['username'])) {
    header('location: login.php');
}
include 'manager/db-connect.php';

?>
<html>

<head>
    <link href="css/connect.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="connect.php">Ajouter des joueurs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="admin-gestion.php">Gérer les joueurs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="disconnect.php">Se déconnecter</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row col-3 mt-5 offset-4">
            <h3 style="text-align: center;">Ajouter un joueur</h3>
            <form method="post" action="manager/connect-manager.php">
                <div class="mb-6">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" name="nom" placeholder="Nom du joueur">
                </div>
                <div class="mb-6 mt-2">
                    <label for="prenom" class="form-label">Prenom</label>
                    <input type="text" class="form-control" name="prenom" placeholder="Préom du joueur">
                </div>
                <div class="mb-6 mt-2">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" min="15" class="form-control" name="age" placeholder="Age du joueur">
                </div>
                <select class="form-select mt-3" aria-label="Default select example" name="poste">
                    <option selected>Poste</option>
                    <option>Gardien</option>
                    <option>Défenseur</option>
                    <option>Milieu</option>
                    <option>Attaquant</option>
                    <option>Sélectionneur</option>
                </select>

                <div class="form-group error">
                    <?php
                    if (isset($_GET['error'])) {
                        switch ($_GET['error']) {
                            case 'no-name':
                                echo 'Veuillez saisir le nom du joueur';
                                break;
                            case 'no-firstname':
                                echo 'Veuillez saisir le prénom du joueur';
                                break;
                            case 'no-age':
                                echo 'Veuillez saisir l\'âge du joueur';
                                break;
                            case 'no-poste':
                                echo 'Choississez un poste';
                                break;
                            default: {
                                    echo 'Erreur inconnue';
                                    break;
                                }
                        }
                    }
                    ?>

                </div>
                <button type="submit" class="btn btn-secondary mt-3">Ajoutez</button>
                <div class="error text-center">
                    <?php

                    ?>
                </div>
            </form>
        </div>
    </div>


</body>

</html>