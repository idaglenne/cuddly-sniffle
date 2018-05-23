<?php
    include "db_connect.php";
    include "login_process.php";

    if (isset($_SESSION["clientID"]))
    {
        $client_ID =  $_SESSION["clientID"];
        $moodComment = $connection->real_escape_string($_POST["commentSection"]);
        $moodRating = $connection->real_escape_string($_POST["moodOneToSeven"]);

        $query = "INSERT INTO Log (clientID, rating, comment) VALUES ('".$client_ID."', '".$moodRating."', '".$moodComment."')";
        $connection->query($query);

        $symptom1 = $_POST["symptom1"];
        $symptom2 = $_POST["symptom2"];
        $symptom3 = $_POST["symptom3"];
        $symptom4 = $_POST["symptom4"];
        $symptom5 = $_POST["symptom5"];
        $symptom6 = $_POST["symptom6"];
        $symptom7 = $_POST["symptom7"];
        $symptom8 = $_POST["symptom8"];
        $symptom9 = $_POST["symptom9"];
        $symptom10 = $_POST["symptom10"];

        $noCheck = '';

        if(isset($symptom1)){
            $secondquery = "INSERT INTO Symptoms (clientID, symptomType) VALUES ('".$client_ID."', '".$symptom1."')";
            $result = $connection->query($secondquery);
        }
        
        if(isset($symptom2)){
            $secondquery = "INSERT INTO Symptoms (clientID, symptomType) VALUES ('".$client_ID."', '".$symptom2."')";
            $result = $connection->query($secondquery);
        }
        
        if(isset($symptom3)){
            $secondquery = "INSERT INTO Symptoms (clientID, symptomType) VALUES ('".$client_ID."', '".$symptom3."')";
            $result = $connection->query($secondquery);
        }
        
        if(isset($symptom4)){
            $secondquery = "INSERT INTO Symptoms (clientID, symptomType) VALUES ('".$client_ID."', '".$symptom4."')";
            $result = $connection->query($secondquery);
        }
       
        if(isset($symptom5)){
            $secondquery = "INSERT INTO Symptoms (clientID, symptomType) VALUES ('".$client_ID."', '".$symptom5."')";
            $result = $connection->query($secondquery);
        }
       
        if(isset($symptom6)){
            $secondquery = "INSERT INTO Symptoms (clientID, symptomType) VALUES ('".$client_ID."', '".$symptom6."')";
            $result = $connection->query($secondquery);
        }
       
        if(isset($symptom7)){
            $secondquery = "INSERT INTO Symptoms (clientID, symptomType) VALUES ('".$client_ID."', '".$symptom7."')";
            $result = $connection->query($secondquery);
        }
        
        if(isset($symptom8)){
            $secondquery = "INSERT INTO Symptoms (clientID, symptomType) VALUES ('".$client_ID."', '".$symptom8."')";
            $result = $connection->query($secondquery);
        }
       
        if(isset($symptom9)){
            $secondquery = "INSERT INTO Symptoms (clientID, symptomType) VALUES ('".$client_ID."', '".$symptom9."')";
            $result = $connection->query($secondquery);
        }
        
        if(isset($symptom10)){
            $secondquery = "INSERT INTO Symptoms (clientID, symptomType) VALUES ('".$client_ID."', '".$symptom10."')";
            $result = $connection->query($secondquery);
        }
        
    
    
        /* if(isset($_POST["symptom"]))
        {
            $boxSymptoms = ($_POST["symptom"]);

            for($i = 0; $i < sizeof($boxSymptoms); $i++)
            {
                $secondquery = "INSERT INTO Symptoms (clientID, symptomType) VALUES ('".$client_ID."', '".$boxSymptoms[$i]."')";
                $result = $connection->query($secondquery);
            }
        } */

        //header("Refresh: 0; URL=inloggad.php");
        
    }
    else
    {
        header("Refresh: 0; URL=index.php");
        exit;
    }

?>