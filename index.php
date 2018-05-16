<?php
include "db_connect.php";
include "login_process.php";

if (isset($_SESSION["clientName"])){

    header("location: inloggad.php");
}
?>

<html>
    <head>
    <title>mood log</title>
    <link rel="stylesheet" href="./design.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="icon" type="image/png" href="./cloud.png">
    </head>
    <body>
      <div class="omOss">
    <p><a href="./OmOss.php" target="_blank">Här</a> kan du läsa om oss!</p>
      </div>
      <div class="header">
      <h1>mood log</h1>
    </div>
        <h2>Logga ditt mående</h2>

        <form class=inlog_form method=POST name="inlog_form">

        <input type="text" class="inlog" id="email_inlog" placeholder="Email" name="email_inlog">
        <br>
        <input type="password" class="inlog" id="psw_inlog" placeholder="Lösenord" name="psw_inlog">
        <p>Ny på mood log? <a href="./register.php">Registrera dig här!</a></p>
        <br>

        <input type="submit" class="submit" value="Logga in" name="submit">
        </form>


    </body>
</html>
