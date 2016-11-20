<?php
session_start();

if(isset($_SESSION['name'])){
    $text = $_POST['text'];

    $fp = fopen("test.php", 'a');
    fwrite($fp, $text);
    fclose($fp);
}

?>

<script>
    console.log(<? echo $text; ?>);
</script>
