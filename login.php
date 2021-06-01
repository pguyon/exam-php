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
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
            <img src="images/banniere.jpg" id="icon" alt="User Icon" />
            <h1>Football Club Exam-php</h1>
        </div>

        <!-- Login Form -->
        <form>
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="username">
            <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
            <input type="submit" class="fadeIn fourth" value="Log In">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover" href="#">Go to the Site</a>
        </div>

    </div>
</div>

</html>