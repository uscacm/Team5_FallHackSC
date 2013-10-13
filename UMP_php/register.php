<?php

$DB_HOST			= "localhost";
$DB_NAME			= "calendar_events";
$DB_USER			= "root";
$DB_PASSWORD			= "";
 
// do not edit the code after this line
$conn = mysql_connect($DB_HOST, $DB_USER, $DB_PASSWORD);
 
if (!$conn)
{
  die('Could not connect: ' . mysql_error());
}
 
//mysql_select_db($DB_NAME , $con);
//session_start();

//retrieve our data from POST
$org_name = $_POST['org_name'];
$event_name = $_POST['event_name'];
$location = $_POST['location'];
$usc_email = $_POST['usc_email'];
$description = $_POST['description'];

if(strlen($org_name) < 3 ){
    header('Location: addyourevent.php');
    return;
}
$sql = 'INSERT INTO event'.
	'(org_name, event_name, location, usc_email, description) '.
	'VALUES ("$org_name", "$event_name", "$location", "$usc_email", "$description")';
	
mysql_select_db($DB_NAME);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);
 
 
/*$query = "INSERT INTO events ( org_name, event_name, location, usc_email, description)
VALUES ('$org_name', '$event_name', '$location', '$usc_email', '$description');";
mysql_query($query);*/
//header('Location: index.php');
?>