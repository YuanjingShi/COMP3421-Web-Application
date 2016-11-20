<?php
include("constants.php");

// set variables
$tablename = "chessboard";

$link_id = mysql_connect('localhost', $username, $password);
mysql_select_db($dbase,$link_id);

// Create The Query And Specify the name of database to run query on
$query = "CREATE table $tablename (id MEDIUMINT(10) NOT NULL
AUTO_INCREMENT PRIMARY KEY, square VARCHAR(2) NOT NULL, piece VARCHAR(2) NOT NULL)";

$result = mysql_db_query ("$dbase", $query);

// set variables
$tablename = "messages";

$link_id = mysql_connect("localhost", "$username","$password");
mysql_select_db("$dbase",$link_id);

// Create The Query And Specify the name of database to run query on
$query = "CREATE table $tablename (id MEDIUMINT(10) NOT NULL
AUTO_INCREMENT PRIMARY KEY, messages text NOT NULL, dateentered datetime NOT NULL)";

$result = mysql_db_query ("$dbase", $query);

// set variables
$tablename = "moves";

$link_id = mysql_connect("localhost", "$username","$password");
mysql_select_db("$dbase",$link_id);

// Create The Query And Specify the name of database to run query on
$query = "CREATE table $tablename (id MEDIUMINT(10) NOT NULL
AUTO_INCREMENT PRIMARY KEY, moves VARCHAR(4) NOT NULL)";

$result = mysql_db_query ("$dbase", $query);

echo ("Chessboard and Messages tables are created.");
echo "<p>";
?>