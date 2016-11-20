<html>
<head>
<title>PHP CHESS</title>
<meta http-equiv='refresh' content='7'>
<link rel="stylesheet" href="/styles/main.css" type="text/css">
<style>
A:visited { font-family: Arial, Helvetica, sans-serif; font-size: 7pt; color: #FF0000; text-decoration: none; font-weight: bold; background-color : transparent; } 

A:link { font-family: Arial, Helvetica, sans-serif; font-size: 7pt; color: #FF0000; text-decoration: none; font-weight: bold;  background-color : transparent; }  

A:hover { font-family: Arial, Helvetica, sans-serif; font-size: 7pt; color: #FF0000; text-decoration: underline; font-weight: bold; background-color : transparent; } 
</style>
</head>
<body background='images/animknot.gif'>
<br>
<!-- This routine determines the current point of view -->
<?php
include("constants.php");

// open connection to the server and selects the database
$link_id = mysql_connect("localhost", $username, $password);
mysql_select_db($dbase,$link_id);

// Create The Query And Specify the name of database to run query on
$query = "SELECT * FROM `chessboard` WHERE `square`='zz'";
$result = mysql_query ($query);


if ($result){

  $numOfRows = mysql_num_rows ($result);
  for ($i = 0; $i < $numOfRows; $i++){
  
  $id = mysql_result ($result, $i, 'id');

  $piece = mysql_result ($result, $i, 'piece');

  $zz = $piece;

}
}
else{
  echo mysql_errno().': '.mysql_error().'<BR>';
}

echo '<!-- White Side Of View -->';

if ($zz == 'w') {
?>
<div align='center'>
<table bgcolor='white' border='0'>
<tr>
<td>

<table background='images/animknot.gif' border='0' cellspacing='1' cellpadding='1'>

<tr>
<td width='25' height='25' align='right'><font face='arial'> 8 &nbsp; </font></td>
<td width='25' height='25' bgcolor='tan'><? $square=a8; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=b8; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=c8; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=d8; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=e8; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=f8; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=g8; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=h8; include("drawboard.php");?></td>
</tr>

<tr>
<td width='25' height='25' align='right'><font face='arial'> 7 &nbsp; </font></td>
<td width='25' height='25' bgcolor='#996633'><? $square=a7; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=b7; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=c7; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=d7; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=e7; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=f7; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=g7; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=h7; include("drawboard.php");?></td>
</tr>

<tr>
<td width='25' height='25' align='right'><font face='arial'> 6 &nbsp; </font></td>
<td width='25' height='25' bgcolor='tan'><? $square=a6; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=b6; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=c6; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=d6; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=e6; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=f6; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=g6; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=h6; include("drawboard.php");?></td>
</tr>

<tr>
<td width='25' height='25' align='right'><font face='arial'> 5 &nbsp; </font></td>
<td width='25' height='25' bgcolor='#996633'><? $square=a5; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=b5; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=c5; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=d5; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=e5; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=f5; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=g5; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=h5; include("drawboard.php");?></td>
</tr>



<tr>
<td width='25' height='25' align='right'><font face='arial'> 4 &nbsp; </font></td>
<td width='25' height='25' bgcolor='tan'><? $square=a4; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=b4; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=c4; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=d4; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=e4; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=f4; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=g4; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=h4; include("drawboard.php");?></td>
</tr>

<tr>
<td width='25' height='25' align='right'><font face='arial'> 3 &nbsp; </font></td>
<td width='25' height='25' bgcolor='#996633'><? $square=a3; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=b3; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=c3; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=d3; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=e3; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=f3; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=g3; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=h3; include("drawboard.php");?></td>
</tr>

<tr>
<td width='25' height='25' align='right'><font face='arial'> 2 &nbsp; </font></td>
<td width='25' height='25' bgcolor='tan'><? $square=a2; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=b2; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=c2; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=d2; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=e2; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=f2; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=g2; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=h2; include("drawboard.php");?></td>
</tr>

<tr>
<td width='25' height='25' align='right'><font face='arial'> 1 &nbsp; </font></td>
<td width='25' height='25' bgcolor='#996633'><? $square=a1; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=b1; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=c1; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=d1; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=e1; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=f1; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=g1; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=h1; include("drawboard.php");?></td>
</tr>

<tr>
<td width='25' height='25'> &nbsp; </td>
<td width='25' height='25' align='center'><font face='arial'> a </font></td>
<td width='25' height='25' align='center'><font face='arial'> b </font></td>
<td width='25' height='25' align='center'><font face='arial'> c </font></td>
<td width='25' height='25' align='center'><font face='arial'> d </font></td>
<td width='25' height='25' align='center'><font face='arial'> e </font></td>
<td width='25' height='25' align='center'><font face='arial'> f </font></td>
<td width='25' height='25' align='center'><font face='arial'> g </font></td>
<td width='25' height='25' align='center'><font face='arial'> h </font></td>
</tr>

</td>
</tr>
</table>

</table>
</div>
<? } ?>
<!-- This routine runs Black Side Point Of View -->
<?
if ($zz == 'b') {
?>
<div align='center'>
<table bgcolor='white' border='0'>


<tr>
<td>
<table background='images/animknot.gif' border='0' cellspacing='1' cellpadding='1'>
 <tr>
<td width='25' height='25' align='right'><font face='arial'> 1 &nbsp; </font></td>
<td width='25' height='25' bgcolor='tan'><? $square=h1; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=g1; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=f1; include("drawboard.php")?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=e1; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=d1; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=c1; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=b1; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=a1; include("drawboard.php");?></td>
</tr>

<tr>
<td width='25' height='25' align='right'><font face='arial'> 2 &nbsp; </font></td>
<td width='25' height='25' bgcolor='#996633'><? $square=h2; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=g2; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=f2; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=e2; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=d2; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=c2; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=b2; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=a2; include("drawboard.php");?></td>
</tr>

<tr>
<td width='25' height='25' align='right'><font face='arial'> 3 &nbsp; </font></td>
<td width='25' height='25' bgcolor='tan'><? $square=h3; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=g3; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=f3; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=e3; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=d3; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=c3; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=b3; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=a3; include("drawboard.php");?></td>
</tr>

<tr>
<td width='25' height='25' align='right'><font face='arial'> 4 &nbsp; </font></td>
<td width='25' height='25' bgcolor='#996633'><? $square=h4; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=g4; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=f4; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=e4; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=d4; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=c4; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=b4; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=a4; include("drawboard.php");?></td>
</tr>

<tr>
<td width='25' height='25' align='right'><font face='arial'> 5 &nbsp; </font></td>
<td width='25' height='25' bgcolor='tan'><? $square=h5; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=g5; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=f5; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=e5; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=d5; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=c5; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=b5; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=a5; include("drawboard.php");?></td>
</tr>

<tr>
<td width='25' height='25' align='right'><font face='arial'> 6 &nbsp; </font></td>
<td width='25' height='25' bgcolor='#996633'><? $square=h6; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=g6; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=f6; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=e6; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=d6; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=c6; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=b6; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=a6; include("drawboard.php");?></td>
</tr>

<tr>
<td width='25' height='25' align='right'><font face='arial'> 7 &nbsp; </font></td>
<td width='25' height='25' bgcolor='tan'><? $square=h7; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=g7; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=f7; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=e7; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=d7; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=c7; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=b7; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=a7; include("drawboard.php");?></td>
</tr>

<tr>
<td width='25' height='25' align='right'><font face='arial'> 8 &nbsp; </font></td>
<td width='25' height='25' bgcolor='#996633'><? $square=h8; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=g8; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=f8; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=e8; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=d8; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=c8; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='#996633'><? $square=b8; include("drawboard.php");?></td>
<td width='25' height='25' bgcolor='tan'><? $square=a8; include("drawboard.php");?></td>
</tr>

<tr>
<td width='25' height='25'> &nbsp; </td>
<td width='25' height='25' align='center'><font face='arial'> h </font></td>
<td width='25' height='25' align='center'><font face='arial'> g </font></td>
<td width='25' height='25' align='center'><font face='arial'> f </font></td>
<td width='25' height='25' align='center'><font face='arial'> e </font></td>
<td width='25' height='25' align='center'><font face='arial'> d </font></td>
<td width='25' height='25' align='center'><font face='arial'> c </font></td>
<td width='25' height='25' align='center'><font face='arial'> b </font></td>
<td width='25' height='25' align='center'><font face='arial'> a </font></td>
</tr>

</td>
</tr>
</table>

</table>
</div>
<? } ?>
<!-- Retrieves last move information -->
<?php

// Create The Query And Specify the name of database to run query on
$query = "SELECT * FROM `moves` ORDER BY `id` DESC LIMIT 1";
$result = mysql_query($query) or die(mysql_error());


if ($result){
	$numOfRows = mysql_num_rows ($result);
	for ($i = 0; $i < $numOfRows; $i++){
		$id = mysql_result($result, $i, "id");
		$moves = mysql_result($result, $i, "moves");
		?>
		<div align='center'>
		 <font face='arial' size='-2'>The last move was: <?=$moves;?></font>
		</div>
		<?
	}
}else{
  echo mysql_errno().": ".mysql_error()."<BR>";
}

mysql_close ($link_id);
?>

<div align='center'>
<form action='newgame.php' method='post'>
<input type='submit' value='Start A New Game >>'>
</form>
</div>

<div align='center'>
<form action='flip.php' method='post'>
<input type='submit' value='Flip Chess Board Side >>'>
</form>
</div>

</body>
</html>