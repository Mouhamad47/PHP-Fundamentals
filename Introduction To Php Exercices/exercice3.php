<?php
    $arr = array(21,56,37,14,5,2);
    $length = count($arr);
    $max = $arr[0];
    $min = $arr[0];
    
    for($i = 1;$i < $length;$i++){
        if($arr[$i]>=$max){
            $max = $arr[$i];
        }
        else{
            $min = $arr[$i];
        }
    }
    echo "The maximum number is $max and the minimun is $min";
    

?>