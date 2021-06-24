<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fibbonacci</title>
</head>
<body style="background-color:dodgerblue;color:white;font-size:24px;text-align;center;">
    <h1>Fibbonacci</h1>
    <?php
    $num1 =1;
    $num2 =1;
    $ans = 0;
    echo "1<br>";
    for ($i=1; $i <= 10 ; $i++) {
    $ans = $num1 + $num2;
    echo $ans,"<br>";
    $num1 =$num2;
    $num2 = $ans;
    }
    ?>
</body>
</html>