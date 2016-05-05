<?php include '../view/header.php'; ?>

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
     
     <div class=mainFormInput>
        <h2>Login/Register</h2>
    </div>
        <form action="." method="post" class="formInput">
          <input type="hidden" name="action" value="login">
          
          <label for="username">Username:</label>
          <input type="text"  name="userName" id="userName" size="30" placeholder="Please enter a Username" value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>">
          <br>
          <label for="password">Password:</label>
          <input type="password"  name="password" id="password" size="30" placeholder="Please enter a Password">
          <br>
          
          <button class="button" type="submit" value="Login">Login</button>
        </form>

        <form action="." method="post" class="formInput">
            <input type="hidden" name="action" value="register_form">
            <button class="button" type="submit" value="Resister Here">Register</button>
        </form> 
        

        <div class="error">
          <?php if(!empty($error)) { echo $error; } ?>
          <?php if(!empty($message)) { echo $message; } ?>
        </div>  
    
    
</div><!-- end main content --> 

<?php include '../view/footer.php'; ?>