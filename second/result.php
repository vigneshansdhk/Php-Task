<?php
    if($_POST['select']==$_POST['addition']){
    function add($val1,$val2){
        $total = $val1 + $val2;
        echo $total;
    }
    add($_POST['val1'],$_POST['val2']);
    }elseif($_REQUEST['subtract']){
    echo '<br/>';
        function sub($val1,$val2){
        $total = $val1 - $val2;
        echo $total;
    }
     sub($_POST['val1'],$_POST['val2']);
    }
     echo '<br/>';
    function mul($val1,$val2){
        $total = $val1 * $val2;
        echo $total;
    }
    mul($_POST['val1'],$_POST['val2']);
    


   ?>