<?php
//   if(isset($_POST['submit'])){
 
       $array = [
           [
              'email'=>'vicky@gmail.com',
              'password'=>'123456'
    
           ],
           [
               'email'=>'sankar@gmail.com',
               'password'=>'1234567'
           ],
           [
               'email'=>'cheran@gmail.com',
               'password'=>'12345678'
           ],
           [
               'email'=>'pravin@gmail.com',
               'password'=>'123456789'
           ]
        ];

        $email    = $_POST['email'];
        $password = $_POST['password'];
        
        $end = false;

        foreach($array as  $i_value){
            if( $i_value['email'] == $email && $i_value['password']== $password){
                $end = true;

            }
            
       
        }
        session_start();
        if($end){
            $_SESSION['val1'] = 'true';
           header('location:dashboard.php');
         }else{
            $_SESSION['val2'] = 'true';
            header('location:login.php');
         }

?>