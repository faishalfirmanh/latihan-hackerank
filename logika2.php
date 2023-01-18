<?php

//
$input_1 = trim(fgets(STDIN));
function breakingBestAndWorstRecords($num){
    $arr =[];
   for ($i=0; $i<$num ; $i++) { 
         $ce = trim(fgets(STDIN));
         $to_arr =  explode(' ', $ce);
         if (count($to_arr)>3) {
            echo "!!error can't more than 3";
           die();
         }
         array_push($arr, $to_arr);
         
   }
    foreach ($arr as $key ) {
       $catA = intval($key[0]);
       $catB= intval($key[1]);
       $mouse = intval($key[2]);
       $selish_A = $catA > $mouse ? $catA-$mouse : $mouse-$catA;
       $selish_B = $catB > $mouse ? $catB-$mouse : $mouse-$catB;
       
       if ($selish_A > $selish_B) {
          echo "Cat B";
       }else if ($selish_B > $selish_A) {
          echo "Cat A";
       }else{
         echo "Mouse C";
       }
       echo "\n";
    }
  
}
//breakingBestAndWorstRecords($input_1);
//https://www.hackerrank.com/challenges/cats-and-a-mouse?isFullScreen=true
/*** cat and mouse */



?>