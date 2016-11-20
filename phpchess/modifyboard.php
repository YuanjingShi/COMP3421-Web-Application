<?php
include("constants.php");

$modifypiece = $_POST['modifypiece'];
$modifiedsquare = $_POST['modifiedsquare'];

// open connection to the server and selects the database
$link_id = mysql_connect("localhost", $username, $password);
mysql_select_db($dbase, $link_id);
// Create The Query And Specify the name of database to run query on
$query = "UPDATE `chessboard` SET `piece`='$modifypiece' WHERE `square`='$modifiedsquare'";
$result = mysql_query($query) or die(mysql_error());

mysql_close($link_id);

// Use Header function to redirect
header("Location: chess.php");
?>