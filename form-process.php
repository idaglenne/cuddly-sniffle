<?php
    include "db_connect.php";
    include "login_process.php";

    if (isset($_SESSION["clientID"]))
    {
        $client_ID =  $_SESSION["clientID"];
        $moodComment = $connection->real_escape_string($_POST["commentSection"]);
        $moodRating = $connection->real_escape_string($_POST["moodOneToSeven"]);
        $moodSymptom = implode(',', $_POST["symptom"]);

        $query = "INSERT INTO Log (clientID, rating, comment) VALUES ('".$client_ID."', '".$moodRating."', '".$moodComment."')";
        $secondquery = "INSERT INTO Symptoms (symptomType) VALUES ('".$moodSymptom."')";
        $connection->query($query);
        $connection->query($secondquery);

        header("Refresh: 0; URL=inloggad.php");
        
    }
    else
    {
        header("Refresh: 0; URL=index.php");
        exit;
    }

?>