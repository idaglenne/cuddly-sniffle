<?php
include "db_connect.php";

$reg_error = "";

if (isset($_POST["submit"])) {
    if (empty($_POST["reg_name"]) || empty($_POST["reg_email"]) || empty($_POST["reg_psw"]) || empty($_POST["userAgree"]) || !filter_var($_POST["reg_email"], FILTER_VALIDATE_EMAIL)) {
    $reg_error = "Du måste fylla i alla fält och godkänna användarvillkoren!";

    }

    else{
        
        $reg_name = $connection->real_escape_string($_POST["reg_name"]);
        $reg_email = $connection->real_escape_string($_POST["reg_email"]);
        $psw = $connection->real_escape_string($_POST["reg_psw"]);

        $checkemail_query = "SELECT clientEmail FROM Clients WHERE clientEmail = '".$reg_email."'";
        $existing_email = $connection->query($checkemail_query);

        if ($existing_email->num_rows == 0)
        {
            $query = "INSERT INTO Clients (clientName, clientEmail, clientPassword) VALUES ('".$reg_name."', '".$reg_email."', '".$psw."')";
            $connection->query($query);
            header("Location: reg_success.php");

        }
        else 
        {
            $reg_error = "This email adress is already registered.";
          
        }

    }

}



?>