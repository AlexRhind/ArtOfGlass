<?php session_start();
ob_start();

require('includes/dbconx.php');
include('includes/errors.php');


if (isset($_POST['submitMarkyD'])){

				// if(!isset($_SESSION["username"])) {
				// 			$username = "Anonymous";
				// }	else {
				// 			$username = $_SESSION["username"];
				// }
							$username = $_SESSION["username"];
							//$username = "Rhino";

			if (!empty($_POST['Oct10Meet'])) {

							$event = "10Oct";
							$Oct10Meet = $_POST['Oct10Meet'];

											if($stmt = $conn->prepare("INSERT INTO adminGoMA.sales
																	(username, event2, meet)
																	VALUES (?, ?, ?)")){

																	$stmt->bind_param("ssi", $username, $event, $Oct10Meet);
																	$stmt->execute();
																	$stmt->close();

																	header("location:userAdmin.php");

											} else {

																	//send to another page to start again
																	echo ("<p>No data returned</p>");

											}
				}

				if (!empty($_POST['Oct15Child']) || !empty($_POST['Oct15Adult'])) {

								$event = "15Oct";
								$Oct15Child = $_POST['Oct15Child'];
								$Oct15Adult = $_POST['Oct15Adult'];

								// if(empty($_POST['Oct15Adult'])) {
								// 			$Oct15Adult = 0;
								// }	else {
								// 			$Oct15Adult = $_POST['Oct15Adult'];
								// }

											if($stmt = $conn->prepare("INSERT INTO adminGoMA.sales
																	(username, event2, adult, child)
																	VALUES (?, ?, ?, ?)")){

																	$stmt->bind_param("ssii", $username, $event, $Oct15Adult, $Oct15Child);
																	$stmt->execute();
																	$stmt->close();

																	header("location:userAdmin.php");

											} else {

																	//send to another page to start again
																	echo ("<p>No data returned</p>");

											}
						}

				if (!empty($_POST['Oct17Child']) || !empty($_POST['Oct17Adult'])) {

								$event = "17Oct";
								$Oct17Child = $_POST['Oct17Child'];
								$Oct17Adult = $_POST['Oct17Adult'];

											if($stmt = $conn->prepare("INSERT INTO adminGoMA.sales
																	(username, event2, adult, child)
																	VALUES (?, ?, ?, ?)")){

																	$stmt->bind_param("ssii", $username, $event, $Oct17Adult, $Oct17Child);
																	$stmt->execute();
																	$stmt->close();

																	header("location:userAdmin.php");

											} else {

																	//send to another page to start again
																	echo ("<p>No data returned</p>");

											}
						}

				if (!empty($_POST['Oct18Child']) || !empty($_POST['Oct18Adult'])) {

								$event = "18Oct";
								$Oct18Child = $_POST['Oct18Child'];
								$Oct18Adult = $_POST['Oct18Adult'];

											if($stmt = $conn->prepare("INSERT INTO adminGoMA.sales
																	(username, event2, adult, child)
																	VALUES (?, ?, ?, ?)")){

																	$stmt->bind_param("ssii", $username, $event, $Oct18Adult, $Oct18Child);
																	$stmt->execute();
																	$stmt->close();

																	header("location:userAdmin.php");

											} else {

																	//send to another page to start again
																	echo ("<p>No data returned</p>");

											}

        } else { //

		    //send to another page to start again
		    echo ("<p>No data returned</p>");

		}

} //close isset button

//SELECT * FROM `table` WHERE DATE(`timestamp`) = CURDATE()
