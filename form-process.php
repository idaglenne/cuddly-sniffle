<?php
    include "db_connect.php";
    include "login_process.php";

    if (isset($_SESSION["clientID"]))
    {
        $client_ID =  $_SESSION["clientID"];
        
    }
    /* else
    {
        header("Refresh: 0; URL=index.php");
        exit;
    } */

    $moodComment = $connection->real_escape_string($_POST["commentSection"]);
    $moodRating = $connection->real_escape_string($_POST["moodOneToSeven"]);
    $moodSymptom = $connection->real_escape_string($_POST["symptom"]);


    
    $secondquery = "INSERT INTO Symptoms (symptomType) VALUES ('".$moodSymptom."')";
    $connection->query($query);
    $connection->query($secondquery);
?>