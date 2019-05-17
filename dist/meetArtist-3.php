<?php
    include("includes/headerNav.php");
?>


<main>

  <!--==========================
  ***** Opening intro *****
  =========================== -->

<section class="#">

  <div class="grid-five">

      <div class="bgrdImgGrid-page3 center"><img src="img/ArtOfGlassWhite.png" alt=""></div>

      <!-- holding box for gridMeetArtistTop -->
      <div class="box17">
        <h1 class="meetArtisth1"><strong>Alina Szapocznikow</strong></h1>
        <h2 class="meetArtisth2">Join <strong>Alina</strong> at glassmaking workshops 10 Oct to 6 Nov</h2>
      </div>

      <div class="box18">
        <img src="img/small5.png" alt="Alex Perez" class="exampleArtist">
        <img src="img/small6.png" alt="Alex Perez" class="exampleArtist">
        <img src="img/small4.png" alt="Alex Periez" class="exampleArtist">
      </div>

      <div class="box19">
      <p class="#">Sed do eiuismod tempor inncidunt ut laboure et doflore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
      </div>

      <div class="box16"><img src="img/michael-afonso-528807-unsplash.png" alt=""></div>


  </div>

</section>


  <!--
  Gallery row
  -------------------------------->

  <section class="purpleBgrdNoPadding">

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


      <!-- end box2 -->
      </div>

      <!-- end grid-one -->
      <!-- </div> -->

  </section>

  <?php
      include("includes/offerBanner.php");
  ?>

  </main>

  <?php
      include("includes/footer.php");
  ?>
