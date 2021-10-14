<?php
date_default_timezone_set('Asia/Kolkata');
  if(isset($_POST['submit'])){
    // session_start();
    $username       = $_POST['username'];
    $phonenumber    = $_POST['phonenumber'];
    $district1      =  $_POST['districtnames'];
    $area           = $_POST['area'];
    $branch         =  $_POST['branch'];
    $cibil          =  $_POST['cibil'];
    $application    =  $_POST['application'];
    $pv    =  $_POST['pv'];
    $courier        =  $_POST['courier'];
    $courierstatus  =  $_POST['courierstatus'];
    $codestatus     =  $_POST['codestatus'];
    $refrencename   =  $_POST['refrencename'];
    $date = date('Y-m-d');
    $time =  date('H:i:s');

    if(!$username){
        echo "username is required";
    }elseif(!$phonenumber){
        echo "phone_number is required";
    }elseif(!$area){
        echo " area is required";
    }elseif(!$branch){
        echo "branch is required";
    }elseif(!$application){
        echo " application is required";
    }elseif(!$courier){
        echo "courier is required";
    }elseif(!$courierstatus){
        echo " courier_Status is required";
    }elseif(!$codestatus){
        echo "code_status is required";
    }elseif(!$refrencename){
        echo " refrence_name is required";
    }else{
        $Dbconn = mysqli_connect('localhost','root','','sbi');
        $insert = "INSERT INTO users (name,phone_number,district_id,area,link_branch_code,cibil,application,pv,courier,courier_status,code_status,reference_name,date,time)VALUES('$username','$phonenumber','$district1','$area','$branch','$cibil','$application','$pv','$courier','$courierstatus','$codestatus','$refrencename','$date','$time')" ;
        $result = mysqli_query($Dbconn,$insert);
        if($result){
            session_start();
            $_SESSION['output'] = 'inserted successfully';
             header('Location:index.php');
        }else{
            echo "not inserted successfully";
        }
    }
    
  }
?>

  <!-- delete code -->
<?php
if(isset($_GET['delete'])){
        $Dbconn = mysqli_connect('localhost','root','','sbi');
        $id = $_GET['delete'];
        mysqli_query($Dbconn,"DELETE FROM users WHERE id=$id");
    }

?>

 