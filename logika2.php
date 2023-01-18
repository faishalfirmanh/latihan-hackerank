<?php

//
//$input_1 = trim(fgets(STDIN));
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


function finalGrade($input){
     if (!is_numeric($input)) {
        echo "ERROR";
        die();
     }
     $arr = [];
     for ($i=0; $i <$input ; $i++) { 
        $input_grade =  trim(fgets(STDIN));
        $to_arr = explode(" ",$input_grade);
        if (count($to_arr)>1) {
           echo "ERROR CAN'T MORE THAN 1";
        }
        array_push($arr, $input_grade);
     }
     foreach ($arr as $gradeOri) {
        $hasil_pembulatan =  round(($gradeOri+5/2)/5)*5; //pembulatan 5
        $selisih = $hasil_pembulatan-$gradeOri;
        if ($gradeOri < 40) {
          if ($selisih < 3 && $hasil_pembulatan == 40) {
             echo $hasil_pembulatan;
             echo "\n";
          }else{
             echo $gradeOri;
             echo "\n" ;
          }
        }else{
            if ($selisih < 3) {
               echo $hasil_pembulatan;
               echo "\n";
            }else{
                echo $gradeOri;
                echo "\n";
            }
        }
     }
}
// $input_looping = trim(fgets(STDIN));
// finalGrade($input_looping);
/** https://www.hackerrank.com/challenges/grading/problem?isFullScreen=true */
//grading student---------------------


?>