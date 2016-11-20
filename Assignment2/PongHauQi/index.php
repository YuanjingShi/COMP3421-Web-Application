<?php
/**
 * Created by PhpStorm.
 * User: Isaac
 * Date: 11/21/16
 * Time: 12:00 AM
 */
session_start();
$_SESSION['name'] = "ads";

?>
<html lang="en">
<head>
    <title>Pong Hau Qi</title>
</head>
<p id="demo">This is a Pong Hau Qi game</p>
<p>Every turn you got:</p>
<p id="demo1">This is the timer</p>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
<script>
    function allowDrop(ev) {
        ev.preventDefault();

    }

    //function drag(ev) {
    //    ev.dataTransfer.setData("text", ev.target.id);
    //}

    function drop(ev) {
        ev.preventDefault();
        var data = ev.dataTransfer.getData("text");
        ev.target.appendChild(document.getElementById(data));
    }
</script>
<body>
<div id = "div0">

    <div id="div1" class = "false" ondrop="drop(event)" ondragover="allowDrop(event)">
        <img src="image1/piece4.png"  id="drag1">
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

<script>
    $("#drag1,#drag2,#drag3,#drag4").click(function(ev){
        var clientmsg = $("#drag1,#drag2,#drag3,#drag4").closest('div').attr('id');
        $.post("update.php", {text: clientmsg});
        return false;
    });

    $(function() {
        $("#drag1,#drag2,#drag3,#drag4").draggable({
            drag: function(ev) {
                ev.dataTransfer.setData("text", ev.target.id);
                var clientmsg = $("#drag1,#drag2,#drag3,#drag4").closest('div').attr('id');
                $.post("update.php", {text: clientmsg});
                return false;
            }
        });
    });
</script>
<div  style= "position: relative; height: 150px; width: 200px; left: 43%">
      <input type = "button"
             value = "start"
             />
      <input type = "button"
             value = "pause"
             />
      <input type = "button"
             value = "restart"
             />
</div>
</body>
</html>