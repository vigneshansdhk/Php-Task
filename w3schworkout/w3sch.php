<?php
   // echo date("y-m-d").'<br>';

   // echo date('y').'<br>';

   // echo date('h:i:sa').'<br>';
   // echo $_SERVER['PHP_SELF'];
   // echo "<br>";

   // echo $_SERVER['SERVER_NAME'];
   // echo "<br>";
                                 
   // echo $_SERVER['HTTP_HOST'];
   // echo "<br>";

   // echo $_SERVER['HTTP_REFERER'];
   // echo "<br>";
   
   // $age = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];
   // print_r($age);
//    echo '<br>';
//    echo $_SERVER['HTTP_USER_AGENT'];
// echo "<br>";
// echo $_SERVER['SCRIPT_NAME'];
   $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

   echo json_encode($age);
   
  
?>