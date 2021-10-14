<?php
   if(isset($_POST['submit'])){
       $email=$_POST['ename'];
       $password = $_POST['pass'];
       if(!$email){
           echo 'email is required';
       }elseif(!$password){
           echo 'password is required';
       }else{
        $conn = mysqli_connect('localhost','root','','fb');
        // $read = "SELECT email,password FROM users";
        $read  = "SELECT id, email,password,username FROM users WHERE `email` = '$email' AND `password` = '$password'";
        $query = mysqli_query($conn,$read); 
        $row = mysqli_num_rows($query);
        if($row > 0){
        $output = mysqli_fetch_assoc($query);
         echo $output['id']."<br>".$output['username']."<br>".$output['email']."<br>".$output['password'];
         echo 'success'."<br>";
          session_start();
          $_SESSION['message'] = $output['id'];
          ?>
           <h1>POST</h1>
           <form action="dashboard.php" method="post">
           <input type="text" name="tex">
            <br>
            <br>
           <select name="sel">
            <option value="private">private</option>
            <option value="public">public</option>
           </select>
            <br>
            <br>
            <input type="submit" value="submit" name = "submit">
            <form>
            <?php                 
            ?>
          <?php
       }else{
           echo 'no corrected';
       }
        }
    }
?>