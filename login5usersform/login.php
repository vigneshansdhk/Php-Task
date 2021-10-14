

<!doctype html>
<html lang="en">
  <head>
    <title>Login 5 users</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class = "bg-danger">
     <div class="container-fluid">
       <div class="row">
       <div class="col-md-3"></div>
       <div class="col-md-6">
       <div class="card mt-5">

  <div class="card-body">
    <h5 class="card-title text-center">Login form</h5>
     <form action="result.php" method="post">
     <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">@</span>
  </div>
  <input type="email" class="form-control" placeholder="E-mail" name="email" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">@</span>
  </div>
  <input type="password" class="form-control" placeholder="password" name ="password" aria-label="Username" aria-describedby="basic-addon1">
</div>
    <?php
             
              // if($_SESSION['val1'] && $_SESSION['val2']){
              //      echo 'true';
              // }else{
              //      echo 'false';
              // }
              session_start();
                
            if(isset($_SESSION['val1'])  && $_SESSION['val1'] === 'true'){
              echo 'success';
              $_SESSION['val1'] = "false";
            }elseif(isset($_SESSION['val2']) && $_SESSION['val2'] ==='true'){
              echo 'failed';
              $_SESSION['val2'] ="false";

            }else{
              echo 'please enter your login';
            }

            // echo $_SESSION['val1'];
            // echo $_SESSION['val2'];-[[']po]
    ?>
    
      <button type="submit" class="btn btn-primary form-control" name = "submit">submit</button>
    
     
     </form>
  </div>
</div>
       </div>
      
       <div class="col-md-3"></div>
       </div>
     </div>
       
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
