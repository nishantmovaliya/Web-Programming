<?php 

if(isset($_POST['submit'])){
    $text = $_POST['text'];
    echo "$text";
    $fp = fopen('data.txt', 'w');
    fwrite($fp, $text);
    fclose($fp);
    echo "<br>Data store or overwrite in txt file.";
}

?>