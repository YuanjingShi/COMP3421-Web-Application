<?php
include("constants.php");

// open connection to the server and selects the database
$link_id = mysql_connect('localhost', $username, $password);
mysql_select_db($dbase, $link_id);

// Create The Query And Specify the name of database to run query on
$query = "select * from chessboard where square = '$square'";
$result = mysql_query($query);

if ($result){

  $numOfRows = mysql_num_rows ($result);
  for ($i = 0; $i < $numOfRows; $i++){
  $piece = mysql_result ($result, $i, "piece");

}

if ($piece == "wr"){
echo  "<img src=\"images/wr.gif\">";
}

if ($piece == "wn"){
echo  "<img src=\"images/wn.gif\">";
}

if ($piece == "wb"){
echo  "<img src=\"images/wb.gif\">";
}

if ($piece == "wq"){
echo  "<img src=\"images/wq.gif\">";
}

if ($piece == "wk"){
echo  "<img src=\"images/wk.gif\">";
}

if ($piece == "wp"){
echo  "<img src=\"images/wp.gif\">";
}

if ($piece == ""){
echo  "<img src=\"images/blank.gif\">";
}

if ($piece == "br"){
echo  "<img src=\"images/br.gif\">";
}

if ($piece == "bn"){
echo  "<img src=\"images/bn.gif\">";
}

if ($piece == "bb"){
echo  "<img src=\"images/bb.gif\">";
}

if ($piece == "bq"){
echo  "<img src=\"images/bq.gif\">";
}

if ($piece == "bk"){
echo  "<img src=\"images/bk.gif\">";
}

if ($piece == "bp"){
echo  "<img src=\"images/bp.gif\">";
}

}else{
  echo mysql_errno().": ".mysql_error()."<BR>";
}
?>