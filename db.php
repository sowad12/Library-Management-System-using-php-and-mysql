<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '1210855993';
$database='lms';
$con = mysqli_connect($dbhost, $dbuser, $dbpass,$database);

 
// Check connection
if(!$con){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Print host information
echo "Connect Successfully. Host info: " . mysqli_get_host_info($con);
 
// Close connection
//mysqli_close($con);
?>