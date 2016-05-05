<?php 
require_once('../util/valid_admin.php');
include('../view/admin_header.php');
include('../util/secure_conn.php');
?>
<div class="mainWrapper"> 
    <div class="columnWrapper">
    <div class="slider">
           <div id='coin-slider'>
      <a href="/tuneorater/img/tunorater.png" target="_blank">
        <img src='/tuneorater/img/tuneorater.png' >
        <span>
          Tune-O-Rater
        </span>
      </a>
      <a href="/tuneorater/img/Rock.png">
        <img src='/tuneorater/img/Rock.png' >
        <span>
          Rock
        </span>
      </a>
      <a href="/tuneorater/img/pop.png">
        <img src='tuneorater/img/pop.png' >
        <span>
          Pop
        </span>
      </a>
      <a href="/tuneorater/img/country.png">
        <img src='/tuneorater/img/country.png' >
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
				<h2>Administrator Login is Successful!</h2>
				<p>You are logged in as <?php echo $_SESSION['admin_firstName']; ?>.</p>
				<p>Go to the Administrators Management <a href="../admin/index.php">Page</a></p>	
			</main>
        </div><!-- end main div -->


</div><!-- end content wrapper -->
</div>
<?php include'../view/footer.php'; ?>
  