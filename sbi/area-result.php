<?php
     if(isset($_POST['submit'])){
        session_start();
            $area = $_POST['areaname'];
             echo $area;
           
            $date = date('Y-m-d');
            $time =  date('H:i:s');
            
            if(!$area){
                echo "area name is required";
            }else{
                $Dbconn = mysqli_connect('localhost','root','','sbi');
                if($Dbconn){
                    echo 'connect';
                }else{
                    echo 'not connect';
                }
                $districtidstore = $_SESSION['msg'];  
                $store = "INSERT INTO areas(area,district_id,date,time)VALUES('$area','$districtidstore','$date','$time')";
                $query = mysqli_query($Dbconn,$store); 
            }
     }
?>