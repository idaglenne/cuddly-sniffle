<?php
include "db_connect.php";
include "login_process.php";

header('Content-Type: application/json');


$client_ID =  $_SESSION["clientID"];
$date_query = "SELECT logDate, rating FROM Log WHERE clientID = '".$client_ID."'";
//$rating_query = "SELECT rating FROM Log WHERE clientID LIKE $client_ID";
$dates = $connection->query($date_query);
//$rating = $connection->query($rating_query);

$data = array();
foreach($dates as $row){

    $data[] = $row;

    }


$rating_query = "SELECT rating FROM Log WHERE clientID = '".$client_ID."'";


while ($weekrating = $dates->fetch_assoc()){

}
//lägg ihop 7 dagars rating & spara i variabel

print json_encode($data);


?>