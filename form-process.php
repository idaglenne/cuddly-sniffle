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

        $query = "INSERT INTO Log (clientID, rating, comment) VALUES ('".$client_ID."', '".$moodRating."', '".$moodComment."')";

        $connection->query($query);

        $symptoms = $_POST["symptom"];

        $N = count($symptoms);
        for($i=0; $i < $N; $i++)
        {
            if(isset($symptoms[$i]))
            {
                $symptoms[$i] = 1;
            }
            else
            {
                $symptoms[$i] = 0;
            }
        }
       

        $secondquery = "INSERT INTO Symptoms (clientID, sDate, symptom1, symptom2, symptom3, symptom4, symptom5, symptom6, symptom7, symptom8, symptom9, symptom10) VALUES ('".$client_ID."', '".$date."', '".$symptoms[0]."', '".$symptoms[1]."', '".$symptoms[2]."', '".$symptoms[3]."', '".$symptoms[4]."', '".$symptoms[5]."', '".$symptoms[6]."', '".$symptoms[7]."', '".$symptoms[8]."', '".$symptoms[9]."')";

        $secondquery = "INSERT INTO Symptoms (clientID, sDate, symptom1, symptom2, symptom3, symptom4, symptom5, symptom6, symptom7, symptom8, symptom9, symptom10) VALUES ('".$client_ID."', '".$date."', '".$check1."', '".$check2."', '".$check3."', '".$check4."', '".$check5."', '".$check6."', '".$check7."', '".$check8."', '".$check9."', '".$check10."')";

        $result = $connection->query($secondquery);

        //header("Refresh: 0; URL=inloggad.php");
        
    }
    else
    {
        header("Refresh: 0; URL=index.php");
        exit;
    }

?>