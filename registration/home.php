<?php
   $name = "" ; $email = ""; $password = ""; $conf_password = "";
   //    
  if(isset($_POST['submit'])){
      $name = $_POST['character'];
      $email = $_POST['mail'];
      $password = $_POST['number'];
      $conf_password = $_POST['number2'];
      if(!$name){
        echo 'name is required';
     }elseif(!$email){
         echo 'email is required';
     }elseif(!$password ){
         echo 'pass1 is required';
     }elseif(!$conf_password){
         echo 'pass2 is required';
     }elseif($password && $conf_password){
       if($password != $conf_password){
           echo 'password is not same';
     }else{
         $conn = mysqli_connect('localhost','root','','login');
         $insert = "INSERT INTO users(username,email,password,con_password)VALUES('$name','$email','$password','$conf_password')";
         $query = mysqli_query($conn,$insert);
     }
   }
}
  
?>