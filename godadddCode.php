<?php
//Connect To Database
$hostname="mysql.secureserver.net";
$username="your_dbusername";
$password="your_dbpassword";
$dbname="your_dbusername";
$usertable="your_tablename";
$yourfield = "your_field";
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