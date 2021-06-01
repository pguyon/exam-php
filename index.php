<?php
include 'parts/global-stylesheet.php';

include 'manager/db-connect.php';
$response = $pdo->query('SELECT * FROM joueurs ORDER BY poste;');
$resultat = $response->fetchAll();


?>

<html>

<head>
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php
    include 'header.php'
    ?>

    <table class="table table-striped table-dark text-center">
        <thead>
            <tr>

                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Age</th>
                <th scope="col">Poste</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($resultat as $membre) {
            ?>
                <tr>

                    <td><?php echo ($membre['nom']); ?></td>
                    <td><?php echo ($membre['prenom']); ?></td>
                    <td><?php echo ($membre['age'] . ' ans'); ?></td>
                    <td><?php echo ($membre['poste']); ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>


    <?php
    include 'parts/global-js.php'
    ?>
</body>

</html>