<?php
include "db_connect.php";
include "admin_login_process.php";

if (isset($_SESSION["adminID"])){

    header("Location: inloggad_admin.php");
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
      

      <h1>mood log</h1>

        <h2>admin inlogg</h2>

        <form class=inlog_form method=POST name="inlog_form">
        
        <!--<span><?php //echo"<p class='errorMessage'>" .$error."</p>" ;?></span>-->
      
        <input type="text" class="inlog" id="email_inlog" placeholder="Email" name="email_inlog">
        <br>
        <input type="password" class="inlog" id="psw_inlog" placeholder="Lösenord" name="psw_inlog">
        <br>
        <input type="submit" class="submit" value="Logga in" name="submit">
        </form>
      


    </body>
</html>
