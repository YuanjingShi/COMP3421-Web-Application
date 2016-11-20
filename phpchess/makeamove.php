<?php
include("constants.php");

$move = $_POST['move'];
$from = substr($move, 0, 2);
$to = substr($move, 2, 2);
// echo "<!-- Determine the type of piece being moved -->";
// open connection to the server and selects the database
$link_id = mysql_connect('localhost', $username, $password) or die(mysql_error());
mysql_select_db($dbase, $link_id) or die(mysql_error());
// Create The Query And Specify the name of database to run query on
$query = "SELECT * FROM `chessboard` WHERE `square`='$from'";
$result = mysql_query ($query) or die(mysql_error());
if ($result){
	while($r = mysql_fetch_array($result)){
		$id = $r['id'];
		$piecebeingmoved = $r['piece'];
	} // while
}else{
	echo mysql_errno() . ": " . mysql_error() . "<BR>";
	exit;
}
//die($piecebeingmoved . "ERROR!");
// echo "<!--  Update the square information with the new occupying piece type -->";
// Create The Query And Specify the name of database to run query on

$query = "UPDATE `chessboard` SET `piece`='$piecebeingmoved' WHERE `square`='$to'";
$result = mysql_query($query) or die(mysql_error());

// echo "<!-- Clears the square where the moving piece originated from, and this square will now be empty -->";

// Create The Query And Specify the name of database to run query on
$query = "UPDATE `chessboard` SET `piece`='' WHERE `square`='$from'";
$result = mysql_query($query) or die(mysql_error());
// echo "<!-- Inserts move into moves table -->";
$query = "INSERT INTO `moves` (`id`,`moves`) VALUES(NULL, '$move')";
$result = mysql_query($query) or die(mysql_error());

mysql_close($link_id);

// Use Header function to redirect
header("Location: chess.php");
?>