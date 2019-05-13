<?php
    include("includes/headerNav.php");
?>


<main>

  <!--==========================
  ***** Opening intro *****
  =========================== -->

<section class="#">

  <div class="grid-five">

      <div class="box10"><img src="img/tiko-giorgadze-525984-unsplash.png" alt="Marky D"></div>

      <div class="bgrdImgGrid center"><img src="img/ArtOfGlassWhite.png" alt="Art of glass logo"></div>
      <div class="bgrdBaubles"><img src="img/BaublesBlack.png" alt="Glass baubles"></div>

      <!-- holding box for gridMeetArtistTop -->
      <div class="box11">
        <h1 class="meetArtisth1"><strong>Morag Macleish</strong></h1>
        <h2 class="meetArtisth2">Join <strong>Morag Macleish</strong> at glassmaking workshops 10 Oct to 6 Nov</h2>
      </div>

      <div class="box13">
      <p class="meetArtist2">Sed do eiusssmod tempoor inncidunt ut labore et doflore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
      </div>


  </div>

</section>

  <!--
  Gallery row
  -------------------------------->

  <section class="roseBgrdNoPadding">

    <!--   Gallery row   -->
    <div class="grid-one">

        <div class="box15">
          <h3 class="gallery">Friends Priority booking now open</h3>
          <p class="#">Sed do etiulismod tempor incididunt ut labore et dolore magna aliqua. <br/></p>
          <a href="login.php" class="waves-effect waves-orange btn-large">Friends BOOK NOW</a>
          <br><br>
        </div>


        <?php
            include("includes/meetArtistGallery.php");
        ?>

      <!-- end grid-one -->
      </div>

  </section>

  <?php
      include("includes/offerBanner.php");
  ?>

  </main>

  <?php
      include("includes/footer.php");
  ?>
