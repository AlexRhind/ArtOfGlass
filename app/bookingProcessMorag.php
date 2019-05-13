<?php session_start();
ob_start();

require('includes/dbconx.php');
include('includes/errors.php');


if (isset($_POST['submitMorag'])){

				// if(!isset($_SESSION["username"])) {
				// 			$username = "Anonymous";
				// }	else {
				// 			$username = $_SESSION["username"];
				// }
							$username = $_SESSION["username"];
							//$username = "Rhino";

			if (!empty($_POST['Nov01Meet'])) {

							$event = "01Nov";
							$Nov01Meet = $_POST['Nov01Meet'];

											if($stmt = $conn->prepare("INSERT INTO adminGoMA.sales
																	(username, event2, meet)
																	VALUES (?, ?, ?)")){

																	$stmt->bind_param("ssi", $username, $event, $Nov01Meet);
																	$stmt->execute();
																	$stmt->close();

																	header("location:userAdmin.php");

											} else {

																	//send to another page to start again
																	echo ("<p>No data returned</p>");

											}
				}

				if (!empty($_POST['Nov05Child']) || !empty($_POST['Nov05Adult'])) {

								$event = "05Nov";
								$Nov05Child = $_POST['Nov05Child'];
								$Nov05Adult = $_POST['Nov05Adult'];

								// if(empty($_POST['Nov05Adult'])) {
								// 			$Nov05Adult = 0;
								// }	else {
								// 			$Nov05Adult = $_POST['Nov05Adult'];
								// }

											if($stmt = $conn->prepare("INSERT INTO adminGoMA.sales
																	(username, event2, adult, child)
																	VALUES (?, ?, ?, ?)")){

																	$stmt->bind_param("ssii", $username, $event, $Nov05Adult, $Nov05Child);
																	$stmt->execute();
																	$stmt->close();

																	header("location:userAdmin.php");

											} else {

																	//send to another page to start again
																	echo ("<p>No data returned</p>");

											}
						}

				if (!empty($_POST['Nov06Child']) || !empty($_POST['Nov06Adult'])) {

								$event = "06Nov";
								$Nov06Child = $_POST['Nov06Child'];
								$Nov06Adult = $_POST['Nov06Adult'];

											if($stmt = $conn->prepare("INSERT INTO adminGoMA.sales
																	(username, event2, adult, child)
																	VALUES (?, ?, ?, ?)")){

																	$stmt->bind_param("ssii", $username, $event, $Nov06Adult, $Nov06Child);
																	$stmt->execute();
																	$stmt->close();

																	header("location:userAdmin.php");

											} else {

																	//send to another page to start again
																	echo ("<p>No data returned</p>");

											}
						}

				if (!empty($_POST['Nov13Child']) || !empty($_POST['Nov13Adult'])) {

								$event = "13Nov";
								$Nov13Child = $_POST['Nov13Child'];
								$Nov13Adult = $_POST['Nov13Adult'];

											if($stmt = $conn->prepare("INSERT INTO adminGoMA.sales
																	(username, event2, adult, child)
																	VALUES (?, ?, ?, ?)")){

																	$stmt->bind_param("ssii", $username, $event, $Nov13Adult, $Nov13Child);
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
