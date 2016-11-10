

<?php
function process($c,$d = 25){
global $e;
$retval = $c + $d - 25 - $e;
return $retval;
}
$e = 10;
echo process(5);
?>