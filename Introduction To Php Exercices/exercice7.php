<?php
    $grades = array(
        "Mouhamad" => 75,
        "Imad"     => 60,
        "Charbel"  => 85,
        "Sabine"   => 90 
    );
    $max = 0;
    foreach($grades as $name =>$grade){
        if($grade > $max){
            $max = $grade;
        }
    } 
       echo "The highest grade is for ".$name;


?>