<?php session_start();

require('includes/dbconx.php');
include('includes/errors.php');
include("includes/headerNav.php");
?>

<h2> Your Art of Glass Bookings</h2>

    <p>You are currently logged on as:&nbsp; <?php echo $_SESSION["username"];?></p>
    <br>
    <!-- <a href="logout.php">Log out</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="addListing.php">Create a new listing</a><br> -->


<section style="background-color: white;">

<?php

    //SELECT * FROM `table` WHERE DATE(`timestamp`) = CURDATE()

    if(isset($_POST['selectAll'])){

		      $username = $_SESSION["username"];

              if($stmt = $conn->prepare("SELECT salesID, event2, adult, child, meet
                                 		FROM adminGoMA.sales
										                WHERE username = ?")){

                                $stmt->bind_param("s", $username); //Bind $username from input

                                $stmt->bind_result($id, $event, $adult, $child, $meet);
                                $stmt->execute();

				  				$_SESSION["id"] = $id; //Bind the id to a global session to allow delete booking

                                //Loop through the results and fetch values to create <td> row(s)
                  echo("<table><tr><th>Event</th><th>Adult</th><th>Child</th><th>Place</th><th></th></tr>");

				  				while ($stmt->fetch()){

									echo "<tr>";
									echo "<td>" . $event . "</td>";
									echo "<td>" . $adult . "</td>";
									echo "<td>" . $child . "</td>";
									echo "<td>" . $meet  . "</td>";
									echo "<td><button><a href='deleteProcess.php?id=" . $id . "'>Delete booking</a></button><br><br>";
									echo "</tr>";
									}
                  
                  echo "</table>";

                  } else { //if ($stmt == "")

                                echo "There are no bookings to display";
                                echo "<a href='workshops.php'>Make a booking, " . $_SESSION["username"] . " </a>";

				   }

				//Close the table and the statement //
                $stmt->close();
                $conn->close();

				} else {

				   //send to another page to start again
				   echo ("<p>No display user bookings isset data returned</p>");
    }//isset

?>

</section>

<?php
include("includes/footer.php");
?>
