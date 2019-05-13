<?php session_start();
ob_start();

require('includes/dbconx.php');
include('includes/errors.php');


if (isset($_POST['submitAlina'])){

				// if(!isset($_SESSION["username"])) {
				// 			$username = "Anonymous";
				// }	else {
				// 			$username = $_SESSION["username"];
				// }
							$username = $_SESSION["username"];
							//$username = "Rhino";

			if (!empty($_POST['Dec03Meet'])) {

							$event = "03Dec";
							$Dec03Meet = $_POST['Dec03Meet'];

											if($stmt = $conn->prepare("INSERT INTO adminGoMA.sales
																	(username, event2, meet)
																	VALUES (?, ?, ?)")){

																	$stmt->bind_param("ssi", $username, $event, $Dec03Meet);
																	$stmt->execute();
																	$stmt->close();

																	header("location:userAdmin.php");

											} else {

																	//send to another page to start again
																	echo ("<p>No data returned</p>");

											}
				}

				if (!empty($_POST['Dec11Child']) || !empty($_POST['Dec11Adult'])) {

								$event = "11Dec";
								$Dec11Child = $_POST['Dec11Child'];
								$Dec11Adult = $_POST['Dec11Adult'];

								// if(empty($_POST['Dec11Adult'])) {
								// 			$Dec11Adult = 0;
								// }	else {
								// 			$Dec11Adult = $_POST['Dec11Adult'];
								// }

											if($stmt = $conn->prepare("INSERT INTO adminGoMA.sales
																	(username, event2, adult, child)
																	VALUES (?, ?, ?, ?)")){

																	$stmt->bind_param("ssii", $username, $event, $Dec11Adult, $Dec11Child);
																	$stmt->execute();
																	$stmt->close();

																	header("location:userAdmin.php");

											} else {

																	//send to another page to start again
																	echo ("<p>No data returned</p>");

											}
						}

				if (!empty($_POST['Dec13Child']) || !empty($_POST['Dec13Adult'])) {

								$event = "13Dec";
								$Dec13Child = $_POST['Dec13Child'];
								$Dec13Adult = $_POST['Dec13Adult'];

											if($stmt = $conn->prepare("INSERT INTO adminGoMA.sales
																	(username, event2, adult, child)
																	VALUES (?, ?, ?, ?)")){

																	$stmt->bind_param("ssii", $username, $event, $Dec13Adult, $Dec13Child);
																	$stmt->execute();
																	$stmt->close();

																	header("location:userAdmin.php");

											} else {

																	//send to another page to start again
																	echo ("<p>No data returned</p>");

											}
						}

				if (!empty($_POST['Dec17Child']) || !empty($_POST['Dec17Adult'])) {

								$event = "17Dec";
								$Dec17Child = $_POST['Dec17Child'];
								$Dec17Adult = $_POST['Dec17Adult'];

											if($stmt = $conn->prepare("INSERT INTO adminGoMA.sales
																	(username, event2, adult, child)
																	VALUES (?, ?, ?, ?)")){

																	$stmt->bind_param("ssii", $username, $event, $Dec17Adult, $Dec17Child);
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
