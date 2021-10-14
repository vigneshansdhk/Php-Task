<?php
  function add($val1,$val){
      $total = ($val1/$val)*100;
      echo  round($total);
  }
  
//   print_r($_POST);
//   var_dump($_POST['sel']);
  if($_POST['sel'] == '1200'){
      add($_POST['number'],$_POST['sel']);
  }
   
  function sub($val1,$val){
    $total = ($val1/$val)*100;
    echo round($total);
}
if($_POST['sel'] == '500'){
    sub($_POST['number'],$_POST['sel']);
}
?>