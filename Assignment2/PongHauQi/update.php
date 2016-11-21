<?php
session_start();

$q=$_REQUEST["q"];

$fp = fopen("moves.php", 'a');
fwrite($fp, $q);
fclose($fp);

?>

