<?php 
require_once('../util/valid_member.php');
include('../view/member_header.php');
include('../util/secure_conn.php');
?>
<div class="mainWrapper"> 
    <div class="columnWrapper">
    <div class="slider">
           <div id='coin-slider'>
      <a href="/TuneOrater/img/tunorater.png" target="_blank">
        <img src='/TuneOrater/img/TuneOrater.png' >
        <span>
          Tune-O-Rater
        </span>
      </a>
      <a href="/TuneOrater/img/Rock.png">
        <img src='/TuneOrater/img/Rock.png' >
        <span>
          Rock
        </span>
      </a>
      <a href="/TuneOrater/img/pop.png">
        <img src='TuneOrater/img/pop.png' >
        <span>
          Pop
        </span>
      </a>
      <a href="/TuneOrater/img/country.png">
        <img src='/TuneOrater/img/country.png' >
        <span>
          Country
        </span>
      </a>
        </div>
    </div>
<script type="text/javascript">
  $(document).ready(function() {
    $('#coin-slider').coinslider();
  });
</script>	

        <!-- main content goes here -->
        <div class="conNotes">
            <main>
				<h2>Member Login is Successful!</h2>
				<p>You are logged in as <?php echo $_SESSION['member_userName']; ?>.</p>
				<p>Welcome  <?php echo $_SESSION['member_firstName']; ?>.</p>  



				<p>Go to the Member Management <a href="/TuneOrater/member/">Page</a></p>
				
			</main>
        </div><!-- end main div -->


<?php include'../view/footer.php'; ?>