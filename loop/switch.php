<?php
    $number  = 112;
    switch($number) {

        case ($number < 10):
            echo "single digit";
            break;
        case ($number < 100):
            echo "double digit";
        break;
        
        case ($number < 1000):
            echo "trible digit";
        break;

        default :
            echo "no condition";
    }
        $i=0;
            //[0,1,2,3,4,5,6,7,8,9]
        $arr = [1,2,3,4,5,6,7,8,9,10];//indexed array
        // echo $n   = count($arr);
        // die;


    // while ($i < 10) {

    //         echo $arr[$i].'<br>';//$arr[0][1]

           
    //       $i++; // $i = $i+1;

    //   }

    //   do {
    //     echo $arr[$i].'<br>';

    //     $i++;
    //   } while ($i < 10);

    //   for ($i=0; $i < 10; $i++) {
    //     echo $arr[$i].'<br>';

    //   }

    foreach ($arr as $value) {
            echo $value.'<br>';
      }
?>