<html>
    <head>
        <title>Date</title>
        <style>
            body{
                background-color:gold;
                color:white;
            }
            .bg{ background-color:goldenrod;
                color:white; 
                font-size:22px;
                padding:10px}
            h1{text-align:center}
        </style>
    </head>
    <body>
        <h1 >Today's Date</h1>
        <center>
      <div class="bg">      
    <?php
    echo"Today is ".date("Y-m-d")."<br>";
    echo"Today is ".date("d/m/Y"). "<br>";
    echo"Today is ".date("l"). "<br>";
    ?>
    </center>
    </div>
    </body>
</html>