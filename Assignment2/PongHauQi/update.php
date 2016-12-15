<?php
session_start();
$pre = "i am fucked";
$winCount = 0;
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

    $fp = fopen("user.txt", 'r');

    $fopenWin = fopen("winCount.txt",'a');
    fwrite($fopenWin,1);
    fclose($fopenWin);

    if ($fp) {
        $text = explode("\n", fread($fopen, filesize($file)));
    }
    fclose($fp);

    $fp1 = fopen("user.txt", 'a');
    $count = count($text);

    for($i = 0; $i < $count; $i++){
        list($user,$country,$winCount) = explode(" ", $text[$i]);
        if($user == $q){
            $winCount = intval($winCount) + 1;
            fwrite($fp1, $_SESSION['name']." ".$_SESSION ['country']." ".$winCount."\n");
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
    if(count($result) > 2){
        echo true;
    }else{
        echo false;
    }

}

//check winner usage
if($_GET['type'] == 5){
    $fopen = fopen("winCount.txt",'r');
    if($fopen){
        echo false;
    }else{
        echo false;
    }
}

//check if quit
if($_GET['type'] == 6){
    $temp = $_REQUEST["temp"];
    $fopen = fopen("quitCount.txt",'a');
    if($temp == "quit"){
        fwrite($fopen,"quit");
    }else if($temp == ""){
        if(0 == filesize( "quitCount.txt" )){
            echo true;
        }else{
            echo false;
        }
    }
}
?>
