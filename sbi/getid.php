<?php
    $Dbconn = mysqli_connect('localhost','root','','sbi');
    $distict_id = "SELECT * FROM districts";
    $get_id = mysqli_query($Dbconn,$distict_id);
?>