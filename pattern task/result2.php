<?php
   if(isset($_POST['submit'])){
       $number = $_POST['num'];
       if(!$number){
           echo 'email is required';
       }else{
           $conn = mysqli_connect('localhost','root','','password');
           $read = "SELECT password FROM number";
           $select = mysqli_query($conn,$read);
       }

       while($output = mysqli_fetch_assoc($select)){
               if($output['password'] == $number){
                   echo 'password unlock';
               }else{
                   echo 'password is invaild';
               }
      }
   }
?>