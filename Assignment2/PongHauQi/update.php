<?php
session_start();
$pre = "i am fucked";

if($_GET['type'] == 1) {
    $q = $_REQUEST["q"];

    $fp = fopen("moves.txt", 'w+');
    $message = $q;
    fwrite($fp, $message);
    fclose($fp);
    $pre = $message;
}

if($_GET['type'] == 0){
    $fp = fopen("moves.txt", 'r+');
    $result = fread($fp,filesize("moves.txt"));
    fclose($fp);
    if($result == $pre){
        echo -1;
    }else{
        echo 1;
    }
}

if($_GET['type'] == 2){
    $fp = fopen("moves.txt", 'r+');
    $result = fread($fp,filesize("moves.txt"));
    fclose($fp);
    echo $result;
}

?>

