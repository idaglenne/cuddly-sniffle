<?php
    include "db_connect.php";
    include "login_process.php";

    $moodComment = $connection->real_escape_string($_POST["commentSection"]);

    $query = "INSERT INTO Log (rating, comment) VALUES ('".$moodOneToSeven."', '".$commentSection."')";
    $secondquery = "INSERT INTO Symptoms (symptomType) VALUES ('".$symptom."')";
    $connection->query($query);
    $connection->query($secondquery);
?>