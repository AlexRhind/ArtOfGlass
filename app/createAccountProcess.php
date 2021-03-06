<?php
session_start();
ob_start();

require('includes/dbconx.php');
include('includes/errors.php');

if(isset($_POST['submit'])){

	if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {

        if($_POST['password'] == $_POST['repeatPassword']){

						    // Test $username against the DB for exisiting username
								$username = $_POST['username'];

								$result = $conn->prepare("SELECT username FROM adminGoMA.users WHERE username = ?");
								$result->bind_param("s", $username);
								$result->execute();

								$found = $result->fetch();

								$result->close();

								//if the DB has found a match (it's not NULL)...
								if ($found){

								header("location: createAccount.php");

				} else {

				$privacy = $_POST['privacy'];

				if(isset($privacy) && $privacy == "yes") {
							$privacy = 1;
						} else {
							$privacy = 0;
						};

				//username is not already registered and both passwords match - enter details into the DB
			   $email = $_POST['email'];
			   $password = $_POST['password'];

				 //save the new account holder's email address to pass to sendEmail.php
				 $_SESSION["email"] = $email;
				 $_SESSION["username"] = $username;

				//Send a hashed password into the DB (bind the hashed pwd)
	           $hashPassword = password_hash($password, PASSWORD_DEFAULT);

            	if($stmt = $conn->prepare("INSERT INTO adminGoMA.users (username, email, password, privacy) VALUES (?, ?, ?, ?)")){
                $stmt->bind_param("sssi", $username, $email, $hashPassword, $privacy);
                $stmt->execute();
                $stmt->close();

				//	include('includes/sendEmail.php');

					//redirect user to a confirmation page after DB data entry
					header("location: login.php");

						}else{

							echo "Something went wrong.";

						}

					$conn->close();

				}//end run details into DB

			 } else {

					//message needed here to tell the user to re-enter passwords again - the check is working but nae message with ec
					header("location: createAccount.php");

		}//passwords reenter

   }//check values are entered into form fields

}//submit button isset
