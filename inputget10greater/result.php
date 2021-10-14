<?php
   function add(){
       if($_POST['values']<10){
           echo 'single number';
       }elseif($_POST['values']<99){
           echo 'double number';
       }elseif($_POST['values']<999){
           echo ' three digit';
       }else{
           echo'more than three digit';
       }
   }

   if(!empty($_POST['values'])){
       add();
   }
?>