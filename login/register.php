<?php 
include'../view/header.php';

?>
<div class="contentWrapper"> 
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
        <article class="main">
            <main>
            	<h2>Register</h2>
				<form action="." method="post" >
					<input type="hidden" name="action" value="register">
					<table>
						<tr><td>Username</td>
						<td><input type="text" required="required" name="userName" value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>" maxlength="60"></td>
						</tr>
					 	<tr><td>First Name</td>
						<td><input type="text" required="required" name="firstName" value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?>"></td>
						</tr>
						<tr><td>Last Name</td>
						<td><input type="text" required="required" name="lastName" value="<?php if(isset($_POST['lastName'])) echo $_POST['lastName']; ?>"></td>
						</tr> 
						<tr><td>Password</td>
						<td><input type="password" required="required" name="password" value=""></td>
						</tr> 
					 	<tr><td>Confirm Password</td>
						<td><input type="password" required="required" name="password2" value=""></td>
						</tr>
						<tr><td>Email</td>
						<td><input type="text" required="required" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"></td>
						</tr>
						<tr><td>Phone</td>
						<td><input type="text" name="phone" value="<?php if(isset($_POST['phone'])) echo $_POST['phone']; ?>"></td>        
					</table>
            <?php $publickey = "6LcUjhoTAAAAAKRyoyZ14JBf_jtwppQhFnaltM7a"; // you got this from the signup page
            echo recaptcha_get_html($publickey); ?>
					<div>
						<input type="submit"  value="Register" >
					</div>
				</form>
				
				<div class="error">
					<?php if(!empty($error)) { echo $error; } ?>
				    <?php if(!empty($message)) { echo $message; } ?>
				</div>
			</main>
        </article><!-- end main article -->

       
</div><!-- end content wrapper -->

<?php include'../view/footer.php'; ?>