<?php
session_start ();

$file = "user.txt";
$fopen = fopen ( $file, "r");

if ($fopen) {
    $text = explode("\n", fread($fopen, filesize($file)));
}
fclose($fopen);
$count = count($text);
$_SESSION['array'] = array();
$_SESSION['user'] = array();
for($i=0;$i<$count;$i++){
    list($user,$country,$winCount) = explode(" ", $text[$i]);
    $_SESSION['user'][] = $user;
    $_SESSION['array'][$user] = $country;
    $_SESSION['array'][$user] = $winCount;
}
//echo in_array(henry,$text,true) ? 'It is here' : 'Sorry it is not';
//print_r($_SESSION['user']);
//print_r($_SESSION['array']["henry"]);



if (isset ( $_POST ['enter'] )) {
    if ($_POST ['name'] != "" && $_POST ['country'] != "") {
        $_SESSION ['name'] = stripslashes ( htmlspecialchars ( $_POST ['name'] ) );
        $_SESSION ['country'] = stripslashes ( htmlspecialchars ( $_POST ['country'] ) );
        //echo $_POST ['name'];
        if(in_array($_SESSION ['name'], $_SESSION['user'])){
            //echo $_SESSION['array'][$_SESSION['name']];
            header("Location: checkLogin.php");
            $_SESSION ['winCount'] = $_SESSION['array'][$_SESSION ['name']][1];
        }else{
            //echo '<span class="error">User is not registered!</span>';
            $fp1 = fopen ( $file, 'a' );
            fwrite ($fp1, $_SESSION ['name']." ".$_SESSION ["country"]." "."0"."\n");
            fclose ( $fp1 );
            $fp = fopen ( "log.html", 'a' );
            fwrite ( $fp, "<div class='msgln'><i>User " . $_SESSION ['name'] . " has joined the chat session.</i><br></div>" );
            fclose ( $fp );
            header("Location: PongHauQi.php");
        }

    } else {
        echo '<span class="error">Please input sth valid</span>';
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css" media="screen" />
<body>
 <div id="loginform">
   <form method="post">
       <p>Please enter your name to continue:</p>
       <label for="name">Name:</label>
       <input type="text" name="name" id="name" />
       <label for="country">Geo Info:</label>
       <input type="text" name="country" id="country" />
       <input type="submit" name="enter" id="enter" value="Enter" />
   </form>
   </div>
</body>
</head>
</html>
