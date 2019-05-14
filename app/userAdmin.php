<?php session_start();
	include('includes/errors.php');
	include ('includes/headerNav.php');

	$username = $_SESSION["username"];

?>


<main>

  <!--==========================
  ***** Opening intro *****
  =========================== -->

<h2>This is the User Admin page for GoMA Friends</h2>


<p>You are currently logged on as:&nbsp; <?php echo $_SESSION["username"];?></p>
<br>
<form action="displayUserBookings.php" method="post">

<input class="button" type="submit" name="selectAll" value="See your bookings" />

</form>
<br>

<a href="logout.php">Log out</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="addListing.php">Create a new listing</a>








  <?php
      include("includes/offerBanner.php");
  ?>

  </main>


  <?php
      include("includes/footer.php");
  ?>
