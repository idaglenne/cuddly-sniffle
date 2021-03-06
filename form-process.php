<?php
    include "db_connect.php";
    include "login_process.php";

    if (isset($_SESSION["clientID"]))
    {
        $client_ID =  $_SESSION["clientID"];
        $moodComment = $connection->real_escape_string($_POST["commentSection"]);
        $moodRating = $connection->real_escape_string($_POST["moodOneToSeven"]);

        date_default_timezone_set('UTC');
        $date = date('Y-m-d');

        $query = "INSERT INTO Log VALUES (".$client_ID.", '".$date."', ".$moodRating.", '".$moodComment."')";
        $connection->query($query);

        $symptoms = $_POST["symptom"];

        $symptomsValues = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

        $N = count($symptoms);
        for($i=0; $i < $N; $i++)
        {
            $index = (int)
            $symptoms[$i] -1;
            $symptomsValues[$index] = 1;
        }

        $symptomsValuesString = implode(",", $symptomsValues);
        
        $symptomsQuery = "INSERT INTO Symptoms VALUES (".$client_ID.", '".$date."', ".$symptomsValuesString.")";

        $result = $connection->query($symptomsQuery);


        header("Location: inloggad.php");
        
    }
    else
    {
        header("Location: index.php");
        exit;
    }

?>