<?php
   if(isset($_POST['submit'])){
       $number = $_POST['num'];
        if(!$number){
            echo "name is required";
        }else{
            $conn = mysqli_connect('localhost','root','','password');
            // if($conn){
            //     echo 'connected';
            // }else{
            //     echo 'not connected';
            // }
          $insert = "INSERT INTO number(password)VALUES('$number')";
          $sql = mysqli_query($conn,$insert);
        }
   }
?>