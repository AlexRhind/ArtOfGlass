<?php include("includes/headOnly.php");?>

<body class="formPagesImg" style="background-image: url(img/goma4.png);">

<?php include("includes/nav.php");?>

<main>

  <!--==========================
  ***** Create your account *****
  =========================== -->

<div class="friendsHeader">
  <img src="img/GoMAFriends-White.png" alt="" class="center">
  <h2 class="form">Sign into your account</h2>
</div>

<div class="formPageDiv" >

  <form action="loginProcess.php" method="post">
  <p><input type="text" name="username" required placeholder="Enter username"/></p>
  <p><input type="password" name="password" required placeholder="Enter password"/></p>
        <!--pattern="[A-Za-z0-9]{8}"-->
	<br>
	<button class="waves-effect waves-orange btn-large orange centred100" type="submit" name="submit" >Log in</button><!-- value="Register with us"  -->
  </form>
    	<br><br>
</div>

<p class="linksOtherPages"><a href="createAccount.html">Joining GoMA Friends? Go to register</a></p>


</main>



<?php
    include("includes/footer.php");
?>
