<?php
include 'db_connect.php';

date_default_timezone_set('UTC');
$date = date('Y-m-d');
$clientID = $_SESSION["clientID"];
$query = "SELECT logDate, rating, comment FROM Log WHERE clientID = '".$clientID."' AND logDate = '".$date."'";
$log = $connection->query($query);

//while ($todays_log = $log->fetch_assoc()){

  //  echo $todays_log["logDate"];
  //  echo $todays_log["rating"];
  //  echo $todays_log["comment"];


//}


?>