<html>
    <body style="background-color:dodgerblue;color:white;font-size:24px;text-align;center;">
        <?php
        if(isset($_POST["submit"])){
            $text = $_POST["text"];
            echo"$text";

            $fp = fopen('data.txt','w');
            fwrite($fp,$text);
            fclose($fp);
            echo"<br>Data store or Overwrite in text file. ";
        }
        ?>
    </body>
</html>