<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body align="center"> 
    <h1>Login</h1>
    <form action="app-login.php" method="post">
      email : <input type="email" name="email"> 
      <br>
      <br>
      password : <input type="password" name="num">
      <br>
      <br>
      <input type ="submit" value="login" name="submit">
    </form>
    <a href="index.php">Registration</a>
    <?php
    //   session_start();
    //   if($_SESSION['message']){
    //       echo $_SESSION['message'];
    //   }
    ?>
     
</body>
</html>