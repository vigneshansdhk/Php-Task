<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="bg-primary">
     <div class="container-fluid">
       <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
        <div class="card mt-5">
       <div class="card-body">
       <h5 class="card-title text-center">Loginform</h5>
       <form action="result.php" method="post">
       <div class="input-group mb-3">
       <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">@</span>
      </div>
      <input type="text" class="form-control" placeholder="Username" name="username" aria-label="Username" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
     <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">@</span>
    </div>
    <input type="email" class="form-control" placeholder="email" name="email" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <br>
    <select class="form-control" name='sel' id="sel1">
        <option value='HTML'>HTML</option>
        <option value='css'>CSS</option>
        <option value='Bootstrap'>JS</option>
      </select>
     <br> 
      Gender:
     <input type="radio" name="gender" value="female">Female
     <input type="radio" name="gender" value="male">Male
     <input type="radio" name="gender" value="other">Other  
     <br>
     <br>
     choose your language:<br>
    <label class="checkbox-inline">
      <input type="checkbox" value="java" name='add'>JAVA
    </label> <br>
    <label class="checkbox-inline">
      <input type="checkbox" value="c" name='add'>C
    </label><br>
    <label class="checkbox-inline">
      <input type="checkbox" value="php" name='add'>PHP
    </label> <br>
    <button class="btn btn-primary form-control" type= "submit" name="submit">submit</button>
       </form>

    
  </div>
</div>
         </div>
        <div class="col-md-2"></div>
       </div>
     </div>
     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>