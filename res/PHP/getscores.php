<?php
header('Access-Control-Allow-Origin: *');




$host="localhost"; // Host name 
$username="rybka"; // Mysql username 
$password="rybka"; // Mysql password 
$db_name="rybka"; // Database name 
$tbl_name="ranking"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Retrieve data from database 
$sql="SELECT * FROM ranking ORDER BY wynik DESC LIMIT 10";
$result=mysql_query($sql);

// Start looping rows in mysql database.
while($rows=mysql_fetch_array($result)){
echo $rows['nazwa'] . "|" . $rows['wynik'] . "|";

// close while loop 
}

// close MySQL connection 
mysql_close();
?>