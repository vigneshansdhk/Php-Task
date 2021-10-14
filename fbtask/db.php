<?php
  $conn = mysqli_connect('localhost','root','','fb');
  $select = "SELECT * FROM messages";
  $read = mysqli_query($conn,$select);
?>