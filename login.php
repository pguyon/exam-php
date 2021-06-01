<?php
session_start();
?>
<html>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="css/login.css" rel="stylesheet">
</head>

<div class="wrapper fadeInDown">
    <div id="formContent">
        <div class="fadeIn first">
            <img src="images/banniere.jpg" id="icon" alt="User Icon" />
            <h1>Football Club Exam-php</h1>
        </div>
        <form action="manager/login-manager.php" method="post">
            <input type="text" id="username" class="fadeIn second" name="username" placeholder="username">
            <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
            <input type="submit" class="fadeIn fourth" value="Log In">
        </form>
        <div class="form-group error">
            <?php
            if (isset($_GET['error'])) {
                switch ($_GET['error']) {
                    case 'no-saisie':
                        echo 'Vous n\'avez rien saisi';
                        break;
                    case 'no-username':
                        echo 'Veuillez saisir votre nom d\'utilisateur';
                        break;
                    case 'no-password':
                        echo 'Veuillez saisir votre mot de passe';
                        break;
                    case 'bad':
                        echo 'Mauvais identifiants';
                        break;
                    default: {
                            echo 'Erreur inconnue';
                            break;
                        }
                }
            }
            ?>

        </div>
        <div id="formFooter">
            <a class="underlineHover" href="index.php">Go to the Site</a>
        </div>

    </div>
</div>

</html>