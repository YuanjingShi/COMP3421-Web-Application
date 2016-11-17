<?php
$db = mysql_connect("mysql.comp.polyu.edu.hk", "13104584d", "vctmlgtx");
    //mysql_select_db("13104584d");
    //session_start();
    date_default_timezone_set("Asia/Hong_Kong");
if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    echo "Connected successfully (".$db->host_info.")";

?>
