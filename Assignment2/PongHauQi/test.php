<?php
session_start();
$file = "waiting.txt";


if($_SESSION['state'] == 0){
    $fp = fopen ( $file, 'a' );
    fwrite($fp, $_SESSION['name']."\n");
    fclose($fp);
    $_SESSION['state'] = 1;
}

    print_r($_GET);
if($_GET['type'] == 2){

    $fopen = fopen ( $file, "a");
    if ($fopen) {
    $result = explode("\n", fread($fopen, filesize($file)));
    }
    
    $count = 3;
    header("Location: PongHauQi.php");
    fclose($fopen);
}
//print_r("ajax");

?>

<html>
<head>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src = googleUser.js></script>
    <script>
        function checkOpponent(){
            var time = setInterval(function(){
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp=new XMLHttpRequest();
                    } else {  // code for IE6, IE5
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.open("GET", "test.php?type=2", false);
                    xmlhttp.send();

            },1000);
        }
    </script>
</head>
<body>
<div id="map" style="width:500px;height:380px;"></div>
<p id = "code"></p>
<button id = "check" onclick = "checkOpponent()">Pairing!</button>
</body>
</html>