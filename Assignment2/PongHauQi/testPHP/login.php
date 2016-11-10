<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css" media="screen" />
<body>
<?php
session_start ();
$count = 0;
$array = array(
    "issac" => array(1),
    "henry" => array(2),
);
function loginForm() {
    echo '
   <div id="loginform">
   <form action="index.php" method="post">
       <p>Please enter your name to continue:</p>
       <label for="name">Name:</label>
       <input type="text" name="name" id="name" />
       <label for="country">Geo Info:</label>
       <input type="text" name="country" id="country" />
       <input type="submit" name="enter" id="enter" value="Enter" />
   </form>
   </div>
   ';
}
    loginForm();
    if (isset ( $_POST ['enter'] )) {
        if ($_POST ['name'] != "") {
            foreach ($array as $i => $value) {
                if($array[$i] == stripslashes ( htmlspecialchars ( $_POST ['name'] ) )){
                    $count = $count + 1;
             }
            }
            if($count == 0){
                $_SESSION ['name'] = stripslashes ( htmlspecialchars ( $_POST ['name'] ) );
                $array[] = $_SESSION ['name'];
                $fp = fopen ( "user.txt", 'a' );
                fwrite ( $fp, $_SESSION ['name'] . " has won". );
                fclose ( $fp );
            else{

            }


        } else {
            echo '<span class="error">Please type in a name</span>';
        }
    }
?>
</body>
</head>
</html>