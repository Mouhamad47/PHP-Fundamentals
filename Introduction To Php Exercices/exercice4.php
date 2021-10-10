<?php

    // We can make this fucntion print the array or return it
    function reverseElements($initial){
        $length = count($initial);
        $reverse = []; 
        for($i = $length-1;$i >=0;$i--){
            $reverse[] = $initial[$i];
        }
        print_r($reverse);

    }
    // Here is an example of an erray to test the function
    $arr = array(1,7,8,5,4);
    reverseElements($arr);
    
?>