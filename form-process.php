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

        if(isset($_POST["symptom1"]))
        {
           $check1 = ($_POST["symptom1"]);
        }
        else
        {
            $check1 = 0;
        }
        if(isset($_POST["symptom2"]))
        {
           $check2 = ($_POST["symptom2"]);
        }
        else
        {
            $check2 = 0;
        }
        if(isset($_POST["symptom3"]))
        {
           $check3 = ($_POST["symptom3"]);
        }
        else
        {
            $check3 = 0;
        }
        if(isset($_POST["symptom4"]))
        {
           $check4 = ($_POST["symptom4"]);
        }
        else
        {
            $check4 = 0;
        }
        if(isset($_POST["symptom5"]))
        {
           $check5 = ($_POST["symptom5"]);
        }
        else
        {
            $check5 = 0;
        }
        if(isset($_POST["symptom6"]))
        {
           $check6 = ($_POST["symptom6"]);
        }
        else
        {
            $check6 = 0;
        }
        if(isset($_POST["symptom7"]))
        {
           $check7 = ($_POST["symptom7"]);
        }
        else
        {
            $check7 = 0;
        }
        if(isset($_POST["symptom8"]))
        {
           $check8 = ($_POST["symptom8"]);
        }
        else
        {
            $check8 = 0;
        }
        if(isset($_POST["symptom9"]))
        {
           $check9 = ($_POST["symptom9"]);
        }
        else
        {
            $check9 = 0;
        }
        if(isset($_POST["symptom10"]))
        {
           $check10 = ($_POST["symptom10"]);
        }
        else
        {
            $check10 = 0;
        }
       

        $secondquery = "INSERT INTO Symptoms (clientID, symptom1, symptom2, symptom3, symptom4, symptom5, symptom6, symptom7, symptom8, symptom9, symptom10,) VALUES ('".$client_ID."', '".$check1."', '".$check2."', '".$check3."', '".$check4."', '".$check5."', '".$check6."', '".$check7."', '".$check8."', '".$check9."', '".$check10."')";
        $result = $connection->query($secondquery);


        //header("Refresh: 0; URL=inloggad.php");
        
    }
    else
    {
        header("Refresh: 0; URL=index.php");
        exit;
    }

?>