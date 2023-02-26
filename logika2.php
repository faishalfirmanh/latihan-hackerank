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

function findUniqueElement($length_of_array){
    $input_item_array = trim(fgets(STDIN));
    $to_arr = explode(" ",$input_item_array);
    if (count($to_arr) != $length_of_array) {
      echo "ERROR NOT SAME";
      die();
    }
    $arr_emp =[];
    $cek_duplicate = array_count_values($to_arr);
    foreach ($cek_duplicate as $key => $value) {
      if ($value < 2) {
        array_push($arr_emp,$key);
      }
  }
  if (count($arr_emp) > 0) {
      foreach ($arr_emp as $key) {
         echo $key;
      }
  }
}
// $input_length = trim(fgets(STDIN));
// findUniqueElement($input_length);
/* lonely integer -> done*/
//https://www.hackerrank.com/challenges/lonely-integer/problem?isFullScreen=true


function camelCase($input){
   //ctype_upper($input) -> seluruh besar semua
   if ( preg_match('/[A-Z]/', $input)) {
       $to_arr = str_split($input);
       $upper = [];
       foreach ($to_arr as $key ) {
         if (preg_match('/[A-Z]/', $key)) {
            array_push($upper, $key);
         }
       }
       echo count($upper) + 1;
   }else{
      echo 1;
      die();
   }
}
// $input_words = trim(fgets(STDIN));
// camelCase($input_words); //-->done
//https://www.hackerrank.com/challenges/camelcase/problem?isFullScreen=true

//https://www.hackerrank.com/challenges/bon-appetit/problem?isFullScreen=true/->done

function BonAppetit($inpt){
   $to_arr = explode(" ",$inpt);
   if(count($to_arr) != 2){
      echo "ERROR MUST BE 2";
      die();
   }
   $tidak_diamakn = $to_arr[1];
   $list_item = $to_arr[0];
   $input_list = trim(fgets(STDIN));
   $input_uang_bill = trim(fgets(STDIN));
   $list_to_arrr = explode(" ",$input_list);
   if (count($list_to_arrr) != $list_item) {
      echo "ERROR TIDAK SAMA";
      die();
   }
   unset($list_to_arrr[$tidak_diamakn]);
   $total = array_sum($list_to_arrr) / 2;
   $result_pembagian = $input_uang_bill - $total;
   if ($result_pembagian == 0) {
      echo "Bon Appetit";
   }else{
      echo $result_pembagian;
   }
}
// $num = trim(fgets(STDIN));
// BonAppetit($num);


function breakingWordRecord($input){
   $input_list = trim(fgets(STDIN));
   $to_arr = explode(" ",$input_list);
   if (count($to_arr) != $input) {
      echo "ERROR NOT SAME";
      exit();
   }
   $all_list = array();
   $hight = array();
   $low = array();
   $isFirst = true;
   foreach($to_arr as $key => $value){
      array_push($all_list,$value);
     if($isFirst){
       array_push($hight,$value);
       array_push($low,$value);
     }else{
       if ($value > $hight[count($hight)-1]) {
          array_push($hight,$value);
       }
       if($value < $low[count($low)-1]) {
         array_push($low,$value);
       }
     }
     $isFirst = false;
   }
  
   array_shift($hight);
   array_shift($low);
   $total_hight = count(array_unique($hight));
   $total_low = count(array_unique($low));
   echo $total_hight .' '.$total_low;
}
// $input_score = trim(fgets(STDIN));
// breakingWordRecord($input_score);
//breaking best word record
//https://www.hackerrank.com/challenges/breaking-best-and-worst-records/problem


function theBirddayBar($number){
   $list = trim(fgets(STDIN));
   $expect = trim(fgets(STDIN));
   $to_arr = explode(" ",$list);
   $to_arr_expect = explode(" ",$expect);

   if (count($to_arr) != $number) {
      print_r("ERROR NOT SAME");
      exit();
   }

   if (count($to_arr_expect) != 2) {
      print_r("ERROR expect must be 2");
      exit();
   }

   $value_must = $to_arr_expect[0];
   $list_item_plus = $to_arr_expect[1];
   
   $val_ori = array();
   $val_prev = array();
   $val_next = array();
   $res = array();
   for ($index=0; $index <count($to_arr) ; $index++) { 
       $val_item = $to_arr[$index];
       $prev = $to_arr[$index] == $to_arr[0] ? $to_arr[$index-0] : $to_arr[$index-1];
       $next = $to_arr[$index] == $to_arr[count($to_arr)-1] ? $to_arr[$index+0] : $to_arr[$index+1];
        
       array_push($res, $val_item);
       array_push($res, $val_prev);
         
       
      
   }
   $example = array(33,43,34,55 ,34);
   $total_all = array_sum($example);//menjumlahkan semua array
   $total_each = count($example);
   
}
// $length = trim(fgets(STDIN));
// theBirddayBar($length);
//https://www.hackerrank.com/challenges/the-birthday-bar/problem?isFullScreen=true /-notok

function findDigits($n){
   $var = [];
   for ($i=0; $i <$n ; $i++) { 
      $input_number = trim(fgets(STDIN));
      array_push($var,$input_number);
   }
   $bil_ori = [];
   $bilangan_sisa_0 = [];
   $bil_asli = [];
   foreach ($var as $key => $value) {
      array_push($bil_ori,$value);
      $rm = str_replace(0,'',$value);
      $satu = str_split($rm);
      $i = 0;
      foreach ($satu as $key => $value2) {
          if ($value % $value2 == 0) {
            // echo 'ori '. $value ." sisa ".$value2;
            // echo "\n";
            //$bilangan_sisa_0[$value]= array($value2);
             array_push($bilangan_sisa_0,$value2);
             array_push($bil_asli,$value);
          }
          $i++;
      }
   }
   //  $final = array_count_values($bilangan_sisa_0);
   //  var_dump($final);
   // foreach ($final as $key => $value) {
   //    echo $value;
   //    echo "\n";
   // }
}
// $length = trim(fgets(STDIN));
// findDigits($length);
//https://www.hackerrank.com/challenges/find-digits/problem?isFullScreen=true /-notok

function FunnyString($length){
   $original_string = [];
   for ($i=0; $i <$length ; $i++) { 
      $input = trim(fgets(STDIN));
      array_push($original_string,$input);
   }
   
   //lopping string
  foreach ($original_string as $key => $value) {
      $str_ori_to_arr = str_split($value);
      $str_reverse_to_arr = str_split(strrev($value));
     
      $value_asci_ori = [];
      $value_asci_reverse  = [];
      foreach ($str_ori_to_arr as $key => $valueOri) {
         $asci_ori = ord($valueOri);
         array_push($value_asci_ori,$asci_ori);
      }
      foreach ($str_reverse_to_arr as $key => $valueReverse) {
         $asci_reverse = ord($valueReverse);
         array_push($value_asci_reverse,$asci_reverse);
      }
     

      var_dump($value_asci_ori);
      echo "\n";
      var_dump($value_asci_reverse);
  }


}
// $input = trim(fgets(STDIN));
// FunnyString($input);
//https://www.hackerrank.com/challenges/funny-string/problem?isFullScreen=false |notOk

function functionForArray($str_desired, $str_1){
   $lengt_input = count($str_1);
   $lengt_result = count($str_desired);
   $index_1 = 0;
   foreach ($str_desired as $index_result => $value_result) {//arr1
      $sebelumnya = $index_1 <1 ?$index_1 : $index_1-1;
      $setelahnya = $index_1 >$lengt_result-1 ?$index_1 : $index_1+1;
      $index_input_2 = 0;
       foreach ($str_1 as $index_input => $value_input) {//arr2
         $sebelumnya_input = $index_input <1 ?$index_input : $index_input-1;
         $setelahnya_input = $index_input >$lengt_input-1 ?$index_input : $index_1+1;
          if ($value_result == $value_input && $index_result == $index_input && $str_desired[$sebelumnya] == $str_1[$sebelumnya_input]) {
            if ($str_desired[$setelahnya] != null) {
               echo "value ".$value_result .' ] index => '.$index_input . ' sebelumnya '
               .$sebelumnya .' |setelahnya '.$setelahnya .' || --- '.$sebelumnya_input . '{}';
               echo "\n";
            }
          }
          $index_input_2++;
       }
       $index_1++;
   }
}
function appendDeleteString($string1,$desiredResult,$operation){

   $to_arr_str1 = str_split($string1);
   $str_1 = [];
   foreach ($to_arr_str1 as $key => $value) {
      array_push($str_1,$value);
   }
   $to_arr_str2 = str_split($desiredResult);
   $str_desired = [];
   foreach ($to_arr_str2 as $key => $value) {
     array_push($str_desired,$value);
   }
   $lengt_result = count($str_desired);
   $lengt_input = count($str_1);
   if (strpos($string1, $desiredResult) !== false) {
      // echo "ada";
      // die();
       //modif str_1 :
         // delete 
           if ($lengt_result > $operation) {
              echo "446";
           }else{
              $total_remove = $operation-$lengt_result;
              $total_add = $operation-$total_remove;
              if ($total_add + $total_remove == $operation) {
                 echo "Yes";
              }else{
                 echo "No";
              }
           }
         // add
       //echo $lengt_result;
   }else{
      if ($lengt_result > $operation) {
         echo "461";
      }else{
         $total_remove = $operation-$lengt_result;
         $total_add = $operation-$total_remove;
         if ($total_add + $total_remove == $operation) {
            echo "466";
         }else{
            echo "468";
         }
      }
   }

}
// $a = trim(fgets(STDIN));
// $b =trim(fgets(STDIN));
// $c = trim(fgets(STDIN));
// appendDeleteString($a, $b, $c); //notok

function Anagram($a,$b){
   $to_ar1 = str_split($a);
   $to_ar2 = str_split($b);
   
   $count_value1 = array_count_values($to_ar1);
   $count_value2 = array_count_values($to_ar2);

   krsort($count_value1);
   krsort($count_value2);
 
   $beda_2 = [];
  
   $diff_assoc =array_diff_assoc($count_value1,$count_value2);
   $diff_assoc2 =array_diff_assoc($count_value2,$count_value1);
   $diff_key1 =array_diff_key($count_value1,$count_value2);
   $diff_key2 =array_diff_key($count_value2,$count_value1);
   $combine = array_merge($diff_key1,$diff_key2);
    foreach ($combine as $key => $value) {
       array_push($beda_2,$value);
    }
   
   foreach ($diff_assoc as $key1dif => $value1dif) {
      foreach ($diff_assoc2 as $key2dif => $value2dif) {
         if ($key1dif == $key2dif && $key2dif == $key1dif) {
            $selisih = abs($value1dif - $value2dif);
            array_push($beda_2,$selisih);
         }
      }
   }
   echo array_sum($beda_2);
   
}
// $input_a = trim(fgets(STDIN));
// $input_b =trim(fgets(STDIN));
// Anagram($input_a,$input_b);
//https://www.hackerrank.com/challenges/making-anagrams/problem?isFullScreen=false #oksolved

?>
