<!-- This routine determines the current point of view -->
<?php
include("constants.php");
?>
<?php
// open connection to the server and selects the database
$link_id = mysql_connect("localhost", $username, $password);
mysql_select_db($dbase,$link_id);

// Create The Query

$query = "INSERT INTO chessboard VALUES(null, 'a1', 'wr')";
$result = mysql_query($query);

$query2 = "INSERT INTO chessboard VALUES(null, 'b1', 'wn')";
$result2 = mysql_query($query2);

$query3 = "INSERT INTO chessboard VALUES(null, 'c1', 'wb')";
$result3 = mysql_query($query3);

$query4 = "INSERT INTO chessboard VALUES(null, 'd1', 'wq')";
$result4 = mysql_query($query4);

$query5 = "INSERT INTO chessboard VALUES(null, 'e1', 'wk')";
$result5 = mysql_query($query5);

$query6 = "INSERT INTO chessboard VALUES(null, 'f1', 'wb')";
$result6 = mysql_query($query6);

$query7 = "INSERT INTO chessboard VALUES(null, 'g1', 'wn')";
$result7 = mysql_query($query7);

$query8 = "INSERT INTO chessboard VALUES(null, 'h1', 'wr')";
$result8 = mysql_query($query8);

$query9 = "INSERT INTO chessboard VALUES(null, 'a2', 'wp')";
$result9 = mysql_query($query9);

$query10 = "INSERT INTO chessboard VALUES(null, 'b2', 'wp')";
$result10 = mysql_query($query10);

$query11 = "INSERT INTO chessboard VALUES(null, 'c2', 'wp')";
$result11 = mysql_query($query11);

$query12 = "INSERT INTO chessboard VALUES(null, 'd2', 'wp')";
$result12 = mysql_query($query12);

$query13 = "INSERT INTO chessboard VALUES(null, 'e2', 'wp')";
$result13 = mysql_query($query13);

$query14 = "INSERT INTO chessboard VALUES(null, 'f2', 'wp')";
$result14 = mysql_query($query14);

$query15 = "INSERT INTO chessboard VALUES(null, 'g2', 'wp')";
$result15 = mysql_query($query15);

$query16 = "INSERT INTO chessboard VALUES(null, 'h2', 'wp')";
$result16 = mysql_query($query16);

$query17 = "INSERT INTO chessboard VALUES(null, 'a3', '')";
$result17 = mysql_query($query17);

$query18 = "INSERT INTO chessboard VALUES(null, 'b3', '')";
$result18 = mysql_query($query18);

$query19 = "INSERT INTO chessboard VALUES(null, 'c3', '')";
$result19 = mysql_query($query19);

$query20 = "INSERT INTO chessboard VALUES(null, 'd3', '')";
$result20 = mysql_query($query20);

$query21 = "INSERT INTO chessboard VALUES(null, 'e3', '')";
$result21 = mysql_query($query21);

$query22 = "INSERT INTO chessboard VALUES(null, 'f3', '')";
$result22 = mysql_query($query22);

$query23 = "INSERT INTO chessboard VALUES(null, 'g3', '')";
$result23 = mysql_query($query23);

$query24 = "INSERT INTO chessboard VALUES(null, 'h3', '')";
$result24 = mysql_query($query24);

$query25 = "INSERT INTO chessboard VALUES(null, 'a4', '')";
$result25 = mysql_query($query25);

$query26 = "INSERT INTO chessboard VALUES(null, 'b4', '')";
$result26 = mysql_query($query26);

$query27 = "INSERT INTO chessboard VALUES(null, 'c4', '')";
$result27 = mysql_query($query27);

$query28 = "INSERT INTO chessboard VALUES(null, 'd4', '')";
$result28 = mysql_query($query28);

$query29 = "INSERT INTO chessboard VALUES(null, 'e4', '')";
$result29 = mysql_query($query29);

$query30 = "INSERT INTO chessboard VALUES(null, 'f4', '')";
$result30 = mysql_query($query30);

$query31 = "INSERT INTO chessboard VALUES(null, 'g4', '')";
$result31 = mysql_query($query31);

$query32 = "INSERT INTO chessboard VALUES(null, 'h4', '')";
$result32 = mysql_query($query32);

$query33 = "INSERT INTO chessboard VALUES(null, 'a5', '')";
$result33 = mysql_query($query33);

$query34 = "INSERT INTO chessboard VALUES(null, 'b5', '')";
$result34 = mysql_query($query34);

$query35 = "INSERT INTO chessboard VALUES(null, 'c5', '')";
$result35 = mysql_query($query35);

$query36 = "INSERT INTO chessboard VALUES(null, 'd5', '')";
$result36 = mysql_query($query36);

$query37 = "INSERT INTO chessboard VALUES(null, 'e5', '')";
$result37 = mysql_query($query37);

$query38 = "INSERT INTO chessboard VALUES(null, 'f5', '')";
$result38 = mysql_query($query38);

$query39 = "INSERT INTO chessboard VALUES(null, 'g5', '')";
$result39 = mysql_query($query39);

$query40 = "INSERT INTO chessboard VALUES(null, 'h5', '')";
$result40 = mysql_query($query40);

$query41 = "INSERT INTO chessboard VALUES(null, 'a6', '')";
$result41 = mysql_query($query41);

$query42 = "INSERT INTO chessboard VALUES(null, 'b6', '')";
$result42 = mysql_query($query42);

$query43 = "INSERT INTO chessboard VALUES(null, 'c6', '')";
$result43 = mysql_query($query43);

$query44 = "INSERT INTO chessboard VALUES(null, 'd6', '')";
$result44 = mysql_query($query44);

$query45 = "INSERT INTO chessboard VALUES(null, 'e6', '')";
$result45 = mysql_query($query45);

$query46 = "INSERT INTO chessboard VALUES(null, 'f6', '')";
$result46 = mysql_query($query46);

$query47 = "INSERT INTO chessboard VALUES(null, 'g6', '')";
$result47 = mysql_query($query47);

$query48 = "INSERT INTO chessboard VALUES(null, 'h6', '')";
$result48 = mysql_query($query48);

$query49 = "INSERT INTO chessboard VALUES(null, 'a7', 'bp')";
$result49 = mysql_query($query49);

$query50 = "INSERT INTO chessboard VALUES(null, 'b7', 'bp')";
$result50 = mysql_query($query50);

$query51 = "INSERT INTO chessboard VALUES(null, 'c7', 'bp')";
$result51 = mysql_query($query51);

$query52 = "INSERT INTO chessboard VALUES(null, 'd7', 'bp')";
$result52 = mysql_query($query52);

$query53 = "INSERT INTO chessboard VALUES(null, 'e7', 'bp')";
$result53 = mysql_query($query53);

$query54 = "INSERT INTO chessboard VALUES(null, 'f7', 'bp')";
$result54 = mysql_query($query54);

$query55 = "INSERT INTO chessboard VALUES(null, 'g7', 'bp')";
$result55 = mysql_query($query55);

$query56 = "INSERT INTO chessboard VALUES(null, 'h7', 'bp')";
$result56 = mysql_query($query56);

$query57 = "INSERT INTO chessboard VALUES(null, 'a8', 'br')";
$result57 = mysql_query($query57);

$query58 = "INSERT INTO chessboard VALUES(null, 'b8', 'bn')";
$result58 = mysql_query($query58);

$query59 = "INSERT INTO chessboard VALUES(null, 'c8', 'bb')";
$result59 = mysql_query($query59);

$query60 = "INSERT INTO chessboard VALUES(null, 'd8', 'bq')";
$result60 = mysql_query($query60);

$query61 = "INSERT INTO chessboard VALUES(null, 'e8', 'bk')";
$result61 = mysql_query($query61);

$query62 = "INSERT INTO chessboard VALUES(null, 'f8', 'bb')";
$result62 = mysql_query($query62);

$query63 = "INSERT INTO chessboard VALUES(null, 'g8', 'bn')";
$result63 = mysql_query($query63);

$query64 = "INSERT INTO chessboard VALUES(null, 'h8', 'br')";
$result64 = mysql_query($query64);

$query65 = "INSERT INTO chessboard VALUES(null, 'zz', 'w')";
$result65 = mysql_query($query65);


?>