<?php
include 'db_connect.php';
//include 'login_process.php';

date_default_timezone_set('UTC');
$date = date('Y-m-d');
$clientID = $_SESSION["clientID"];
$log_query = "SELECT logDate, rating, comment FROM Log WHERE clientID = '".$clientID."' AND logDate = '".$date."'";
$log = $connection->query($log_query);
$symptoms_query = "SELECT * FROM Symptoms WHERE clientID = '".$clientID."' AND sDate = '".$date."'";
$symptoms = $connection->query($symptoms_query);


?>