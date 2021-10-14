<?php
 if(isset($_POST['submit'])){
  $post = $_POST['tex'];
   if(!$post){
      echo 'post is required';
   }else{
   $conn = mysqli_connect('localhost','root','','fb'); 
   session_start();
   $last= $_SESSION['message'];
     if($_POST['sel'] == 'public'){
        $first = 'public';
        $read = "INSERT INTO messages(text,user_id ,status)VALUES('$post','$last','$first')";
        $get = mysqli_query($conn,$read);
       }elseif($_POST['sel'] == 'private'){
         $second = 'private';
         $insert = "INSERT INTO messages(text,user_id ,status)VALUES('$post','$last','$second')";
         $put = mysqli_query($conn,$insert);
       }else{
        echo 'invalid';
     }
   } 
}
?>