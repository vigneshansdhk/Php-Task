<?php
   $arr = [1,2,3,4,5,6,7,8,9,10];
  function add(){
     if($_POST['number']>10){
          continue;
     }
    echo $arr;
  }
  if(!empty($_POST['number'])){
      add();
  }
?>