<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align = "center">calender Task</h1>
    <form action="" method="post">
    <select name="sel"> 
       <option value="...">...</option>
      <option value="January">January</option>
      <option value="February">February</option>
      <option value="March">March</option>
      <option value="April">April</option>
      <option value="May">May</option>
      <option value="June">June</option>
      <option value="July">July</option>
      <option value="August">August</option>
      <option value="September">September</option>
      <option value="October">October</option>
      <option value="November">November</option>
      <option value="December">December</option>
    </select>

    <input type="submit" value="show in days" name="submit">
    
   </form>
   <?php
    if(isset($_POST['submit'])){
        if($_POST['sel']=='January'){
            echo "January in 31 days";
        }elseif($_POST['sel']== 'February'){
            echo "February in 28 days";
        }elseif($_POST['sel']=='March'){
             echo "March in 31 days";
        }
        elseif($_POST['sel']=='April'){
             echo "April in 30 days";
        }
        elseif($_POST['sel']=='May'){
            echo "May in 31 days";
        }
        elseif($_POST['sel']=='June'){
            echo "June in 30 days";
        }
        elseif($_POST['sel']=='July'){
            echo "July in 31 days";
        }
        elseif($_POST['sel']=='August'){
            echo "August in 31 days";
            
        }elseif($_POST['sel']=='September'){
            echo "September in 30 days";
            
        }elseif($_POST['sel']=='October'){
            echo "October in 31 days";
            
        }elseif($_POST['sel']=='November'){
            echo "November in 30 days";
            
        }elseif($_POST['sel']=='December'){
            echo "December in 31 days";
            
        }else{
            echo 'invalid';
        }
    }
   ?>
</body>
</html>