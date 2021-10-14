<?php
      function add($num){
       $val1 = 0;
       $val2 = 1;
       echo $val1 ."<br>";
       echo $val2 ."<br>";
      for($i=3;$i<=$num;$i++){
          $val3 = $val1+$val2;
          if($val3<$_POST['num']){
              echo $val3."<br>";
              $val1 = $val2;
              $val2 = $val3;
          }
      }
   }
   if(!empty($_POST['num'])){
  add($_POST['num']);
   }
?>