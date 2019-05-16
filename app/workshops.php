<?php session_start();
	include('includes/errors.php');
	include ('includes/headerNav.php');

	$username = $_SESSION["username"];

?>

<main>

  <!--==========================<span class="orangeCopy">|</span>
  ***** Opening intro *****
  =========================== style="width: 100%; background-image: url(img/glassForest1920.png-->

  <section class="wrapperWorkshop">
		<img src="img/liam-martens.png" alt="Liam Martens">


  <div class="bannerWorkshop">

		<div class="workshopGrid">

			<div class="boxWorkshop1">
		      <h1 class="gallery"><span class="orangeCopy"><strong>Friends Priority Booking now open</strong></span><br>
		      <i class="material-icons orangeCopy">play_arrow</i> Artist-led workshops<br>
		      <i class="material-icons orangeCopy">play_arrow</i> In conversation with the artist</h1>

					<?php
					if (!isset($username)) {
								echo "<h2><span class='orangeCopy'><strong>GoMA Friends </strong></span><br>";
								echo "<a class='workshop' href='login.php'>Sign in</a> to book your place with our three international glass artists</h2>";
					 }
					 ?>

			</div>

					<?php
					if (isset($username)) {
							echo "<div class='boxWorkshop2'>";
							echo "<h2 class='workshopHide orangeCopy'>GOMA Friends</h2>";

							echo "<p>You are signed on as  <strong>" . $username . "</strong></p>";

							echo "<form action='displayUserBookings.php' method='post'>";

							echo "<input class='waves-effect waves-orange btn' type='submit' name='selectAll' value='See your bookings' />
							</form><br>";

							echo "<a class='waves-effect waves-orange btn' href='logout.php'>Log out</a>";

							echo "</div>";
					 }
					 ?>

			</div>

	<!-- end workshopGrid wrapper -->
	</div>

<!-- end bannerWorkshop -->
<!-- </div> -->
</section>

<?php
    include("includes/offerBanner.php");
?>

  <!--
  Artist bookings
  -------------------------------->

  <section class="#">

    <ul class="collapsible">

  <li>

    <div class="collapsible-header smaltBlueRule">

      <div class="grid-six">

        <div class="box20">
            <img src="img/galleryArtist3.png" alt="Alex Perez" class="exampleArtistWorkshop">
              <div class="bookings">
                <h2 class="workshop">Book 'In conversation' with Marky D<i class="material-icons orangeCopy">play_arrow</i></h2>
                <p>1900 for 1930 10 October</p>
                <h2 class="workshop">Book workshops with Marky D<i class="material-icons orangeCopy">play_arrow</i></h2>
                <p class="workshop">15 – 18 October</p>
              </div>
          </div>
          <div class="box21Quote">
            <p class="workshopCollapsible">  <img src="img/quotes.png" alt="monster quotes">&nbsp;&nbsp;Review of the last event do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad veniam, quis…</p>
          </div>
      <!-- end grid-six MarkyD -->
      </div>
    <!-- close collapsible header -->
    </div>

    <div class="collapsible-body smaltBlueBRule">
      <div class="grid-six">
        <div class="box20Collapsible">
          <h2>In conversation with Marky D</h2>
          <p class="#">Meet the artist 1900 for 1930 Thu 10 October <span class="orangeCopy">£10 per person</span></p>

          <h2 class="gallery">Glass workshops with Marky D</h2>
          <p class="#">1400 Tue 15 October | Maximum 16 places <span class="orangeCopy">£10 adult £5 child</span></p>
          <p class="#">1400 Thu 17 October | Maximum 16 places <span class="orangeCopy">£10 adult £5 child</span></p>
          <p class="#">1000 Fri 18 October | Maximum 16 places <span class="orangeCopy">£10 adult £5 child</span></p>
            <br>
          <p class="orangeCopy">Please contact us if you wish to book for 6 or more people or for Schools. Workshops run for around 2 hours. Safety equipment provided.</p>
        </div>

        <div class="box21Input">
          <form id="formMarkyD" action="bookingProcessMarkyD.php" method="post" enctype="multipart/form-data">
            <p class="#"><strong>Places</strong><br>
            <input class="noMat" name="Oct10Meet" type="number" min="0" max="6" placeholder="No. places"/></p>
              <br>

            <p class="#"><strong>Adult<span style="margin-left: 63px">Child</span></strong><br>
            <input class="noMat" name="Oct15Adult" type="number" min="0" max="6" placeholder="No. places"/>
              <input class="noMat child" name="Oct15Child" type="number" min="0" max="6" placeholder="No. places"/><br>
            <input class="noMat" name="Oct17Adult" type="number" min="0" max="6" placeholder="No. places"/>
              <input class="noMat child" name="Oct17Child" type="number" min="0" max="6" placeholder="No. places"/><br>
            <input class="noMat" name="Oct18Adult" type="number" min="0" max="6" placeholder="No. places"/>
              <input class="noMat child" name="Oct18Child" type="number" min="0" max="6" placeholder="No. places"/><br>
            </p>

            <input class="waves-effect waves-orange btn-large" type="submit" name="submitMarkyD" value="Book MarkyD" />

          </form>
        <!-- end div.box21Input -->
        </div>
        <!-- end div.grid-six -->
        </div>

    </div>
  <!-- end collapsible 1 -->
  </li>

  <li>
    <div class="collapsible-header roseRule">

      <div class="grid-six">

        <div class="box20">
            <img src="img/galleryArtist4.png" alt="Alex Perez" class="exampleArtistWorkshop">
              <div class="bookings">
                  <h2 class="workshop">Book 'In conversation' with Morag Macleish<i class="material-icons orangeCopy">play_arrow</i></h2>
                  <p>1900 for 1930 Fri 1 November</p>
                  <h2 class="workshop">Book workshops with Morag Macleish<i class="material-icons orangeCopy">play_arrow</i></h2>
                  <p class="workshop">5 – 13 November</p>
              </div>
          </div>
          <div class="box21Quote">
            <p class="workshopCollapsible">  <img src="img/quotes.png" alt="monster quotes">&nbsp;&nbsp;Review of the last event do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad veniam, quis…</p>
          </div>
      <!-- end grid-six -->
      </div>
    <!-- close collapsible header -->
    </div>

    <div class="collapsible-body roseBRule">
      <div class="grid-six">
        <div class="box20Collapsible">
          <h2>In conversation with Morag Macleish</h2>
          <p class="#">Meet the artist 1900 for 1930 Fri 1 November <span class="orangeCopy">£10 per person</span></p>

          <h2 class="gallery">Glass workshops with Morag Macleish</h2>
          <p class="#">1400 Tue 5 November | Maximum 16 places <span class="orangeCopy">£10 adult £5 child</span></p>
          <p class="#">1400 Wednesday 6 November | Maximum 16 places <span class="orangeCopy">£10 adult £5 child</span></p>
          <p class="#">1000 Thursday 13 November | Maximum 16 places <span class="orangeCopy">£10 adult £5 child</span></p>
            <br>
          <p class="orangeCopy">Please contact us if you wish to book for 6 or more people or for Schools. Workshops run for around 2 hours. Safety equipment provided.</p>
        </div>

        <div class="box21Input">
          <form id="formMorag" action="bookingProcessMorag.php" method="post" enctype="multipart/form-data">
            <p class="#"><strong>Places</strong><br>
            <input class="noMat" name="Nov01Meet" type="number" min="0" max="6" placeholder="No. places"/></p>
              <br>

            <p class="#"><strong>Adult<span style="margin-left: 63px">Child</span></strong><br>
            <input class="noMat" name="Nov05Adult" type="number" min="0" max="6" placeholder="No. places"/>
              <input class="noMat child" name="Nov05Child" type="number" min="0" max="6" placeholder="No. places"/><br>
            <input class="noMat" name="Nov06Adult" type="number" min="0" max="6" placeholder="No. places"/>
              <input class="noMat child" name="Nov06Child" type="number" min="0" max="6" placeholder="No. places"/><br>
            <input class="noMat" name="Nov13Adult" type="number" min="0" max="6" placeholder="No. places"/>
              <input class="noMat child" name="Nov13Child" type="number" min="0" max="6" placeholder="No. places"/><br>
            </p>

            <input class="waves-effect waves-orange btn-large" type="submit" name="submitMorag" value="Book Morag" />

          </form>
        <!-- end div.box21Input -->
        </div>
        <!-- end div.grid-six -->
        </div>
  <!-- end collapsible 2 -->
	</div>

    <div class="collapsible-header purpleRule">

      <div class="grid-six">

        <div class="box20">
            <img src="img/galleryArtist1.png" alt="Alex Perez" class="exampleArtistWorkshop">
              <div class="bookings">
                    <h2 class="workshop">Book 'In conversation' with Alina Szapocznikow<i class="material-icons orangeCopy">play_arrow</i></h2>
                    <p>1900 for 1930 3 December</p>
                    <h2 class="workshop">Book workshops with Alina Szapocznikow<i class="material-icons orangeCopy">play_arrow</i></h2>
                    <p class="workshop">11 - 17 December</p>
              </div>
          </div>
          <div class="box21Quote">
            <p class="workshopCollapsible">  <img src="img/quotes.png" alt="monster quotes">&nbsp;&nbsp;Review of the last event do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad veniam, quis…</p>
          </div>
      <!-- end grid-six -->
      </div>
    <!-- close collapsible header -->
    </div>

    <div class="collapsible-body purpleBRule">

      <div class="grid-six">
        <div class="box20Collapsible">
          <h2>In conversation with Alina Szapocznikow</h2>
          <p class="#">Meet the artist 1900 for 1930 Tue 3 December <span class="orangeCopy">£10 per person</span></p>

          <h2 class="gallery">Glass workshops with Alina Szapocznikow</h2>
          <p class="#">1400 Wednesday 11 December | Maximum 16 places <span class="orangeCopy">£10 adult £5 child</span></p>
          <p class="#">1000 Friday 13 December | Maximum 16 places <span class="orangeCopy">£10 adult £5 child</span></p>
          <p class="#">1000 Tuesday 17 December | Maximum 16 places <span class="orangeCopy">£10 adult £5 child</span></p>
            <br>
          <p class="orangeCopy">Please contact us if you wish to book for 6 or more people or for Schools. Workshops run for around 2 hours. Safety equipment provided.</p>
        </div>

        <div class="box21Input">
          <form id="formAlina" action="bookingProcessAlina.php" method="post" enctype="multipart/form-data">
            <p class="#"><strong>Places</strong><br>
            <input class="noMat" name="Dec03Meet" type="number" min="0" max="6" placeholder="No. places"/></p>
              <br>

            <p class="#"><strong>Adult<span style="margin-left: 63px">Child</span></strong><br>
            <input class="noMat" name="Dec11Adult" type="number" min="0" max="6" placeholder="No. places"/>
              <input class="noMat child" name="Dec11Child" type="number" min="0" max="6" placeholder="No. places"/><br>
            <input class="noMat" name="Dec13Adult" type="number" min="0" max="6" placeholder="No. places"/>
              <input class="noMat child" name="Dec13Child" type="number" min="0" max="6" placeholder="No. places"/><br>
            <input class="noMat" name="Dec17Adult" type="number" min="0" max="6" placeholder="No. places"/>
              <input class="noMat child" name="Dec17Child" type="number" min="0" max="6" placeholder="No. places"/><br>
            </p>

            <input class="waves-effect waves-orange btn-large" type="submit" name="submitAlina" value="Book Alina" />

          </form>
        <!-- end div.box21Input -->
        </div>
        <!-- end div.grid-six -->
        </div>
    </div>
  <!-- end collapsible 3 -->
  </li>


</ul>


  </section>



  </main>


  <?php
      include("includes/footer.php");
  ?>
