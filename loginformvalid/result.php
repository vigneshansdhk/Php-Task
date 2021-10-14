<?php
 if(isset($_POST['submit'])){
     $name = $_POST['username'];
     if(!$name){
         echo 'name is required';
     }else{
         echo 'name===>'. $_POST['username'];
     }
     echo '<br>';
     //name end

    // email start
     $mail = $_POST['email'];
     if(!$mail){
         echo 'email is required';
     }else{
         echo 'email===>'.$_POST['email'];
     }
     echo '<br>';
    // email end

   // password start
     $password1 = $_POST['pass1'];
     $password2 = $_POST['pass2'];
     if(!$password1){
         echo 'password1 is required';
     }
     echo '<br>';
     if(!$password2){
        echo 'password2 is required';
    }
    if($password1 && $password2){
        if($password1 == $password2){
            echo 'password is correct'.'<br>'.$password1.'<br>'.$password2;
        }else{
            echo 'password is incorrect';
        }
    }
 }
?>