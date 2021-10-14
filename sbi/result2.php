<?php
      if(isset($_POST['submit'])){
          $districtname = $_POST['district'];
          $date = date('Y-m-d');
          $time =  date('H:i:s');

          if(!$districtname){
              echo "district name is required";
          }else{
            $Dbconn = mysqli_connect('localhost','root','','sbi');
            if($Dbconn){
                echo 'connect';
            }else{
                echo 'not connect';
            }
            $create = "INSERT INTO districts(district_name,date,time)VALUES('$districtname','$date','$time')";
            $query = mysqli_query($Dbconn,$create);
       }
               
        
      }
?>