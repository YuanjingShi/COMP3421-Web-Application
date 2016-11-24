<?php
session_start();
$_SESSION['turn'] = 0;
?>
<!doctype html>
<html lang="en">
<head>
    <title>Pong Hau Qi</title>
</head>
<p id="demo" style= "position:relative; left: 42%">This is a Pong Hau Qi game</p>
<p style= "position:relative; left: 44%">Every turn you got:</p>
<p id="demo1" style= "position:relative; left: 45%">This is the timer</p>
<p class="welcome" style= "position:relative; left: 45%">
    Welcome, <b><?php echo $_SESSION['name']; ?></b>
</p>
<style>
    #div1, #div2, #div3,#div4,#div5 {
        float: left;
        width: 74px;
        height: 74px;
        margin: auto;
        position: relative;

    }
    #div6, #div7, #div8, #div9{
        float: left;
        width: 74px;
        height: 74px;
        margin: auto;
        position: relative;

    }
    #div0 {
        position: relative;
        height: 228px;
        width: 228px;
        margin: auto;
        padding: 6px;
        background-image: url('image1/board1.png');
        background-size: contain;
    }
    #drag1, #drag2, #drag3, #drag4 {
        width: 80px;
        height: 80px;
    }


</style>

<script>

    //count variables
    var count = 0;
    var count1 = 0;
    var count2 = 0;
    var winCount = 0;

    //id variables
    var id1, id2= 0;
    var class1, class2 = 0;
    var turn = 0;

    //position array
    var position = new Array("div1","div2","div4","div5","div3");
    var prePosition, postPosition;

    //other vars
    var myTime;
    var value;


    function init(){
        //this is a initialize count
        start();
        count = 1;

    }

    function reloadPage(){
        location.reload();
    }

    function allowDrop(ev) {
        ev.preventDefault();
    }

    function drag(ev) {

        //when count is 0, game could not be started
        if(count == 1) {

            id1 = ev.target.id;
            class1 = ev.target.className;
            if (turn == 0) {
                if (id1 == "drag1" || id1 == "drag2") {
                    ev.dataTransfer.setData("text", id1);
                    turn = 1;
                    if (id1 == "drag1") {
                        count1 = 0;
                        prePosition = document.getElementById(position[0]);
                        position[4] = position[0];
                    } else {
                        count1 = 1;
                        prePosition = document.getElementById(position[1]);
                        position[4] = position[1];
                    }
                }
            } else if (turn == 1) {
                if (id1 == "drag3" || id1 == "drag4") {
                    ev.dataTransfer.setData("text", id1);
                    turn = 0;
                    if (id1 == "drag3") {
                        count2 = 0;
                        prePosition = document.getElementById(position[2]);
                        position[4] = position[2];
                    } else {
                        count2 = 1;
                        prePosition = document.getElementById(position[3]);
                        position[4] = position[3];
                    }
                }
            }
        }
        //console.log(prePosition.id);

    }

    function drop(ev) {
        ev.preventDefault();
        id2 = ev.target.id;
        class2 = ev.target.className;
        console.log(class2);
        console.log(prePosition.id);
        console.log(id2);
        console.log(checkIfDroppable(prePosition.id, id2));
        if (class2 == "true" && checkIfDroppable(prePosition.id, id2)) {
            var data = ev.dataTransfer.getData("text");
            ev.target.appendChild(document.getElementById(data));

            //reminder of Turns
            if (turn == 0) {
                document.getElementById("demo").innerHTML = "Player 1's turn";
                if (count2 == 0) {
                    position[2] = id2;
                    class2 = "false";
                    prePosition.className = "true";
                } else {
                    position[3] = id2;
                    class2 = "false";
                    prePosition.className = "true";
                }
            } else {
                //this part is for dual-player model
                document.getElementById("demo").innerHTML = "Player 2's turn";
                if (count1 == 0) {
                    position[0] = id2;
                    class2 = "false";
                    prePosition.className = "true";
                } else {
                    position[1] = id2;
                    class2 = "false";
                    prePosition.className = "true";
                }
            }

            alertWinner();
            //re-enter the timer if game need to be continued.
            if (winCount == 0) {
                start();
            }
            sendMove(prePosition.id, id2,data);
        }else if(class2 == "false"){
            alert("You can only drop piece on empty positions");
            reloadPage();
            quitThepage("quit");
        }else{
            alert("You cannot make this move");
            reloadPage();
            quitThepage("quit");
        }
    }


    function checkIfDroppable(x, y){
        if(x == "div1" && (y == "div3" || y == "div4")){
            return true;
        }else if(x == "div2" && (y == "div3" || y == "div5")){
            return true;
        }else if(x == "div3" && (y == "div1" || y == "div2" || y == "div4" || y == "div5" )){
            return true;
        }else if(x == "div4" && (y == "div1" || y == "div3" || y == "div5")) {
            return true;
        }else if(x == "div5" && (y == "div2" || y == "div3" || y == "div4")) {
            return true;
        }else{
            return false;
        }
    }


    function start () {
        clearInterval(myTime);
        // document.getElementById("demo").innerHTML = "Player 1's turn";
        value = 21;
        myTime = setInterval(displayTime, 1000);
    }

    function stop() {
        clearInterval(myTime);
        count = 0;
    }

    function alertTimeOut(){
        alert("Your time is out!");
        stop();
    }

    function alertWinner(){
        if((position[0] == "div1" && position[1] == "div4") || (position[0] == "div4" && position[1] == "div1")){
            if((position[2] == "div3" && position[3] == "div5") || (position[2] == "div5" && position[3] == "div3")) {
                alert("Player 2 is the winner!");
                stop();
                winCount = 1;
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }

                xmlhttp.open("GET", "update.php?type=3&p="+<?php
                        echo $_SESSION['name'];
                    ?>, false);
                xmlhttp.send();
            }
        }

        if((position[0] == "div2" && position[1] == "div5") || (position[0] == "div5" && position[1] == "div2")){
            if((position[2] == "div3" && position[3] == "div4") || (position[2] == "div4" && position[3] == "div3")) {
                alert("Player 2 is the winner!");
                stop();
                winCount = 1;
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }

                xmlhttp.open("GET", "update.php?type=3&p="+<?php
                    echo $_SESSION['name'];
                    ?>, false);
                xmlhttp.send();
            }
        }

        if((position[2] == "div1" && position[3] == "div4") || (position[2] == "div4" && position[3] == "div1")){
            if((position[0] == "div3" && position[1] == "div5") || (position[0] == "div5" && position[1] == "div3")){
                alert("Player 1 is the winner!");
                stop();
                winCount = 1;
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }

                xmlhttp.open("GET", "update.php?type=3&p="+<?php
                    echo $_SESSION['name'];
                    ?>, false);
                xmlhttp.send();
            }
        }

        if((position[2] == "div2" && position[3] == "div5") || (position[2] == "div5" && position[3] == "div2")){
            if((position[0] == "div3" && position[1] == "div4") || (position[0] == "div4" && position[1] == "div3")){
                alert("Player 1 is the winner!");
                stop();
                winCount = 1;
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }

                xmlhttp.open("GET", "update.php?type=3&p="+<?php
                    echo $_SESSION['name'];
                    ?>, false);
                xmlhttp.send();
            }
        }
    }
    function responsePHP(){
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        } else {  // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }

        xmlhttp.open("GET", "update.php?type=0", false);
        //console.log(xmlhttp.responseText);
        xmlhttp.send();
        return xmlhttp.responseText;
    }

    function update(){
        
        var time = setInterval(function(){
            var value = parseInt(responsePHP());
            if(value == -1){
                console.log("If moves.txt has not been changed");
            }else{
                //
                clearInterval(time);
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }

                xmlhttp.open("GET", "update.php?type=2", false);
                //console.log(xmlhttp.responseText);
                xmlhttp.send();
                var result = xmlhttp.responseText.split(",");
                makeMove(result[0],result[1],String(result[2]));

                //check if opponent wins the game first
                var check = checkWin();
                if(check == true){
                    alert("You lose!");
                    stop();
                    winCount = 1;
                }

                //check if opponent quit the game first
                var checkQuit = quitThepage();
                if(checkQuit == true){
                    alert("You lose!");
                    stop();
                    winCount = 1;
                }
            }
        },1000);
    }

    function makeMove(preId, postId, pieceID){
        //change the turn of current chess board
        if(turn == 0){
            document.getElementById("demo").innerHTML = "Player 2's turn";
            turn = 1;
        }else{
            document.getElementById("demo").innerHTML = "Player 1's turn";
            turn = 0;
        }
        //change the count of one side piece
        if(count1 = 1){
            count1 = 0;
        }else{
            count1 = 1;
        }
        //change the count of another side piece
        if(count2 = 1){
            count2 = 0;
        }else{
            count2 = 1;
        }
        var positionTemp;
        /*if(pieceID == "drag1"){
            console.log("same");
        }else{
            console.log("not same");
        }*/
        //console.log(pieceID);
        prePosition = document.getElementById(preId);
        var movingPiece = document.getElementById(pieceID);
        document.getElementById(postId).appendChild(movingPiece);

        //change the inside position array
        var preNum = returnPosition(preId);
        var postNum = returnPosition(postId);
        console.log(preNum);
        //console.log(postNum);

        //like two divs are exchanging their child imgs
        positionTemp = position[4];
        position[4] = position[preNum];
        position[preNum] = positionTemp;
        //console.log(position[preNum]);
        //console.log(position[4]);

        //prePosition is OK for drop
        //post position is not OK for drop
        document.getElementById(postId).className = "false";
        document.getElementById(preId).className = "true";

        //re-enter the timer if game need to be continued.
        if (winCount == 0) {
            start();
        }
    }

    function checkWin(){
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        } else {  // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }

        xmlhttp.open("GET", "update.php?type=5", false);
        //console.log(xmlhttp.responseText);
        xmlhttp.send();
        return xmlhttp.responseText;
        //alert("Player 2 is the winner!");
    }

    function returnPosition(divStr){
        if(divStr == "div1"){
            return 0;
        }else if(divStr == "div2"){
            return 1;
        }else if(divStr == "div3"){
            return 2;
        }else if(divStr == "div4"){
            return 3;
        }else if(divStr == "div5"){
            return 4;
        }
    }

    function quitThepage(message){
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        } else {  // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.open("GET","update.php?type=6&temp="+message,false);
        xmlhttp.send();
        return xmlhttp.responseText;
    }


    function sendMove(prePosition, postPosition, pieceID){
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        } else {  // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.open("GET","update.php?type=1&q="+prePosition+","+postPosition+","+pieceID+",1",false);
        xmlhttp.send();
        //update();
    }

</script>
<body>
<div id = "div0">

    <div id="div1" class = "false" ondrop="drop(event)" ondragover="allowDrop(event)">
        <img src="image1/piece4.png" draggable="true" ondragstart="drag(event)" id="drag1">
    </div>
    <div id="div6"></div>
    <div id="div2" class = "false" ondrop="drop(event)" ondragover="allowDrop(event)">
        <img src="image1/piece4.png" draggable="true" ondragstart="drag(event)" id="drag2" >
    </div>
    <div id="div7"></div>
    <div id="div3" class = "true" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <div id="div8"></div>
    <div id="div4" class = "false" ondrop="drop(event)" ondragover="allowDrop(event)">
        <img src="image1/piece3.png" draggable="true" ondragstart="drag(event)" id="drag3">
    </div>
    <div id="div9"></div>
    <div id="div5" class = "false" ondrop="drop(event)" ondragover="allowDrop(event)">
        <img src="image1/piece3.png" draggable="true" ondragstart="drag(event)" id="drag4" >
    </div>

</div>

<div  style= "position: relative; height: 150px; width: 200px; left: 43%">
    <input type = "button"
           value = "start"
           onclick = "init()"/>
    <input type = "button"
           value = "pause"
           onclick = "stop()"/>
    <input type = "button"
           value = "restart"
           onclick = "reloadPage()"/>
    <input type = "button"
           value = "update"
           onclick = "update()"/>
</div>

</body>
</html>
