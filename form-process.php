<?php
    include "db_connect.php";
    include "login_process.php";

    $moodComment = $connection->real_escape_string($_POST["commentSection"]);
    $moodRating = $connection->real_escape_string($_POST["moodOneToSeven"]);
    $moodSymptom = $connection->real_escape_string($_POST["symptom"]);

    $query = "INSERT INTO Log (rating, comment) VALUES ('".$moodRating."', '".$moodComment."')";
    $secondquery = "INSERT INTO Symptoms (symptomType) VALUES ('".$moodSymptom."')";
    $connection->query($query);
    $connection->query($secondquery);
?>