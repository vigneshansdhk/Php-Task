<?php
  function add(){
      $i = 1;
     while($i <= $_POST['name']){
        echo $i.'<br>';
        $i++;
     }
  }
//   if(($_POST['sel'] == 'while')){
//       add();
//   }


  function sub(){
      $i = 1;
      do{
        echo $i.'<br>';
        $i++;  
      }while($i<= $_POST['name']);
  }

//   if(($_POST['sel'] == 'do')){
//     sub();
// }

function mul(){
    for($i=1;$i<=$_POST['name'];$i++){
        echo $i.'<br>';
    }
}
//  if($_POST['sel']=='forloop'){
//      mul();
//  }

//   if($_POST['name']=='foreach'){
//       loop();
//   }

  function swt($loop1,$loop2){
    switch($loop1){
        case 'while':
            echo 'its whileloop <br>';
            add($loop2);
           break;  
        case 'do':
            echo 'its dowhile <br>';
            sub($loop2);
           break;
        case 'forloop': 
            echo 'its forloop <br>';    
           mul($loop2);
           break;
        default :
        echo 'not correct';
    }
  }
  
      swt($_POST['sel'],$_POST['name']);
  
?>