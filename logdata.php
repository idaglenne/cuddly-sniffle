<?php
include "db_connect.php";
include "login_process.php";

header('Content-Type: application/json');


$client_ID =  $_SESSION["clientID"];
$date_query = "SELECT logDate, rating FROM Log WHERE clientID = '".$client_ID."'";
$dates = $connection->query($date_query);

$data = array();
foreach($dates as $row){

    $data[] = $row;

    }



print json_encode($data);



?>