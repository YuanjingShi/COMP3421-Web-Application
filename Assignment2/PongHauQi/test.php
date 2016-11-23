<?php
session_start();
$file = "waiting.txt";

if($_SESSION['state'] <= 2){
    $fp = fopen ( $file, 'a' );
    fwrite($fp, $_SESSION['name']."\n");
    fclose($fp);
    $_SESSION['state'] += 1;
}else{
    echo "There are already two players in the game, please wait.";
}
?>
<html>
<head>
    <script>
        function checkOpponent(){
            var time = setInterval(function(){
                    //clearInterval(time);
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp=new XMLHttpRequest();
                    } else {  // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.open("GET", "update.php?type=4", false);
                    xmlhttp.send();
                    var temp = xmlhttp.responseText;
                    console.log(temp);
                if(temp == true){
                    window.location="PongHauQi.php";
                }
            },1000);
        }
    </script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src = googleUser.js></script>
</head>
<body>
<div id = "display"><?php
    //echo file_exists("waiting.txt");
    //if (file_exists ( "waiting,txt" ) == 1 && filesize ( "waiting.txt" ) > 0) {
        $handle = fopen ( "waiting.txt", "r" );
        $contents = fread ( $handle, filesize ( "waiting.txt" ) );
        fclose ( $handle );
        echo $contents."is waiting for opponent";
    //}
    ?></div>
<div id="map" style="width:500px;height:380px;"></div>
<p id = "code"></p>
<button id = "check" onclick = "checkOpponent()">Pairing!</button>
</body>
</html>