<?php
session_start();
include 'parts/global-stylesheet.php'
?>
<html>

<head>
</head>

<body>
    <?php
    if (!isset($_SESSION) || !isset($_SESSION['username'])) {
    ?>
        <nav class="navbar navbar-light bg-light">
            <div class="container text-center">
                <a class="navbar-brand" href="#">
                    <img src="images/banniere.jpg" alt="" width="200" height="40">
                    <p>Football Club Exam-php</p>
                </a>
            </div>
        </nav>

    <?php
    } else {
    ?>
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
    <?php
    }
    ?>


    <?php
    include 'parts/global-js.php'
    ?>
</body>

</html>