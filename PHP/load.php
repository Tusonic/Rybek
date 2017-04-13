<?php
header('Access-Control-Allow-Origin: *');

$host="localhost"; // Host name 
$username="username"; // Mysql username 
$password="password"; // Mysql password 
$db_name="db_name"; // Database name 
$tbl_name="tbl_name"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Retrieve data from database 
$sql="SELECT name, score FROM ranking ORDER BY score DESC LIMIT 10";
$result=mysql_query($sql);

// Start looping rows in mysql database.
while($rows=mysql_fetch_array($result)){
echo $rows[0] . "|" . $rows[1] . "|";

// close while loop 
}

// close MySQL connection 
mysql_close();
?>