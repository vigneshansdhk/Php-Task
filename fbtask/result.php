<?php
    if(isset($_POST['submit'])){
        $username = $_POST['uname'];
        $email = $_POST['ename'];
        $password = $_POST['pass'];
        if(!$email){
            echo 'ename is required';
        }elseif(!$password){
            echo 'email is not required';
        }else{
            $conn = mysqli_connect('localhost','root','','fb');
            $insert = "INSERT INTO users(username,email,password)VALUES('$username','$email','$password')";
            $result = mysqli_query($conn,$insert);
        }
    }
?> 