<?php
$DB_HOST			= "localhost";
$DB_NAME			= "calendar_events";
$DB_USER			= "root";
$DB_PASSWORD			= "";
 
// do not edit the code after this line
$con = mysql_connect($DB_HOST, $DB_USER, $DB_PASSWORD);
 
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
 
mysql_select_db($DB_NAME , $con);
 
session_start();

?>