
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

while ($todays_log = $log->fetch_assoc()){

    $log_date = $todays_log["logDate"];
    echo $log_date;

}

$symptom_names = array("Spänd rygg och nacke", "Ont i magen", "Hyperventilering", "Bröstsmärtor", 
                        "Orolig mage/illamående", "Yr/Svimfärdig", "Hjärtklappning", "Kallsvettningar", "Koncentrationssvårigheter", "Trötthet/Sömnsvårigheter");
//
//$todays_symptoms = array();
//foreach($symptoms as $row){

   // $todays_symptoms[] = $row;

   // }
while($todays_symptoms = $symptoms->fetch_assoc()){

  //echo $todays_symptoms[0];

}



?>