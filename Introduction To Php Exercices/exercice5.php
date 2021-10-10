<?php
    $intial = array(2,1,5,10,9,6,3,7);
    $length = count($intial);
    $even = [];
    $odd = [];

    for($i = 0;$i < $length;$i++){
        if($intial[$i] %2 == 0){
            $even [] = $intial[$i];
        }
        else{
            $odd [] = $intial[$i];
        }
    }
    print_r($even);
    print_r($odd);

?>