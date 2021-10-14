<?php
   function add($num){
      $val1 = 0;
      $val2 = 1;
      for($i=0;$i<=$num;$i++){
          $val3 = $val1+$val2;
          echo $val3.'<br>';
          $val1 = $val2;
          $val2 = $val3;
      }
   }
   add($_POST['num']);
?>