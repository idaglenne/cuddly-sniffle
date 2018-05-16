<?php
include "db_connect.php";

include ('register_process.php');

?>
<html>
    <head>
      <title>mood log</title>
      <link rel="stylesheet" href="./design.css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
      <link rel="icon" type="image/png" href="./doge3.png">
      <script src="./validation.js"></script>
    </head>
    <body>

      <h1>mood log</h1>
      <h2>Logga ditt mående</h2>
      <h3>Fyll i dina uppgifter och registrera dig nu!</h3>

      <form class="register_form" name="reg_form" method=POST onsubmit= return validateForm()>
        <input type="text" class=register id=name_register placeholder="Namn" name="reg_name">
        <br>
        <div class ="errormessage_reg" id="name_error"></div>
        <input type="text" class=register id=email_register placeholder="E-mail" name="reg_email">
        <br>
        <div class ="errormessage_reg" id="email_error"></div>
        <input type="password" class=register id=newpsw_register placeholder="Nytt lösenord" name="reg_psw">
        <br>
        <input type="password" class=register id=confirmpsw_register placeholder="Bekräfta lösenord" name="reg_confirmpsw">
        <div class ="errormessage_reg" id="psw_error"></div>

        <p>Har du redan ett konto? <a href="./index.php">Logga in här!</a></p>
        <br>
        <input type="submit" class="submit" value="Klar!" name="submit">
        <span><?php echo $error; ?></span>
      </form>

    </body>
</html>
