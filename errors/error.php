<?php 
if(isset($_SESSION['admin'])) { 
    require_once('../util/valid_admin.php');
    include'../view/admin_header.php';
}else if(!isset($_SESSION['admin'])){
  include'../view/header.php';  
}
?>
<div class="mainWrapper">
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
			<h2>Error</h2>

			<!-- show errors if variable is passed -->
			<?php 
				if(!empty($error)){
					echo $error; 
				}else{
					echo'Return to home.';
				}
			?>
        </div><!-- end main article -->
        </div>


<!-- end content wrapper -->

<?php include'../view/footer.php'; ?>