<?php
  
  session_start();
  print_r($_SESSION);
  echo "yourname===>".$_SESSION['user']['username']."<br>";
  echo "youremail===>".$_SESSION['user']['email']."<br>";
  echo "yourpassword===>".$_SESSION['user']['password']."<br>";

         
?>