<?php
    function factorial($number){
        $fact = 1;
        for($x = $number;$x > 1;$x--){
           $fact = $fact * $x;    
        }
        return $fact;
    }
   // Testing by giving example
   $x = 5;
   $y = factorial(5);
   echo "The Factorial number of $x is $y";
?>