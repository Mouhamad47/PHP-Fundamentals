<?php
    $list1 = array(4,5,6,7);
    $list2 = array(4,5,7,8);
    $list3 = [];

    for($i = 0;$i < count($list1);$i++){
        if($list1[$i]== $list2[$i]){
            $list3 [] = $list1[$i];
        }
        else if($list1[$i]<$list2[$i]){
            $list3 [] = $list1[$i];
        }
        else{
            $list3 [] = $list2[$i];
        }
    }
    print_r($list3);





?>