<?php
include "db_connect.php";
include "login_process.php";

?>

<html>
    <head>
    <title>mood log</title>
    <link rel="stylesheet" href="./design.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="icon" type="image/png" href="./molll_icon.png">
    </head>
    <body>
      <div class="omOss">
<p><a href="./OmOss.php" target="_blank">Här</a> kan du läsa om oss!</p>
      </div>
      <div class="header">
      <h1>mood log</h1>
    </div>
        <h2>Logga ditt mående</h2>

        <form class=inlog_form method=POST>

        <input type="text" class="inlog" id="email_inlog" placeholder="Email">
        <br>
        <input type="password" class="inlog" id="psw_inlog" placeholder="Lösenord">
        <p>Ny på mood log? <a href="./register.php">Registrera dig här!</a></p>
        <br>

        <input type="submit" class="submit" value="Klar!" name="submit">
        </form>


    </body>
</html>
