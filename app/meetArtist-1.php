<?php
    include("includes/headerNav.php");
?>


<main>

  <!--==========================
  ***** Opening intro *****
  =========================== -->

<section class="#">

  <div class="grid-five">

      <div class="box10"><img src="img/alex-iby-343837-unsplash.png" alt="Marky D"></div>

      <div class="bgrdImgGrid center"><img src="img/ArtOfGlassWhite.png" alt=""></div>

      <!-- holding box for gridMeetArtistTop -->
      <div class="box11">
        <h1 class="meetArtisth1 flow-text"><strong>Marky D</strong></h1>
        <h2 class="meetArtisth2 flow-text">Join <strong>Marky D</strong> at glassmaking workshops 15 – 18 October</h2>
      </div>

      <div class="box12">
        <img src="img/small1.png" alt="Alex Perez" class="exampleArtist">
        <img src="img/small4.png" alt="Alex Perez" class="exampleArtist">
        <img src="img/small5.png" alt="Alex Perez" class="exampleArtist">
      </div>

      <div class="box13">
      <p class="#">Sed do eiuismod tempor inncidunt ut labore et doflore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
      </div>



  </div>

</section>

  <!--
  Gallery row
  -------------------------------->

  <section class="smaltBlueBgrdNoPadding">

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
      </div>

  </section>

  <?php
      include("includes/offerBanner.php");
  ?>

  </main>


  <?php
      include("includes/footer.php");
  ?>
