<?php
    function union($arr1, $arr2){
        $length_1 = count($arr1);
        $length_2 = count($arr2);
        $k = 1;
        $arr3  = [];
        for($i = 0;$i < $length_1;$i++){
            $arr3 [] = $arr1[$i];
        }
        for($j = 0;$j < $length_2;$j++){
            $arr3 [] = $arr2[$j];
        }
        sort($arr3);
        for($x = 0;$x < count($arr3)-1;$x++){
            if($arr3[$x]!=$arr3[$x+1]){
                $arr3[$k++] = $arr3[$x+1];
            }
        }
        print_r($arr3);

        
    }
    $first_array = array(1,3,5,4);
    $second_array = array(3,6,4,5);
    union($first_array,$second_array);



?>