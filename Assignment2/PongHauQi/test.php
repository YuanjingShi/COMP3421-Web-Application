<?php
session_start();
$file = "waiting.txt";


if($_SESSION['state'] == 0){
    $fp = fopen ( $file, 'a' );
    fwrite($fp, $_SESSION['name']."\n");
    fclose($fp);
    $_SESSION['state'] = 1;
}

print_r($_POST);
if($_POST['type'] == 4){

    $fopen = fopen ( "waiting.txt", "a");
    if ($fopen) {
        $result = explode("\n", fread($fopen, filesize("waiting.txt")));
    }
    //header ( "Location: PongHauQi.php" );
    echo $result;
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
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    //console.log("test");
                    xmlhttp.open("GET", "update.php?type=2", false);
                    var temp = xmlhttp.responseText;
                    xmlhttp.send();
                console.log(temp);
            },1000);
        }
    </script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src = googleUser.js></script>
</head>
<body>
<div id="map" style="width:500px;height:380px;"></div>
<p id = "code"></p>
<button id = "check" onclick = "checkOpponent()">Pairing!</button>
</body>
</html>