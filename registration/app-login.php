<?php
  
   if(isset($_POST['submit'])){
       $name = $_POST['email'];
       $pass = $_POST['num'];
       if(!$name){
           echo 'name is required';
       }elseif(!$pass){
           echo 'password is required';
       }else{
           $conn = mysqli_connect('localhost','root','','login');
           // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
        //    $read = "SELECT email,password,username FROM users ";

           $sql  = "SELECT email,password,username FROM users WHERE `email` = '$name' AND `password` = '$pass'";
           $result = mysqli_query($conn,$sql);
           $rows   = mysqli_num_rows($result);
           if($rows > 0){
                $output = mysqli_fetch_assoc($result);
                session_start();
                $_SESSION['user'] = $output;
                header('Location: dashboard.php');
           } else {
               echo 'no';
            //    $_SERVER['message'] = 'Invalid Login details';
            //    header('Location : index.php');
           }
           
        }
    }
    echo "<a href = \"login.php\">logout</a>";
        
         

         
?>