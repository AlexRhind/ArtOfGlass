<?php
		//cross-origin resource sharing needs to be allowed 
		header("Access-Control-Allow-Origin: http://localhost:8888");

				require('includes/dbconx.php');
				include('includes/errors.php');

    $username = $_GET["username"];

		$result = $conn->prepare("SELECT username FROM admin.users WHERE username = ?");
		$result->execute();
		$found = $result->fetch();

		$result->close();


    if(!$result)
    {
        echo "error: ".mysqli_error();
        exit;
    }

    if(mysqli_num_rows($found) == 0);
    {
        echo 'true';//email is unique. not signed up before
    } else {
        echo 'false';//$found = 1 - username already registered
    }
?>

 <!-- ob_start(); -->
