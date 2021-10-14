<?php
function add($num){
    $val1 = 0;
    $val2 = 1;
    echo $val1.'<br>';
    echo $val2.'<br>';
   
    for($i=3;$i<=$num;$i++){
           $fibo = $val1 + $val2;
           if($fibo < $_POST['num']){
           echo $fibo.'<br>';
           $val1 = $val2;
           $val2 = $fibo;
        } 
}
}
 if(!empty($_POST['num'])){
     add($_POST['num']);
 }else{
     echo 'please enter a value';
 } 
?>