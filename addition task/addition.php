<?php
  if(isset($_POST['submit'])){
   $num1=  $_POST['add'];
   $num2 = $_POST['add1'];
   $sum = $num1 + $num2;
   echo $sum;
  }
  ?> 

  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>ADDITION</title>
  </head>
  <body>
  <form action="" method ="post">

   <input type="text" id="mail" name="add" value=""><br>
   <input type="text" id="mail" name="add1" value=""><br>
   
   <input type="submit" value="Submit" name="submit">
  </body>
  </html>