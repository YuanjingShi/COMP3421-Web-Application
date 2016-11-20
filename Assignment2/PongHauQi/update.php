<?php
session_start();
include ("constants.php");

if($_SESSION['turnCount'] == 1){
    $text = $_POST['text'];

    $fp = fopen("log.html", 'a');
    fwrite($fp, "<div class='msgln'>(".date("g:i A").")
    <b>".$_SESSION['name']."
    </b>: ".stripslashes(htmlspecialchars($text))."
    <br></div>");
    fclose($fp);
}

$playerCount = 0;

echo $username;
 ?>
positionpositionpositionposition