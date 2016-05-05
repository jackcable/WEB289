<?php
global $db;
$debug = true;
	if ($_SERVER['HTTP_HOST'] == "localhost" OR $_SERVER['HTTP_HOST'] == "127.0.0.1") {
		$dsn = 'mysql:host=localhost;dbname=tuneorater';
		$username = 'ts_user';
		$password = 'pa55word';
	} else {
		$dsn = 'mysql:host=localhost;dbname=tuneorater';
		$username = 'ts_user';
		$password = 'pa55word';
	}

	try {
		$db = new PDO($dsn, $username, $password);
	} catch (PDOException $e) {
		echo 'please correct the database connection error';
		exit();
	}
?>
