<?php
include("constants.php");

echo '<!-- This routine clears the board and sets up for a new game -->
<!-- ROW  1 -->';

// open connection to the server and selects the database
$link_id = mysql_connect('localhost', $username, $password);
mysql_select_db($dbase, $link_id);

$query = "UPDATE `chessboard`
          SET `piece`='wr'
          WHERE `square`='a1'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`='wn'
          WHERE `square`='b1'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`='wb'
          WHERE `square`='c1'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`='wq'
          WHERE `square`='d1'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`='wk'
          WHERE `square`='e1'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`='wb'
          WHERE `square`='f1'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`='wn'
          WHERE `square`='g1'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`='wr'
          WHERE `square`='h1'";
$result = mysql_query($query);

echo '<!-- ROW 2 -->';

$query = "UPDATE `chessboard`
          SET `piece`='wp'
          WHERE `square`='a2'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`='wp'
          WHERE `square`='b2'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`='wp'
          WHERE `square`='c2'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`='wp'
          WHERE `square`='d2'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`='wp'
          WHERE `square`='e2'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`='wp'
          WHERE `square`='f2'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`='wp'
          WHERE `square`='g2'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`='wp'
          WHERE `square`='h2'";
$result = mysql_query($query);

echo '<!-- Row 3 -->';

$query = "UPDATE `chessboard`
          SET `piece`=' '
          WHERE `square`='a3'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`=' '
          WHERE `square`='b3'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`=' '
          WHERE `square`='c3'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`=' '
          WHERE `square`='d3'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`=' '
          WHERE `square`='e3'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`=' '
          WHERE `square`='f3'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`=' '
          WHERE `square`='g3'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`=' '
          WHERE `square`='h3'";
$result = mysql_query($query);

echo '<!-- Row 4 -->';

$query = "UPDATE `chessboard`
          SET `piece`=' '
          WHERE `square`='a4'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`=' '
          WHERE `square`='b4'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`=' '
          WHERE `square`='c4'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`=' '
          WHERE `square`='d4'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`=' '
          WHERE `square`='e4'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`=' '
          WHERE `square`='f4'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`=' '
          WHERE `square`='g4'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`=' '
          WHERE `square`='h4'";
$result = mysql_query($query);

echo '<!-- Row 5 -->';

$query = "UPDATE `chessboard`
          SET `piece`=' '
          WHERE `square`='a5'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`=' '
          WHERE `square`='b5'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`=' '
          WHERE `square`='c5'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`=' '
          WHERE `square`='d5'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`=' '
          WHERE `square`='e5'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`=' '
          WHERE `square`='f5'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`=' '
          WHERE `square`='g5'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`=' '
          WHERE `square`='h5'";
$result = mysql_query($query);

echo '<!-- Row 6 -->';

$query = "UPDATE `chessboard`
          SET `piece`=' '
          WHERE `square`='a6'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`=' '
          WHERE `square`='b6'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`=' '
          WHERE `square`='c6'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`=' '
          WHERE `square`='d6'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`=' '
          WHERE `square`='e6'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`=' '
          WHERE `square`='f6'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`=' '
          WHERE `square`='g6'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`=' '
          WHERE `square`='h6'";
$result = mysql_query($query);

echo '<!-- Row 7 -->';

$query = "UPDATE `chessboard`
          SET `piece`='bp'
          WHERE `square`='a7'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`='bp'
          WHERE `square`='b7'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`='bp'
          WHERE `square`='c7'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`='bp'
          WHERE `square`='d7'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`='bp'
          WHERE `square`='e7'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`='bp'
          WHERE `square`='f7'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`='bp'
          WHERE `square`='g7'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`='bp'
          WHERE `square`='h7'";
$result = mysql_query($query);

echo '<!-- Row 8 -->';

$query = "UPDATE `chessboard`
          SET `piece`='br'
          WHERE `square`='a8'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`='bn'
          WHERE `square`='b8'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`='bb'
          WHERE `square`='c8'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`='bq'
          WHERE `square`='d8'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`='bk'
          WHERE `square`='e8'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`='bb'
          WHERE `square`='f8'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`='bn'
          WHERE `square`='g8'";
$result = mysql_query($query);

$query = "UPDATE `chessboard`
          SET `piece`='br'
          WHERE `square`='h8'";
$result = mysql_query($query);

mysql_close($link_id);
?>
<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
window.location="chessboard.php";
// End -->
</script>
<noscript>