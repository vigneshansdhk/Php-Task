<?php
   session_start();
   ?>
  <div class="alert alert-success container mt-3" id="success-alert">
   <button type="button" class="close" data-dismiss="alert">x</button>
   
   <?php
     echo $_SESSION['output'];
  
  
?>
  
</div>
  
 </div>

 <?php
    $_SESSION['output'] = "";
 ?>
 

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Customer Service Point</title>
  </head>
  <body>
   <div class="container">
         <div class="row">
                <div class="col-sm-12 mt-5">
                <div class="card mt-5" style="width:100%;">
                        <div class="card-body">
                        <form action="result.php" method="post">
                           <h1 align="center">Customer Table</h1>
                              <input type="hidden" name="id" value="">
                              <div class="form-group">
                                <label for="example-number-input" class="form-control-label">Name</label>
                                <input class="form-control" type="text" name="username" placeholder="Enter Name" value="" id="example-number-input">
                              </div>
                              <div class="form-group">
                                <label for="example-number-input" class="form-control-label">phone_Number</label>
                                <input class="form-control" type="number" name="phonenumber" placeholder="Enter Phone_Number" value="" id="example-number-input">
                              </div>
                              <br>
                              <div class="form-group">
                                <label for="example-number-input" class="form-control-label">DistrictName</label>
                                  <select name="districtnames" id="" class="form-control">
                                  <?php
                                          include ('getid.php'); 
                                          while($view_id = mysqli_fetch_assoc($get_id)){
                                          $getid = $view_id['id'];
                                          $getname = $view_id['district_name'];
                                          echo "<option value='$getid'>$getname</option>";
                                          }
                                   ?>
                                  </select>
                              </div>
                                
                              <div class="form-group autocomplete">
                                <label for="example-number-input" class="form-control-label">area</label>
                                <input class="form-control" type="text"  id="myInput" name="area" placeholder="Enter area" value="" id="example-number-input">
                              </div>
                          
                               <div class="form-group">
                                <label for="example-number-input" class="form-control-label">Link Branch Code</label>
                                <input class="form-control" type="text" name="branch" placeholder="Enter Link Branch Code"  value="" id="example-number-input">
                              </div>
                              <div class="form-group">
                              <label for="vehicle1">Cibil</label> 

                                <input type="text" id="vehicle2" name="cibil" value="">                            
                              </div>
                               <br>
                               <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Application</label>
                                  <select class="form-control" id="exampleFormControlSelect1"  name="application">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="vehicle1">pv</label> 
                                <input type="radio" name="pv" value="yes">Yes
                                <input type="radio" name="pv" value="no">No                           
                              </div>
                              <div class="form-group">
                                <label for="example-number-input" class="form-control-label">courier</label>
                                <input class="form-control" type="text" name="courier" placeholder="Enter Courier"  value="" id="example-number-input">
                              </div>
                              
                              <div class="form-group">
                                <label for="example-number-input" class="form-control-label">courier Status</label>
                                <input type="radio" name="courierstatus" value="yes">Yes
                                <input type="radio" name="courierstatus" value="no">No
                              </div>
                              <div class="form-group">
                                <label for="example-number-input" class="form-control-label">Code Status</label>
                                <input type="radio" name="codestatus" value="yes">Yes
                                <input type="radio" name="codestatus" value="no">No
                              </div>
                              <div class="form-group">
                                <label for="example-number-input" class="form-control-label">Reference Name</label>
                                <input class="form-control" type="text" name="refrencename" placeholder="Enter Reference Name"  value="" id="example-number-input">
                              </div>
                      

                             
                              <button type="submit" name="submit"  class="btn btn-success form-control" >Submit</button>
                               
                            </form>
                        </div>
                </div>
                </div>
        </div>
   </div>



  <?php
      $Dbconn = mysqli_connect('localhost','root','','sbi');
      $read = "SELECT * FROM users";
      $view = mysqli_query($Dbconn,$read);
      ?>
       <br>
       <br>
      <div class="container">
       <div class="row">
         <div class="table-responsive">
       <table  border ="1" class="table table-light text-center">
  <thead>
    <tr>
    <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">phone_number</th>
      <th scope="col">district_id</th>
      <th scope="col">area</th>
      <th scope="col">link_branch_code</th>
      <th scope="col">cibil</th>
      <th scope="col">application</th>
      <th scope="col">pv</th>
      <th scope="col">courier</th>
      <th scope="col">courier_status</th>
      <th scope="col">code_status</th>
      <th scope="col">reference_name</th>
      <th scope="col">date</th>
      <th scope="col">time</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
           $i = 1;
           while($viewall = mysqli_fetch_assoc($view)){
           ?>  
           <tr>
           <td><?php echo $i++  ?></td>
           <td><?php echo $viewall['name']  ?></td>
           <td><?php echo $viewall['phone_number']  ?></td>
           <td><?php echo $viewall['district_id']  ?></td>
           <td><?php echo $viewall['area']  ?></td>
           <td><?php echo $viewall['link_branch_code']  ?></td>
           <td><?php echo $viewall['cibil']  ?></td>
           <td><?php echo $viewall['application']  ?></td>
           <td><?php echo $viewall['pv']  ?></td>
           <td><?php echo $viewall['courier']  ?></td>
           <td><?php echo $viewall['courier_status']  ?></td>
           <td><?php echo $viewall['code_status']  ?></td>
           <td><?php echo $viewall['reference_name']  ?></td>
           <td><?php echo $viewall['date']  ?></td>
           <td><?php echo $viewall['time']  ?></td>
           <td>
              <form action="update.php" method="post">
                <input type="hidden" name="id" value="<?php echo $viewall['id']; ?>">
                  <input type="submit" value="EDIT" name="edit"  class = "btn btn-info btn-sm">
              </form>
              <a href="result.php?delete=<?php echo $viewall['id']; ?>"  
                  class = "btn btn-danger btn-sm">Delete</a>
           </td>
           </tr>  
             
       <?php     
       }
      
    ?>
  </tbody>
</table>
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