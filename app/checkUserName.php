<?php ob_start();

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
		printf("Result has %d rows", $found);

    {
        echo 'true';//email is unique. not signed up before

    } else {

        echo 'That username is in use. Would you like to <a href='login.php'></a>?';
    }
?>
