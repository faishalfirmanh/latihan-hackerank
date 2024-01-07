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


function theBirddayBar($s, $d, $m){

   //d : hasil 
   //m : berapa bilangan
   var_dump($s);
   echo "<br>"."<br>";
   $angk = 0;
   for ($i=0; $i < count($s) ; $i++) { 
      for ($a=$i+1; $a < count($s) ; $a++) { 
         $res = $s[$i] + $s[$a];
         if ($res == $d) {
            echo ".index ke ".$s[$i]." | ".$s[$a] ." == ".$res;
            echo "<br>";
         }
        
      }
      
   }
   
   
}
// $arr = [1, 2 ,1, 3, 2];
// $res = 3;
// $item = 2;

// theBirddayBar($arr,$res,$item);
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

//solved
//https://www.hackerrank.com/challenges/sock-merchant/problem?isFullScreen=true
function pairedSock($length_s,$item_kaos){
   $to_arr_a = explode(" ",$item_kaos);

   if (count($to_arr_a) != $length_s) {
       echo "TIDAK SAMA A";
       die();
   }

   $total_item_masing2 = array_count_values($to_arr_a);

   $item_nya = array();
   $total_nya = array();
   foreach ($total_item_masing2 as $key => $value) {
       if ((int) $value > 1 ) {
          if ((int)$value >= 2 && (int) $value < 4) {
               array_push($item_nya,$key);
               array_push($total_nya,1);
          }else if((int) $value >= 4){
               array_push($item_nya,$key);
               $val_double = (int) $value / 2;
               $cek_ = $value % 2 == 0 ? $val_double : floor($val_double);
               array_push($total_nya,$cek_);
          }
       }else{
           array_push($item_nya,0);
           array_push($total_nya,0);
       }
   }
   
   
   $combine = array_combine($item_nya,$total_nya);
  
  

   $tot_ = array();
   foreach ($combine as $key => $value) {
      array_push($tot_,$value);
   }

   if (array_sum($tot_) > 0) {
       echo array_sum($tot_);
   }else{
       echo 0;
   }
  

}
// $length_s = trim(fgets(STDIN));
// $item_kaos = trim(fgets(STDIN));
// pairedSock($length_s,$item_kaos);

function appleAndOrange($start_end, $aple_orange, $item, $tiap_apel,$tiap_orange){
   $to_arr_a_start = explode(" ",$start_end);
   $start = $to_arr_a_start[0];
   $end = $to_arr_a_start[1];
   
   $to_arr_loc = explode(" ",$aple_orange);
   $mulai_apple = $to_arr_loc[0];
   $mulai_jeruk = $to_arr_loc[1];

   $to_arr_item =  explode(" ",$item);


   if (count($to_arr_a_start) != 2) {
       echo "start end harus 2";
       die();
   }

   if (count($to_arr_loc) != 2) {
      echo "lokasi harus 2";
      die();
   }

   if (count($to_arr_item) != 2) {
      echo "item harus 2";
      die();
   }

   $to_arr_each_apple =  explode(" ",$tiap_apel);
   $to_arr_eact_orange =  explode(" ",$tiap_orange);

   $lok_aple = $to_arr_item[0];
   $lok_jeruk = $to_arr_item[1];

   if (sizeof($to_arr_each_apple) != (int) $lok_aple ) {
      echo "item apple tidak sama dengan jarak";
      die();
   }

   if (sizeof($to_arr_eact_orange) != (int) $lok_jeruk) {
      echo "item orange tidak sama dengan jarak";
      die();
   }
   
   /** looping aple */
   $list_tot_apple_pp = array();
   for ($i=0; $i < count($to_arr_each_apple) ; $i++) { 
      $res = $mulai_apple + $to_arr_each_apple[$i];
      array_push($list_tot_apple_pp, $res);
      
   }

  
   $list_tot_orange_pp = array();
   for ($i=0; $i < count($to_arr_eact_orange) ; $i++) { 
      $res = $mulai_jeruk + $to_arr_eact_orange[$i];
      array_push($list_tot_orange_pp, $res);
   }

   $range = array();
   $tot_ap =array();
   $tot_or = array();
   for ($i=$start; $i <= $end ; $i++) { 
      foreach ($list_tot_apple_pp as $keya => $valueAp) {
         if ($valueAp == $i) {
            array_push($tot_ap,$valueAp);
         }
      }
      foreach ($list_tot_orange_pp as $keyo => $valueOr) {
         if ($valueOr == $i) {
            array_push($tot_or,$valueOr);
         }
      }
      array_push($range,$i);
   }

   echo count($tot_ap);
   echo "\n";
   echo count($tot_or);



}

// $start_end = trim(fgets(STDIN));
// $aple_orange = trim(fgets(STDIN));
// $itemTot = trim(fgets(STDIN));
// $tiap_apel =  trim(fgets(STDIN));
// $tiap_orange =  trim(fgets(STDIN));



// appleAndOrange($start_end,$aple_orange, $itemTot, $tiap_apel, $tiap_orange);


//list = nilai alfabet,
//hurufnya =
//tentuntan  tinggi maxnya * jumlah huruf


function pdfViewer($listItmeNumber,$word){
   $alvabet = "abcdefghijklmnopqrstuvwxyz";
   $loop_alfabet = str_split(strtolower($alvabet),1);;
   $loop_number_ = explode(" ",$listItmeNumber);
   $loop_input_word = str_split(strtolower($word),1);// explode("",strtolower($word));

   if (count($loop_number_) != 26) {
       echo "ERRORR total list harus 26";
       die();
   }

      $kombine = array_combine($loop_alfabet,$loop_number_);
      
      $list_val = [];
      foreach ($kombine as $key => $value) {
         for ($c=0; $c < count($loop_input_word) ; $c++) { 
            if ($loop_input_word[$c] == $key) {
               array_push($list_val,$value);
            }
         }
      }

     echo max($list_val) * count($list_val);
  

}
//https://www.hackerrank.com/challenges/designer-pdf-viewer/problem ->ok solved
// $input_list = trim(fgets(STDIN));
// $input_word = trim(fgets(STDIN));
// pdfViewer($input_list,$input_word);


function MinumumDeleted($input,$listAr){
   $toArr = explode(" ",$listAr);

   if ($input != count($toArr)) {
      echo "ERROR TIDAK SAMA";
      die();
   }
   $notSame = [];
   $less = [];
   $totSame = array_count_values($toArr);
   
}
//https://www.hackerrank.com/challenges/equality-in-a-array/problem?isFullScreen=true .=>not solved
// $input = trim(fgets(STDIN));
// $listAr = trim(fgets(STDIN));
// MinumumDeleted($input,$listAr);
//test case 16
//63 //output 18  | output harusnya harusnya,55
//36 12 60 99 78 33 4 21 22 9 12 21 34 76 21 3 3 37 65 27 21 42 11 14 21 88 46 63 79 6 37 94 99 68 76 6 21 86 49 56 22 90 74 83 20 21 94 60 76 75 96 99 92 65 77 26 51 21 77 22 97 34 56
//Expected Output


//https://www.hackerrank.com/challenges/divisible-sum-pairs/problem?isFullScreen=true //solved ok
function divisibleSumPairs($detail, $list){
   $toArrInput = explode(" ",$detail);
   $toArr = explode(" ",$list);

   if (count($toArr) != (int) $toArrInput[0] ) {
      echo "list array tidak sama dengan nilai";
      die();
   }
   $hasilValue = (int) $toArrInput[1];
   // 2x perulangan
   //1. loop pertama untuk cek array biasah
   //2. loop ke 2 i+1 dikarenankan dimulai tidak dari index ke 0. index ke 0 ambil dari looping ke 1
   $res = 0;
   for ($i=0; $i <count($toArr) ; $i++) { 
      for ($a=$i+1; $a < count($toArr) ; $a++) { 
         $cekResult = $toArr[$i] + $toArr[$a];
         if ($cekResult % $hasilValue == 0) {
            // echo "nilai ".$toArr[$i] ." + ". $toArr[$a] . " index ".$i . " index ".$a;
            // echo "\n";
            $res++;
         }
      }
   }
   echo $res;
   
}
// $inpt_tot = trim(fgets(STDIN));
// $listAr = trim(fgets(STDIN));
//divisibleSumPairs($inpt_tot,$listAr);

//https://www.hackerrank.com/challenges/angry-professor/problem?isFullScreen=true //->solved ok
function AngryProfeshor($k, $n){
  $toArr =  explode(" ",$n);;
  $kehadiran = 0;
  for ($i=0; $i < count($toArr) ; $i++) { 
    if ((int)$toArr[$i] <= 0) {
      $kehadiran++;
    }
  }
  if ($kehadiran < $k) {
   echo "YES";
  }else{
   echo "NO";
  }
 
}
// $k = trim(fgets(STDIN));
// $n = trim(fgets(STDIN));
// AngryProfeshor($k,$n);

//https://www.hackerrank.com/challenges/save-the-prisoner/problem?isFullScreen=true  ->not ok

function SaveThePrisoner($tahanan, $permen,$kursi){

      $counter = [$kursi];
      echo "n = ".$tahanan . "| m = ".$permen . "| s = ".$kursi ."\n";

      //start value looping = s
      //total item / looping = m
      //max last value in loop = n

      while ($counter[0] <= $permen) {
         echo "Perulangan ke-$counter[0] \n";

         if ($counter[0] > $tahanan) {
            $counter[0] = + 1;
            $counter[0]++;
            
         }else{
            $counter[0]++;
         }        
      }

}
// $n = 4;//intval(trim(fgets(STDIN))); //total tahanan
// $m = 6;//intval(trim(fgets(STDIN))); //jumlah permen
// $s = 2;//intval(trim(fgets(STDIN))); //dimulai
// SaveThePrisoner($n,$m,$s);


//https://www.hackerrank.com/challenges/funny-string/problem?isFullScreen=true //funny string ok solved
function FunnyStr($str){
   $toArr = str_split($str,1);

   $arr1asci = [];
   for ($i = 0; $i < count($toArr); $i++) {
      $asci = ord($toArr[$i]);
      array_push($arr1asci,$asci);
   }

   $reverse = strrev($str);
   $toArr2 = str_split($reverse,1);
   $arrasci2 = [];

   for ($b = 0; $b < count($toArr2); $b++) {
      $asci2 = ord($toArr2[$b]);
      array_push($arrasci2,$asci2);
   }

   //asci1
   $res1 = [];
   for ($c=0; $c <count($arr1asci)-1 ; $c++) { 
      if ($arr1asci[$c] >$arr1asci[$c+1] ) {
         $res = $arr1asci[$c] - $arr1asci[$c+1];
      }else{
         $res = $arr1asci[$c+1]  - $arr1asci[$c];
      }
      array_push($res1,$res);
   }
  
   //asci2
   $res2 = [];
   for ($d=0; $d < count($arrasci2)-1 ; $d++) { 
      if ($arrasci2[$d] >$arrasci2[$d+1] ) {
         $res = $arrasci2[$d] - $arrasci2[$d+1];
      }else{
         $res = $arrasci2[$d+1]  - $arrasci2[$d];
      }
      array_push($res2,$res);
   }

   if ($res1 == $res2) {
      return "Funny";
   }else{
      return "Not Funny";
   }
}                                                
// $inputWord = trim(fgets(STDIN));
// FunnyStr($inputWord);
//https://www.hackerrank.com/challenges/migratory-birds/problem?isFullScreen=true //not solved
function FlatLateSpace($m,$n){
   $toArr = explode(" ",$n);
   if ($m == count($toArr)) {
     echo 0;
     die();
   }
  
   asort($toArr);

   for ($i=0; $i < count($toArr) ; $i++) { 
      echo $toArr[$i];
      echo "\n";
   }

}
// $kota = trim(fgets(STDIN)); 
// $statisun = trim(fgets(STDIN)); 
// FlatLateSpace($kota,$statisun);

//https://www.hackerrank.com/challenges/migratory-birds/problem?isFullScreen=true //SOLVED OK
function MigratoryBird($tot,$list){

   $Arr = explode(" ",$list);
   if (count($Arr) != $tot) {
      echo "ERROR TIDAK SAMA";
      die();
   }

   $countVal = array_count_values($Arr);
   $max = max($countVal);
   $itemAA = [];
   foreach ($countVal as $key => $value) {
      if ($value == $max) {
         array_push($itemAA,$key);
      }
   }
   echo min($itemAA);
}
// $tot_ar = trim(fgets(STDIN));
// $listAr = trim(fgets(STDIN));
// MigratoryBird($tot_ar,$listAr);

//https://www.hackerrank.com/challenges/kangaroo/problem NOK SOLVED
function JumpKangguru($inpt){
    $toArr = explode(" ",$inpt);

    if (count($toArr) !== 4) {
      echo "HARUS 4";
      die();
    }

    $index1 = $toArr[0];
    $kang1 = (int) $index1 > $toArr[1] ? $index1 - $toArr[1] : $toArr[1] - $index1;
    $kang2 = (int) $toArr[2] > $toArr[3] ? $toArr[2] - $toArr[3] : $toArr[3] - $toArr[2];

    if ($toArr[2] > $toArr[0] && $toArr[3] > $toArr[1]) {
      echo "NO";
      die();
    }

    if ($toArr[1] - $toArr[3] == 0) {
      echo "NO";
      die();
    }

   $lompatA = [];
 

   $lompatB = [];
   
   for ($b=$toArr[0]; $b <= 10000; $b+=$toArr[0]) { 
      array_push($lompatA,$b);
    }
   
    for ($b2=$toArr[2]; $b2 <= 10000 ; $b2+= $toArr[3]) { 
      array_push($lompatB,$b2);
    }



   $difference = array_intersect($lompatA, $lompatB);

   //var_dump($difference);
   if (!empty($difference)) {
      echo "YES";
   } else {
      echo "NO";
   }
   
}

// $tot_ar = trim(fgets(STDIN));
// $tot_ar = "1928 4306 5763 4301";
// JumpKangguru($tot_ar);

?>
