<?php
           function add($o_amount,$sel){
            $gst =( $o_amount * $sel)/100;
            $post_net = $o_amount + $gst;
            $pre_net = $o_amount - $gst;
             echo 'POST GST====>'.$post_net.'<br>';
             echo 'PRE GST=====>'.$pre_net;
    
           }
        //    print_r($_POST);
     if(!empty($_POST['sel']) && !empty($_POST['orginalcost'])){
        add($_POST['orginalcost'],$_POST['sel']);
     }
  ?>