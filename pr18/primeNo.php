<html>
    <head>
        <title>Prime Number</title>
    </head>
<body style="background-color:dodgerblue;color:white;font-size:24px">
   <?php
   function isPrime($num){
       if($num<=1){
           return 0;
       }
        for($i=2; $i<=$num/2;$i++){
        if($num%$i == 0){
            return 0;
            }
       }
       return 1;
   }

   $num = 23;
   $flag = isPrime($num);
   if($flag == 1){
       echo"$num is Prime Number.";
   }else {
    echo"$num is not Prime Number.";
   }
   ?>    
</body>
</html>