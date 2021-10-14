<?php
   
    $Dbconn = mysqli_connect('localhost','root','','sbi');
    if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $read = "SELECT * FROM users WHERE id=$id";
    $query = mysqli_query($Dbconn,$read);
    $result = mysqli_fetch_assoc($query);
    // if(isset($_POST['submit'] )){
    $username       =  $result['name'];
    $phonenumber    =  $result['phone_number'];
    // $district       =  $result['district'];
    $area           =  $result['area'];
    $branch         =  $result['link_branch_code'];
    $cibil          =  $result['cibil'];
    $application    =  $result['application'];
    $pv             =  $result['pv'];
    $courier        =  $result['courier'];
    $courierstatus  =  $result['courier_status'];
    $codestatus     =  $result['code_status'];
    $referencename  =  $result['reference_name'];
    $date = date('Y-m-d');
    $time =  date('H:i:s');
    }
?>
  

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   <div class="container">
        <div class="row">
                <div class="col-sm-12 mt-5">
                <div class="card mt-5" style="width:100%;">
                        <div class="card-body">
                        <form action="edit.php" method="post">
                           <h1 align="center">Update</h1>
                              <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
                              <div class="form-group">
                                <label for="example-number-input" class="form-control-label">Name</label>
                                <input class="form-control" type="text" name="username" placeholder="Enter Name" value="<?php echo $username ?>" id="example-number-input">
                              </div>
                              <div class="form-group">
                                <label for="example-number-input" class="form-control-label">phone_Number</label>
                                <input class="form-control" type="number" name="phonenumber" placeholder="Enter Phone_Number" value="<?php echo $phonenumber ?>" id="example-number-input">
                              </div>
                                
                              <div class="form-group">
                                <label for="example-number-input" class="form-control-label">area</label>
                                <input class="form-control" type="text" name="area" placeholder="Enter Area" value="<?php echo  $area ?>" id="example-number-input">
                              </div>
                              <div class="form-group">
                                <label for="example-number-input" class="form-control-label">Link Branch Code</label>
                                <input class="form-control" type="text" name="branch" placeholder="Enter Link Branch Code" value="<?php echo $branch ?>" id="example-number-input">
                              </div>
                              <div class="form-group">
                              <label for="vehicle1">Cibil</label> 
                                <input type="text" id="vehicle2" name="cibil" value="<?php echo  $cibil  ?>">                            
                              </div>
                               <br>
                               <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Application</label>
                                  <select class="form-control" id="exampleFormControlSelect1"  name="application">
                                    <option value="<?php echo  $application  ?>">1</option>
                                    <option value="<?php echo  $application  ?>">2</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="vehicle1">pv</label> 
                                <input type="radio" name="pv" value="yes" <?php echo ($pv=='yes')?'checked':'' ?> >yes
                                <input type="radio" name="pv" value="no" <?php echo ($pv=='no')?'checked':'' ?> >no                         
                              </div>
                              <div class="form-group">
                                <label for="example-number-input" class="form-control-label">courier</label>
                                <input class="form-control" type="text" name="courier" placeholder="Enter Courier"  value="<?php echo  $courier ?>" id="example-number-input">
                              </div>
                              
                              <div class="form-group">
                                <label for="example-number-input" class="form-control-label">courier Status</label>
                                <input type="radio" name="courierstatus" value="yes" <?php echo ($courierstatus == 'yes')?'checked':'' ?> >Yes
                                <input type="radio" name="courierstatus" value="no"  <?php echo ($courierstatus == 'no')?'checked':'' ?>   >No
                              </div>
                              <div class="form-group">
                                <label for="example-number-input" class="form-control-label">Code Status</label>
                                <input type="radio" name="codestatus" value="yes" <?php echo ($codestatus == 'yes')?'checked':'' ?> >Yes
                                <input type="radio" name="codestatus" value="no" <?php echo ($codestatus == 'no')?'checked':'' ?>  >No
                              </div>
                              <div class="form-group">
                                <label for="example-number-input" class="form-control-label">Reference Name</label>
                                <input class="form-control" type="text" name="referencename" placeholder="Enter Reference Name" value="<?php echo  $referencename ?>" id="example-number-input">
                              </div>
        

                             
                               <button type="submit" name="submit"  class="btn btn-danger form-control" >update</button>
                            </form>
 
                        </div>
                </div>
                </div>
        </div>
   </div>
  

 


      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>