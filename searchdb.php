<?php
include "db_connect.php";

if (isset($_POST["search_submit"])) {
    $search_date = $connection->real_escape_string($_POST["search_date"]);

    $clientID = $_SESSION["clientID"];
    $logquery = "SELECT logDate, rating, comment FROM Log WHERE clientID = '".$clientID."' AND logDate = '".$search_date."'";
    $show_log = $connection->query($logquery);
    $symptoms_query = "SELECT * FROM Symptoms WHERE clientID = '".$clientID."' AND sDate = '".$search_date."'";
    $symptoms = $connection->query($symptoms_query);;
    
}

?>