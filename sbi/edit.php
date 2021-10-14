<?php
              if(isset($_POST['submit'])){
              $id = $_POST['id'];
              $username       = $_POST['username'];
              $phonenumber    = $_POST['phonenumber'];
              $area           = $_POST['area'];
              $branch         =  $_POST['branch'];
              $cibil         =  $_POST['cibil'];
              $application    =  $_POST['application'];
              $pv    =  $_POST['pv'];
              $courier        =  $_POST['courier'];
              $courierstatus  =  $_POST['courierstatus'];
              $codestatus     =  $_POST['codestatus'];
              $referencename   = $_POST['referencename'];
              $date = date('Y-m-d');
              $time =  date('H:i:s');
              $Dbconn = mysqli_connect('localhost','root','','sbi');
              $updatequery ="UPDATE users SET name='$username',phone_number='$phonenumber',area='$area', link_branch_code='$branch',cibil='$cibil', application='$application',pv='$pv',courier= '$courier',courier_status='$courierstatus',code_status='$codestatus',reference_name='$referencename',date='$date',time='$time' WHERE id=$id";
              $store = mysqli_query($Dbconn,$updatequery);

            if($store){
                echo "updated successfully";
            }else{
                echo  "not updated";
            }

  }
    ?>
