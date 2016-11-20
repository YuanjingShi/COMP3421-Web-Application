<html>
<head>
<title>PHP CHESS</title>
<meta http-equiv="refresh" content="10">
</head>

<body background="images/animknot.gif">

<hr>
<?php
include("constants.php");

// open connection to the server and selects the database
$link_id = mysql_connect('localhost', $username, $password);
mysql_select_db($dbase,$link_id);

// Create The Query And Specify the name of database to run query on
$query = "SELECT * FROM `messages` ORDER BY `id` DESC LIMIT 10";
$result = mysql_query($query);

if ($result){
	$numOfRows = mysql_num_rows ($result);
	for ($i = 0; $i < $numOfRows; $i++){

	$id = mysql_result ($result, $i, "id");
	$messages = mysql_result ($result, $i, "messages");
	$dateentered = mysql_result ($result, $i, "dateentered");

	echo "<font face='arial' size='-2'>";

	$month = substr($dateentered,5,2);
	$day = substr($dateentered,8,2);
	$year = substr($dateentered,2,2);
	$hour = substr($dateentered,11,2);
	$minutes = substr($dateentered,14,2);
	echo "$month/$day/$year $hour:$minutes&nbsp$messages</font>";
	echo "<br><hr>";
	}
}else{
	echo mysql_errno().": ".mysql_error()."<BR>";
}

mysql_close($link_id);
?>
</body>
</html>
