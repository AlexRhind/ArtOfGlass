<?php include("includes/headOnly.php");?>

<body class="formPagesImg" style="background-image: url(img/goma1.png);">

<?php include("includes/nav.php");?>

<main>

  <!--==========================
  ***** Create your account *****
  =========================== -->

<div class="friendsHeader">
  <img src="img/GoMAFriends-White.png" alt="" class="center">
  <h2 class="form">Create your account</h2>
</div>

<div class="formPageDiv" >

    <form action="createAccountProcess.php" method="post">

    		<input class="#" type="text" id="username" name="username" placeholder="Username" required/><br>

    		<input class="#" type="text" id="nickname" name="nickname" placeholder="Nickname" required/><br>
        <span class="error"> <?php echo $userNameRegAlready;?> </span>

    		<input type="password" class="#" id="password" name="password" required placeholder="Enter password"/><br>

    		<input type="password" class="#" id="repeatPassword" name="repeatPassword" required placeholder="Re-enter password"/>


        <!-- Modal Structure -->
        <div id="privacyModal" class="modal">
          <div class="modal-content">
            <h3 class="copyBlack">GoMA's Privacy Policy</h3>
            <p class="copyBlack">Sed do eiusssmod tempoor inncidunt ut labore et doflore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Sed do eiusssmod tempoor inncidunt ut labore et doflore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Sed do eiusssmod tempoor inncidunt ut labore et doflore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
          </div>
          <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-grey btn-flat">Agree</a>
          </div>
        </div>

            <br>
            <br>

    	  <label for="retailer">
            <input type="checkbox" class="filled-in" name="retailer" id="retailer" value="yes" >
            <span style = "color: #9e9e9e  !important; font-family: 'Barlow Semi Condensed', sans-serif  !important; font-size: 16px ;" >
              I agree to GoMA's <a href="#privacyModal" class="modal-trigger" style = "color: #9e9e9e; font-family: 'Barlow Semi Condensed', sans-serif; font-weight: 400; font-size: 16px; text-decoration: underline;" > Privacy Policy </a></span></label> <br>

        <!--pattern="[A-Za-z0-9]{8}"-->
    	<br>
    	<button class="waves-effect waves-orange btn-large orange centred100" type="submit" name="submit" >Register with us</button><!-- value="Register with us"  -->



    </form>

<br><br>

</div>
<p class="linksOtherPages"><a href="login.php">Already Friends? Go to login</a></p>

</main>

<?php
    include("includes/footer.php");
?>
