<?php
include "db_connect.php";

if (isset($_POST["submit"])) {
    if (empty($_POST["reg_name"]) || empty($_POST["reg_email"]) || empty($_POST["reg_psw"]) || !filter_var($_POST["reg_email"], FILTER_VALIDATE_EMAIL)) {
    echo "Invalid input";
    }

    else{
        $error = "";
        $reg_name = $connection->real_escape_string($_POST["reg_name"]);
        $reg_email = $connection->real_escape_string($_POST["reg_email"]);
        $psw = $connection->real_escape_string($_POST["reg_psw"]);

        $checkemail_query = "SELECT clientEmail FROM Clients WHERE clientEmail = '".$reg_email."'";
        $existing_email = $connection->query($checkemail_query);

        if ($existing_email->num_rows == 0)
        {
            $query = "INSERT INTO Clients (clientName, clientEmail, clientPassword) VALUES ('".$reg_name."', '".$reg_email."', '".$psw."')";
            $connection->query($query);
            header("Refresh: 5; URL=register_success.php");

        }
        else 
        {
            $error = "This email adress is already registered.";
            header("Refresh: 5; URL=register.php");
        }

    }

}



?>