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

if($_GET['type'] == 3){
    $q = $_REQUEST["q"];
    $fp = fopen("user.txt", 'r');
    if ($fp) {
        $text = explode("\n", fread($fopen, filesize($file)));
    }
    fclose($fp);

    $fp1 = fopen("user.txt", 'a');
    $count = count($text);

    for($i = 0; $i < $count; $i++){
        list($user,$country,$winCount) = explode(" ", $text[$i]);
        $winCount = intval($winCount) + 1;
        if($user == $q){
            fwrite($fp1, $_SESSION['name']." ".$_SESSION ["country"]." ".$winCount."\n");
        }else{
            fwrite($fp1, $text[$i]);
        }
    }
    fclose($fp1);
}



?>

