<?php
include 'db_connect.php';

$client = $_POST['fields'];
$delete_client_query = "DELETE FROM Clients WHERE clientID = '".$client."'";
$delete_log_query = "DELETE FROM Log WHERE clientID = '".$client."'";
$delete_symptoms_query = "DELETE FROM Symptoms WHERE clientID = '".$client."'";
$connection->query($delete_client_query);
$connection->query($delete_log_query);
$connection->query($delete_symptoms_query);

header("Location: inloggad_admin.php");


?>