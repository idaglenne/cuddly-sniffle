<?php
include "db_connect.php";

?>
<html>
    <head>
      <title>mood log</title>
      <link rel="stylesheet" href="./design.css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
      <link rel="icon" type="image/png" href="./doge3.png">
    </head>
    <body>

      <h1>mood log</h1>
        <h2>Logga ditt mående</h2>
          <h3>Fyll i dina uppgifter och registrera dig nu!</h3>

      <form class=register_form>
        <input type="text" class=register id=name_register placeholder="Namn">
        <br>
        <input type="text" class=register id=email_register placeholder="E-mail">
        <br>
        <input type="text" class=register id=newpsw_register placeholder="Nytt lösenord">
        <br>
        <input type="text" class=register id=confirmpsw_register placeholder="Bekräfta lösenord">
        <p>Har du redan ett konto? <a href="./index.html">Logga in här!</a></p>
        <br>
        <input type="submit" class="submit" value="Klar!">
      </form>

    </body>
</html>