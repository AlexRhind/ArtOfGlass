<?php

// connect to the database on URL, username, userpassword, DBname
//$conn=mysqli_connect("localhost","root","root","adminGoMA"); LocalHost
$conn=mysqli_connect("80.82.114.96","rhindmeuk_admin","Wingham65","adminGoMA"); //34sp.com servers

// show errors (remove this line if on a live site)
// Check connection
if (mysqli_connect_errno()) {
	mysqli_report(MYSQLI_REPORT_ERROR);
  die( "Failed to connect to the database: " . mysqli_connect_error());
}

?>
