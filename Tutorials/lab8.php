<!DOCTYPE html>
<html>
    <body>

            <?php
                echo "Hello COMP3421！";

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "COMP, 3421\n";
fwrite($myfile, $txt);
$txt = "Javascript, Ajax\n";
fwrite($myfile, $txt);
fclose($myfile);

$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
// end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);


$user = "1";
$first = "2";
$last = "3";

$file = "newfile.txt";

$json = json_decode(file_get_contents($file),true);

$json[$user] = array("first" => $first, "last" => $last);

file_put_contents($file, json_encode($json));

?>

    </body>
</html>
