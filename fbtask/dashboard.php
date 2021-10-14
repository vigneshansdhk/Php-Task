<?php
  include('result3.php');
?>
  
<table border = "1">
   
  <tr>
    <th>Id</th>
    <th>Text</th>
    <th>user_id</th>
    <th>Status</th>
  </tr>
  <tr>
    <?php
       $conn = mysqli_connect('localhost','root','','fb');
       $select = "SELECT * FROM messages";
       $read = mysqli_query($conn,$select);
       $i = 1;
        while($row = mysqli_fetch_assoc($read)){
           ?>
             <tr>
               <td><?php echo $row['id']?></td>
               <td><?php echo $row['text']?></td>
               <td><?php echo $row['user_id']?></td>
               <td><?php echo $row['status']?></td>
             </tr>
           <?php
       }
       $i++;
    ?>
  </tr>
</table>
