<?php
session_start();
session_destroy();
//ob_start();

//destroys the username cookie by setting it to a null value
setcookie("$username", "");
header("location: workshops.php");


//ob_end_clean();
