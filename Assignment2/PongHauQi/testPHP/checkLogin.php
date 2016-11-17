<?php
session_start ();

    $temp = password_hash($_SESSION ['pwd'], PASSWORD_BCRYPT, $options);
    //echo $temp;
    //echo $_SESSION['array'][$_SESSION['name']];
    //echo (password_verify ($_SESSION['pwd'], $temp)) ?"right":"wrong";
    if(password_verify ($_SESSION['country'], $_SESSION['array'][$_SESSION['name']])){
        $fp = fopen ( "log.html", 'a' );
        fwrite ( $fp, "<div class='msgln'><i>User " . $_SESSION ['name'] . " has joined the chat session.</i><br></div>" );
        fclose ( $fp );
        header("Location: index.php");
    }else{
        session_destroy ();
        header("Location: login.php?logfail=true");
    }

?>