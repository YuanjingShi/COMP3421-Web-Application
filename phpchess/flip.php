<?php
include("constants.php");
// open connection to the server and selects the database
$link_id = mysql_connect("localhost", "$username", "$password");
mysql_select_db("$dbase", $link_id);
// Create The Query And Specify the name of database to run query on
$query = "select * from chessboard where square = 'zz'";
$result = mysql_query ($query);

if ($result){
	$numOfRows = mysql_num_rows ($result);
	for ($i = 0; $i < $numOfRows; $i++){
		$id = mysql_result ($result, $i, 'id');

		$piece = mysql_result ($result, $i, 'piece');

		$zz = $piece;
	}
}else{
	echo mysql_errno() . ': ' . mysql_error() . '<BR>';
}

if ($zz == "w"){
	// Create The Query And Specify the name of database to run query on
	$query = "UPDATE chessboard
          Set piece = 'b'
          where square = 'zz'";
	$result = mysql_query ($query);
}

if ($zz == "b"){
	// Create The Query And Specify the name of database to run query on
	$query = "UPDATE chessboard
          Set piece = 'w'
          where square = 'zz'";
	$result = mysql_query ($query);
}

mysql_close($link_id);

header("Location: chessboard.php");
?>