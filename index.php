<?php
include 'parts/global-stylesheet.php';

include 'manager/db-connect.php';
$response = $pdo->query('SELECT * FROM joueurs;');
$resultat = $response->fetchAll();


?>

<html>

<head>
</head>

<body>
    <?php
    include 'header.php'
    ?>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
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
                    <th scope="row"><?php echo ($membre['id']); ?></th>
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