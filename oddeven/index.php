<html>  
<body>  
<form method="post">   
    <input type="number" name="number">  
    <input type="submit" value="Submit" name ="submit">  
</form>  
</body>  
</html>  
<?php   
    if(isset($_POST['submit'])){  
        $number = $_POST['number'];   
        if(($number % 2) == 0){  
            echo "$number is even number";  
        }else{  
            echo "$number is odd number";  
        }  
    }  
?>  