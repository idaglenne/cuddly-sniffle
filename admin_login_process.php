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
        $admin_email = $connection->real_escape_string($_POST["email_inlog"]);
        $admin_psw = $connection->real_escape_string($_POST["psw_inlog"]);

        $query = "SELECT adminPsw FROM Admin WHERE adminEmail = '".$admin_email."'";
        $id_query = "SELECT adminID FROM Admin WHERE adminEmail = '".$admin_email."'";
        $get_password = $connection->query($query);
        $get_id = $connection->query($id_query);

        //Kollar om det finns något salt i variabeln = om den hittade rätt email
        if ($get_password->num_rows == 0)
            {
                $error = "Input verkar inte stämma!";

            }
            else{
                       
                //Hämtar lösenordet associerat med emailen från databasen
                while ($password = $get_password->fetch_assoc()){
                   
                    while ($admin_ID = $get_id->fetch_assoc()){

                    //Jämför lösenordet med användarens input
                    if (($password["adminPsw"]) == $admin_psw)
                    {

                        
                        //Initierar en session för användaren
                        $_SESSION["adminID"] =  $admin_ID["adminID"];
                        header("Location: inloggad_admin.php");
                    }

                    else {

                        $error = "Input verkar inte stämma";

                        }
                            
                }
            }
        
        }
    }
}
