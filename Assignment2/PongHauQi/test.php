<?php
session_start();
$file = "waiting.txt";
$state = 0;

$fp = fopen ( $file, 'w+' );
if($fp) {
    $count = fread($fp, filesize($file));
    $count = intval($count) + 1;
    fwrite($fp, $count);
    fclose($fp);
}else{
    fwrite($fp, "1");
    fclose($fp);
}



if($_GET['type'] == 2){
    $fp1 = fopen($file, 'r+');
    $result = fread($fp1,filesize($file));
    if(intval($result) == 2){
        header("Location: PongHauQi.php");
    }
    fclose($fp1);
}
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
                    console.log(xmlhttp.responseText);
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