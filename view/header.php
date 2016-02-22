<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
	<meta name="veiwport" content="width=device-width">
    <title>TuneOrater</title>
    <link rel="stylesheet" type="text/css"href="main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/coin-slider.min.js"></script>
    <link rel="stylesheet" href="css/coin-slider-styles.css" type="text/css" />

    
</head>

<!-- the body section -->
<body>
<header>
<div class="banner">
<img src="images/logo.png" alt="TuneOrater" class="logo">
    <div class="headerNav">
    <nav>
        <ul>
            <li><a href="login">Login/Register</a></li>
        </ul>
    </nav>
    </div>
</div>
    <div class="headWrapper">
        <div class="header">
            <div class="headerMain">
    <h1>Tune-O-Rater</h1>
    <p>The place to vote on music!</p>
            </div>
			<div class="slider">
			     <div id='coin-slider'>
      <a href="images/tunorater.png" target="_blank">
        <img src='images/tuneorater.png' >
        <span>
          Tune-O-Rater
        </span>
      </a>
      <a href="images/Rock.png">
        <img src='images/Rock.png' >
        <span>
          Rock
        </span>
      </a>
	    <a href="images/pop.png">
        <img src='images/pop.png' >
        <span>
          Pop
        </span>
      </a>
	    <a href="images/country.png">
        <img src='images/country.png' >
        <span>
          Country
        </span>
      </a>
    </div>
    
    
        <script type="text/javascript">
      $(document).ready(function() {
        $('#coin-slider').coinslider({ width: 570, navigation: true, delay: 5000 });
      });
    </script>
	</div>
	<div class="navWrapper">
  <ul class="mainNav">
    <li><a href="index.php" class="homeLink">Home<span></span></a></li>
    <li><a href="music/index.php" class="musicLink">Music<span></span></a></li>
    <li><a href="artists_manager/index.php">Artists<span></span></a></li>
    <li></li>
  </ul>
</div>

    </div>
	
</header>
