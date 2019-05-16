<!--==========================
***** Header nav *****
=========================== -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>

  <title>GoMA Art of Glass Exhibition</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <!-- Google Material Icons, Fonts Barlow semi-cond (body) cond (headings) Regular 400 and semi-bold 600-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:300,400,400i,600,600i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:300,400,400i,600,600i" rel="stylesheet">
  <!-- font-family: 'Barlow Condensed' OR 'Barlow Semi Condensed', sans-serif;-->

  <!-- Compiled and minified CSS, GoMA CSS - some adjustments are made to $primaryColor etc to framework -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="css/materializeGOMA.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <!-- Override for Materialize framework -->
  <link href="css/alex.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>

<body>


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
