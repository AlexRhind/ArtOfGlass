<?php session_start();
ob_start();

require('includes/dbconx.php');
include('includes/errors.php');


if (isset($_POST['submitMarkyD'])){

							//$username = $_SESSION["username"];
							$username = "Rhino";

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

				// elseif (!empty($_POST['Oct15Child']) || !empty($_POST['Oct15Adult'])) {
				//
				// 				$event = "15Oct";
				//
				// 				if(empty($_POST['Oct15Child'])) {
				// 							$Oct15Child = 0;
				// 				}	else {
				// 							$Oct15Child = $_POST['Oct15Child'];
				// 				}
				//
				// 				if(empty($_POST['Oct15Adult'])) {
				// 							$Oct15Adult = 0;
				// 				}	else {
				// 							$Oct15Adult = $_POST['Oct15Adult'];
				// 				}
				//
				// 							if($stmt = $conn->prepare("INSERT INTO adminGoMA.sales
				// 													(username, event2, adult, child)
				// 													VALUES (?, ?, ?, ?)")){
				//
				// 													$stmt->bind_param("ssii", $username, $event, $Oct15Adult, $Oct15Child);
				// 													$stmt->execute();
				// 													$stmt->close();
				//
				// 													header("location:userAdmin.php");
				//
				// 							} else {
				//
				// 													//send to another page to start again
				// 													echo ("<p>No data returned</p>");
				//
				// 							}
				// 		}

				// elseif (!empty($_POST['Oct17Child']) || !empty($_POST['Oct17Adult'])) {
				//
				// 				$event = "17Oct";
				//
				// 				if(empty($_POST['Oct17Child'])) {
				// 							$Oct17Child = 0;
				// 				}	else {
				// 							$Oct17Child = $_POST['Oct17Child'];
				// 				}
				//
				// 				if(empty($_POST['Oct17Adult'])) {
				// 							$Oct17Adult = 0;
				// 				}	else {
				// 							$Oct17Adult = $_POST['Oct17Adult'];
				// 				}
				//
				// 							if($stmt = $conn->prepare("INSERT INTO adminGoMA.sales
				// 													(username, event2, adult, child)
				// 													VALUES (?, ?, ?, ?)")){
				//
				// 													$stmt->bind_param("ssii", $username, $event, $Oct17Adult, $Oct17Child);
				// 													$stmt->execute();
				// 													$stmt->close();
				//
				// 													header("location:userAdmin.php");
				//
				// 							} else {
				//
				// 													//send to another page to start again
				// 													echo ("<p>No data returned</p>");
				//
				// 							}
				// 		}
				//
				// elseif (!empty($_POST['Oct18Child']) || !empty($_POST['Oct18Adult'])) {
				//
				// 				$event = "18Oct";
				//
				// 				if(empty($_POST['Oct18Child'])) {
				// 							$Oct18Child = 0;
				// 				}	else {
				// 							$Oct18Child = $_POST['Oct18Child'];
				// 				}
				//
				// 				if(empty($_POST['Oct18Adult'])) {
				// 							$Oct18Adult = 0;
				// 				}	else {
				// 							$Oct18Adult = $_POST['Oct18Adult'];
				// 				}
				//
				// 							if($stmt = $conn->prepare("INSERT INTO adminGoMA.sales
				// 													(username, event2, adult, child)
				// 													VALUES (?, ?, ?, ?)")){
				//
				// 													$stmt->bind_param("ssii", $username, $event, $Oct18Adult, $Oct18Child);
				// 													$stmt->execute();
				// 													$stmt->close();
				//
				// 													header("location:userAdmin.php");
				//
				// 							} else {
				//
				// 													//send to another page to start again
				// 													echo ("<p>No data returned</p>");
				//
				// 							}

        } else { //close check radio buttons

		    //send to another page to start again
		    echo ("<p>No data returned</p>");

} //close isset
