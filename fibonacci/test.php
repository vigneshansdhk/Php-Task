<?php
     $num1 = 0;
     $num2 = 1;
     echo $num1."<br>";
     echo $num2."<br>";

     for($i=0;$i<=10;$i++){
         $num3 = $num1+$num2;
         if($num3 < 10 ){
              echo $num3."<br>";
         }
         $num1 = $num2;
         $num2 = $num3;
     }
      
?>