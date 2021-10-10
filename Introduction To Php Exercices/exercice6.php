<?php
    function convertBinaryToDecimal($number){
        $x = $number;
        $decimal = 0;
        $base = 1;

        while($x){
            $last_digit = $x % 10;
            $x = $x/10;
            $decimal += $last_digit * $base;
            $base = $base * 2;
        }
        print($decimal);
        // we can make it return the decimal also :)
    }

    convertBinaryToDecimal(1001);


?> 