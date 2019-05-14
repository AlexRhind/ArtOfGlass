<?php session_start();

require('includes/dbconx.php');
include('includes/errors.php');
include("includes/headerNav.php");
?>

<section class="smaltBlueBgrd_7pc">
<h1> Your Art of Glass Bookings</h1>

    <h2 class="workshop">You are currently logged on as &nbsp;<?php echo $_SESSION["username"];?></h2>
    <br>
    <!-- <a href="logout.php">Log out</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="addListing.php">Create a new listing</a><br> -->
</section>

<section class="whiteBgrd">

<?php

include("includes/displayUserBookingsPartial.php");

?>

</section>

<?php
include("includes/footer.php");
?>
