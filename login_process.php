<?php
include "db_connect.php";

if ($connection->connect_error)
{
    die("Connection failed: ".$connection.connect_error);
}
session_start();
$error = "";

//Kollar om inputfälten är tomma
if (isset($_POST["submit"])) {
    if (empty($_POST["email_inlog"]) || empty($_POST["psw_inlog"])) {
    $error = "Fyll i email och lösenord korrekt!";
    }
    else
    {
        $user_email = $connection->real_escape_string($_POST["email_inlog"]);
        $user_psw = $connection->real_escape_string($_POST["psw_inlog"]);

        $query = "SELECT clientPassword FROM Clients WHERE clientEmail = '".$user_email."'";
        $id_query = "SELECT clientID FROM Clients WHERE clientEmail = '".$user_email."'";
        $get_password = $connection->query($query);
        $get_id = $connection->query($id_query);

        //Kollar om det finns något salt i variabeln = om den hittade rätt email
        if ($get_password->num_rows == 0)
            {
                $error = "Mailadressen verkar inte stämma!";

            }
            else{
                       
                //Hämtar lösenordet associerat med emailen från databasen
                while ($password = $get_password->fetch_assoc()){
                   
                    while ($client_ID = $get_id->fetch_assoc()){

                    //Jämför lösenordet med användarens input
                    if (($password["clientPassword"]) == $user_psw)
                    {

                        
                        //Initierar en session för användaren
                        $_SESSION["clientID"] =  $client_ID["clientID"];
                        header("Refresh: 0; URL=inloggad.php");
                    }

                    else {

                        $error = "Lösenordet verkar inte stämma";

                        }
                            
                }
            }
        
        }
    }
}
