<?php
$uname = "dbtrain_776";
$pass = "fwmdkg";
$host = "dbtrain.im.uu.se";
$dbname = "dbtrain_611";
$connection = new mysqli($host, $uname, $pass, $dbname);

if ($connection->connect_error)
{
    die("Connection failed: ".$connection.connect_error);
}
echo "Connection worked.";
?>