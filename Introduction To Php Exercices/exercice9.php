<?php
    function removeEntry($arr,$x){
        $i = 0;
        $length = count($arr);
        for($j = 0;$j < $length;$j++){
            if($arr[$j] != $x){
                $arr[$i] = $arr[$j];
                $i++;    
            }
        }
        print_r($arr);
    }
    $array = array(5,10,23,42,56,9);
    removeEntry($array,10);
 
?>