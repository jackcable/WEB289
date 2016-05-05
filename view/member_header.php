<?php 
 include('../util/valid_member.php');
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>TuneOrater</title>
<link href="/TuneOrater/main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"href="main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="/tuneorater/js/coin-slider.min.js"></script>
    <link rel="stylesheet" href="/tuneorater/css/coin-slider-styles.css" type="text/css" />
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<div class="wrapper">
	<nav role="custom-dropdown">
		
		<ul >	
			<li><a href="/tuneorater/member/">Member Home</a></li>
			<li><a href="/tuneorater/member/account.php">Member Account</a></li>
		</ul>
		
	</nav>
	<header class="publicHeader">
	<div class="banner">
<img src="/TuneOrater/img/logo.png" alt="TuneOrater" class="logo">
</div>
	
	<div class="headWrapper">
        <div class="header">
            <div class="headerMain">
		<h1>TuneOrater</h1>
		<p>The place to vote on music!</p>
            
		<div class="nav-member-login">
			<p>You are <?php echo $_SESSION['member_firstName'] ; ?> logged in as <?php echo $_SESSION['member_userName']; ?>.</p>
	 		<form action="/TuneOrater/index.php" method="post">
	            <input type="hidden" name="action" value="logout">
	            <input class="button" type="submit" value="Logout">
	        </form>
	        </div>
	    </div>
	</header>