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
//tes 2

function libraryFine($pemngembalian, $batas){
   $return = explode(" ",$pemngembalian);
   $due_date = explode(" ",$batas);

   if (count($return) != 3) {
      echo "return ERROR MUST BE 3";
      die();
   }
   if (count($due_date) != 3) {
      echo "due date ERROR MUST BE 3";
      die();
   }
   $d1 = $due_date[0];
   $d2 = $due_date[1];
   $d3 = $due_date[2];
   $p = $return[0];
   $p2 = $return[1];
   $p3 = $return[2];
   if (intval($p2)>12 || intval($d2) > 12 ) {
      echo "ERROR MONTH";
      die();
   }
   if (intval($p)>31 || intval($d1)> 31) {
      echo "ERROR day";
      die();
   }
   $pinjam = date_create($p3.'-'.$p2.'-'.$p);
   $final_date_pinjam = $pinjam->format('Y-m-d');
   $expired_ = date_create($d3.'-'.$d2.'-'.$d1);
   $final_date_expired = $expired_->format('Y-m-d');

   $interval = date_diff($expired_,$pinjam);
   if ($final_date_pinjam < $final_date_expired || $final_date_pinjam == $final_date_expired) {
      echo 0;
   }else{
      $month = $interval->format('%m');
      $year = $interval->format('%Y');
      $day = $interval->format('%d');
      if ($month == 0 && $year == 0) {
         if ($p2 != $d2) {
            echo 10000;
         }else{
            echo  15 * intval($day);
         }
      }else if ($month != 0 && $year == 0) {
         echo  500 * intval($p2-$d2);
      }else if($year != 0){
         echo 10000;
      }
   }

}
// $return_book = trim(fgets(STDIN));
// $expired = trim(fgets(STDIN));
// libraryFine($return_book, $expired);
//library fine
//https://www.hackerrank.com/challenges/library-fine/problem?isFullScreen=true

function jumpingOnTheClound($lengthJump){
   $input_List_jump = trim(fgets(STDIN));
   $to_ar = explode(" ",$input_List_jump);
   if (count($to_ar) != $lengthJump) {
      echo "ERROR, TOTAL TIDAK SAMA";
      die();
   }
   if (in_array(0, $to_ar) && in_array(1, $to_ar) ){
     
   }else{
      echo "tidak boleh selain 0 dan 1";
   }
}
// $input_jump = trim(fgets(STDIN));
// jumpingOnTheClound($input_jump);

function equalityInArray($number){
  $input_list =  trim(fgets(STDIN));
  $to_ar = explode(" ",$input_list);
  if ($number != count($to_ar)) {
      echo "ERROR";
      die();
  }
  $cek_duplicate = array_count_values($to_ar);
  $arr_empty = [];
  $delete_arr = [];
  foreach ($cek_duplicate as $key => $value) {
      if ($value > 1) {
         //final array yang tampil
         array_push($arr_empty,$key);
      }else{
         //final array yang dihapus
         array_push($delete_arr,$key);
      }
  }
  $tot_delete = count($delete_arr);
  echo $tot_delete;
 
}
// $input_a = trim(fgets(STDIN));
// equalityInArray($input_a);

function functionGetMedian($in){
   $input_list =  trim(fgets(STDIN));
   $to_ar = explode(" ",$input_list);
   if ($in != count($to_ar)) {
       echo "ERROR";
       die();
   }
   sort($to_ar);
   $stgh = count($to_ar) / 2;
   $med = $to_ar[$stgh];
   echo $med;
}
// $input_ar = trim(fgets(STDIN));
// functionGetMedian($input_ar);
/** median  */
//https://www.hackerrank.com/challenges/find-the-median/problem?isFullScreen=true


?>