<?php
include("constants.php");
$message = addslashes($_POST['message']);
// this routine enters message into database

$link_id = mysql_connect("localhost", $username,$password);
mysql_select_db($dbase,$link_id);

$query = "INSERT INTO `messages` (`id`,`messages`,`dateentered`) VALUES(NULL, '$message', now())";

// run the query
$result = mysql_query($query);

// Use Header function to redirect
header("Location: chess.php");
?>