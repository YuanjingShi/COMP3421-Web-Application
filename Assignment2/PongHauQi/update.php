<?php
session_start();
$pre = "i am fucked";

//sendMove() usage
if($_GET['type'] == 1) {
    $q = $_REQUEST["q"];

    $fp = fopen("moves.txt", 'w+');
    $message = $q;
    fwrite($fp, $message);
    fclose($fp);
    $pre = $message;
}

//responesPHP() usage
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

//update() usage
if($_GET['type'] == 2){
    $fp = fopen("moves.txt", 'r+');
    $result = fread($fp,filesize("moves.txt"));
    fclose($fp);
    echo (string)$result;
}

//alertWinner usage
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

//for test.php usage
if($_GET['type'] == 4){

    $fopen = fopen ( "waiting.txt", "r");
    if ($fopen) {
        $result = explode("\n", fread($fopen, filesize("waiting.txt")));
    }
    fclose($fopen);
    if(count($result) >= 2){
        echo true;
    }else{
        echo false;
    }

}



?>

