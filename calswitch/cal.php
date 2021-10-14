<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
        switch($_POST['sel']){
            case 'January':
                echo 'January in 31 days';
            break;
            case 'February':
                echo 'February in 28 days';
            break;
            case 'March':
                echo 'March in 31 days';
            break;
            case 'April':
                echo 'April in 30 days';
            break;
            case 'May':
                echo 'May in 31 days';
            break;
            case 'June':
                echo 'June in 30 days';
            break;
            case 'July':
                echo 'July in 31 days';
            break;
            case 'August':
                echo 'August in 31 days';
            break;
            case 'September':
                echo 'September in 30 days';
            break;
            case 'October':
                echo 'October in 31 days';
            break;
            case 'November':
                echo 'November in 30 days';
            break;
            case 'December':
                echo 'December in 31 days';
            break;
            default :
            echo 'invalid';
        }

    }
     ?>
</body>
</html>