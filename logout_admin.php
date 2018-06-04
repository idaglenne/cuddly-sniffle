
<?php
session_start();
if(session_destroy()) 
{
header("Location: admin_inlog.php"); 
}
?>