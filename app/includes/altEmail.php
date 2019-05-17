<?php
session_start();

// $_SESSION["email"] = $email;
// $_SESSION["username"] = $username;

//sort out the isset element here
$email = $_POST['email'];

$result = $conn->prepare("SELECT email FROM adminGoMA.users WHERE email = ?");
      $result->bind_param("s", $email);
      $result->execute();

      $found = $result->fetch();

      $result->close();

//if the DB has found a match $found => 0 (it's not NULL)
if ($found){

        echo 'An account with that email already exists';
        echo '<p><a href="createAccount.php">Return</a></p>';

}else{

    if($conn === true){
        //send a welcome email
        $from = "mrsrhino2009@gmail.com";
        $to = $email;
        $subject = "My subject";
        $message = "Hello world!";
        $headers = "From: " . $from;

        //this just uses the mail method
        mail($to,$subject,$message,$headers);
        header('location:login.php');
        exit();

    }else{

        echo '<p><a href="createAccount.php">We have an error. Please return to the previous page</a></p>';

    }

}
