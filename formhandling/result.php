<?php
 if(isset($_POST['submit'])){
    $name = $_POST['username'];
    if(!$name){
        echo 'please enter your name';
    }else{
        echo 'Your Name===>'.$name.'<br>';
    }
    echo '<br>';
    //user name end --->

    // email start --->

    $mail = $_POST['email'];
    if(!$mail){
        echo 'please enter your email';
    }else{
        echo 'E-mail===>'.$mail.'<br>';
    }
  // email end --->
    echo '<br>';

  // select tag start --->
    //  if($_POST['sel']=='HTML'){
    //     echo 'Your Choose ===>'.'HTML';
    // }
    // if($_POST['sel']=='css'){
    //     echo 'Your choose ===>'.'CSS';
    // }
    // if($_POST['sel']=='JS'){
    //     echo 'Your choose ===>'.'JS';
    // }
    echo 'ksjdhgkjshdgkjfhgkj' .$_POST['sel'];
     echo '<br>';
    // select tag  end --->
    echo '<br>';
    // gender start --->
      $gen = $_POST['gender'];
      echo 'Gender ===>'.$gen;
   // gender  end --->
     echo '<br>';
    //  radio start --->
     echo '<br>';
     $rad = $_POST['add'];
     echo 'Your language is ===>'.$rad;
    // radio end -->
   
 }
?>