<?php
//Sample Database Connection Syntax for PHP and MySQL.

//Connect To Database
$hostname="mysql.secureserver.net";
$username="jackcable123";
$password="Bengals2014!";
$dbname="jackcable123";
$usertable="tuneorater";
$yourfield = "artists";
$connection = mysql_connect($hostname, $username, $password);
mysql_select_db($dbname, $connection);

# Check If Record Exists

$query = "SELECT * FROM $usertable";

$result = mysql_query($query);

if($result)
{
while($row = mysql_fetch_array($result))
{
$name = $row["$yourfield"];
echo "Name: ".$name."
";
}
}
?>