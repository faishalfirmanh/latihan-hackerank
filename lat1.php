<?php

/**
 * expect output 
 * a =1, b=5, c=3, a =3;
 */
$a = "abbbbbcccaaa"; /** input */

$to_arr =explode(" ",implode(' ',str_split($a)));

$cek = 0;

for ($i=0; $i <count($to_arr) ; $i++) { 
  
    if (isset($to_arr[$i+1])) {
       $next = $to_arr[$i+1];
    }else{
       $next = null;
    }

    if (isset($to_arr[$i-1])) {
        $prev = $to_arr[$i-1];
    }else{
        $prev = null;
    }
    

    if ($next != null) {
        if($to_arr[$i] == $to_arr[$i + 1]) {
            $cek++;
        } else {
            $cek++;
            echo $to_arr[$i] . $cek;
            echo "<br>";
            $cek = 0;
        }
    }else{
        $cek++;
        echo $to_arr[$i] . $cek;
        echo "<br>";
        $cek = 0;
    }
   
}

?>