<!--==========================
***** Navigation *****
===========================-->

<!-- content for mobile sidebar menu - must be outside and before navbar HTML or links won't work -->
<ul id="nav-mobile" class="sidenav">
  <li><a class="sidenav-close right"><i class=" material-icons">close</i></a></li>
  <li><a class="waves-effect" href="createAccount.php">Join GoMA Friends</a></li>
  <li><a class="waves-effect" href="logIn.php">Log in Friends</a></li>
  <li><div class="divider"></div></li>
  <li><a class="subheader">The Artists</a></li>
  <li><a class="waves-effect" href="meetArtist-1.php">Meet MarkyD</a></li>
  <li><a class="waves-effect" href="meetArtist-2.php">Meet Morag</a></li>
  <li><a class="waves-effect" href="meetArtist-3.php">Meet Alina</a></li>
  <li><a class="waves-effect" href="workshops.php">Workshops</a></li>
</ul>

<!-- Drop down menu content before data-target call-->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="meetArtist-1.php">Meet MarkyD</a></li>
  <li><a href="meetArtist-2.php">Meet Morag</a></li>
  <li><a href="meetArtist-3.php">Meet Alina</a></li>
  <li><a href="workshops.php">Workshops</a></li>
</ul>


<div class="navbar-fixed">

      <nav role="navigation">
        <div class="nav-wrapper">

          <a href="index.php" class="brand-logo"><img src="img/GoMAOnly-White.svg" alt="Gallery of Modern Art"></a>

          <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>

        <!-- desktop menu appearance -->
        <ul class="right hide-on-med-and-down">

          <!-- Dropdown Trigger for dropdown1 menu content -->
          <li><a class="dropdown-trigger" href="#" data-target="dropdown1">The Artists<i class="material-icons right">arrow_drop_down</i></a></li>

          <!-- Standard menu bar links -->
          <li><a href="createAccount.php">Join GoMA Friends</a></li>
          <li><a href="logIn.php">Log in Friends</a></li>

        </ul>

        <!-- end nav wrapper -->
        </div>
      </nav>

<!-- end navbar-fixed -->
</div>
