<?php session_start();

require('includes/dbconx.php');
include('includes/errors.php');
include("includes/headerNav.php");
?>

<section class="smaltBlueBgrd_7pc">
<h1> Your Art of Glass Bookings</h1>

    <h2 class="workshop">You are currently logged on as&nbsp;<?php echo $_SESSION["username"];?></h2>
    <br>
    <!-- <a href="logout.php">Log out</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="addListing.php">Create a new listing</a><br> -->
</section>

<section class="whiteBgrd">

<?php

if(isset($_POST['selectAll'])){

      $username = $_SESSION["username"];

          if($stmt = $conn->prepare("SELECT salesID, event2, adult, child, meet
                                FROM adminGoMA.sales
                                WHERE username = ?")){

                            $stmt->bind_param("s", $username); //Bind $username from input
                            $stmt->bind_result($id, $event, $adult, $child, $meet);
                            $stmt->get_result();
                            $stmt->execute();

              $_SESSION["id"] = $id; //Bind the id to a global session to allow delete booking

              //Loop through the results and fetch values to create <td> row(s)
              echo("<table><tr><th class='eventHeader'>Event</th><th class='ticketType'>Adult</th><th class='ticketType'>Child</th><th class='ticketType'>Place</th><th class='deleteBooking'></th></tr>");

              while ($stmt->fetch()){

                    echo "<tr>";
                    echo "<td class='eventHeader'>" . $event . "</td>";
                    echo "<td class='ticketType'>" . $adult . "</td>";
                    echo "<td class='ticketType'>" . $child . "</td>";
                    echo "<td class='ticketType'>" . $meet  . "</td>";
                    echo "<td class='deleteBooking'><a class='waves-effect waves-orange btn' href='deleteProcess.php?id=" . $id . "'>Delete booking</a></td>";
                    echo "</tr>";
               }

          }

          //Set the value of the columns for username=? to give total number of ticket types
          if($stmt = $conn->prepare("SELECT SUM(adult), SUM(child), SUM(meet)
                                FROM adminGoMA.sales
                                WHERE username = ?")){

                            $stmt->bind_param("s", $username); //Bind $username from input
                            $stmt->bind_result($sumAdult, $sumChild, $sumMeet);
                            $stmt->get_result();
                            $stmt->execute();

              while ($stmt->fetch()){

                  //set the ticket prices for events
                  $adultTicketSum = $sumAdult * 10;
                  $childTicketSum = $sumChild * 5;
                  $meetTicketSum = $sumMeet * 10;

                    echo "<tr>";
                    echo "<td class='eventHeader'><strong>Full ticket cost</strong></td>";
                    echo "<td><strong>&pound;" . $adultTicketSum . "</strong></td>";
                    echo "<td><strong>&pound;" . $childTicketSum . "</strong></td>";
                    echo "<td><strong>&pound;" . $meetTicketSum . "</strong></td>";
                    echo "<td>&nbsp;</td>";
                    echo "</tr>";

              }

              //the .toFixed(2) format for php is number_format('value', decimals)
              $totalTenPercent = number_format((($adultTicketSum + $childTicketSum + $meetTicketSum)* 0.9), 2);

              echo "<tr>";
              echo "<td class='eventHeader tint'><strong>&nbsp;Total with 10% Friends Discount</strong></td>";
              echo "<td class='tint'><strong>&pound;" . $totalTenPercent . "</strong></td>";
              echo "<td class='tint'>&nbsp;</td>";
              echo "<td class='tint'>&nbsp;</td>";
              echo "<td class='tint'>&nbsp;</td>";
              echo "</tr>";

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
       echo ("<p>No data returned</p>");
}//isset

?>

</section>

<?php
include("includes/footer.php");
?>
