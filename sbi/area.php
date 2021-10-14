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
                        <form action="area-result.php" method="post">
                           <h1 align="center">Area Name</h1>
                              <input type="hidden" name="id" value="">
                              <div class="form-group">
                                <label for="example-number-input" class="form-control-label">Name</label>
                                <input class="form-control" type="text" name="areaname" placeholder="Enter area" value="" id="example-number-input">
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
      $read = "SELECT * FROM areas";
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
     <th scope="col">Area</th>
      <th scope="col">date</th>
      <th scope="col">time</th>
      
    </tr>
  </thead>
 
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