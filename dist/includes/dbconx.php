<?php

// connect to the database on URL, username, userpassword, DBname
$conn=mysqli_connect("localhost","root","root","adminGoMA");

// show errors (remove this line if on a live site)
// Check connection
if (mysqli_connect_errno()) {
	mysqli_report(MYSQLI_REPORT_ERROR);
  die( "Failed to connect to the database: " . mysqli_connect_error());
}

?>