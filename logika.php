<?php


//tess
//hackerank min-max-sum, mencari result 2 value,//------------bisa
  function getMin($ar){
    $max = max($ar);
    $total_min = [];
    if (($key = array_search($max, $ar)) !== false) {
        unset($ar[$key]); //remove permanent
        $total_min_fix = array_sum($ar);
        array_push($total_min,$total_min_fix);
    }
    return $total_min[0];
  }

  function getMax($ar){
    $min = min($ar);
    $total_max = [];
    if (($key = array_search($min, $ar)) !== false) {
        unset($ar[$key]); //remove permanent
        $total_min_fix = array_sum($ar);
        array_push($total_max,$total_min_fix);
    }
    return $total_max[0];
  }
  function getArr($ar){
    $min_result =  getMin($ar); //dibedakan 2 fungsi karena kalau cuma 1 akan ikut keremove
    $max_result = getMax($ar);
    echo $min_result .'&nbsp'.$max_result;
  }
//getArr(array(1,2,3,4,5)); // untuk printnya

//-----------------------------------------------------------
//contoh jalankan script php di terminal php namafile.php
//cara 1
// $input_1 = fopen("php://stdin","r");
// $input_2 = fopen("php://stdin","r");
// $a = intval(trim(fgets($input_1)));
// $b = intval(trim(fgets($input_2)));
// echo "Hasilnya : " . $a * $b;
//cara 2
// echo "Dari mana anda berasl: ";
// $asal = trim(fgets(STDIN));
// echo "Oh, dari $asal ya\n";


//-----------------------Plus minus-------bisa
//echo 'Masukkan jumlah array : ';
//$input_1 = trim(fgets(STDIN)); //aktifkan kalau maun nyoba
//echo "input item array : ";
//$input_2_item = trim(fgets(STDIN)); //n
 function minMaxfunc($input_1,$input_2_item){ //ini fungsinya
    $to_arr = explode(" ",$input_2_item);
    $total_arr_item = count($to_arr);
    if ($input_1 != $total_arr_item)
    {
        echo "!! Error not same";
        die();
    }
    else
    {
          $negative =  array_filter($to_arr, function($x) {
              return $x < 0;
          });
          $positive = array_filter($to_arr, function($x) {
              return $x > 0;
          });
          $zero = array_filter($to_arr, function($x) {
              return $x == 0;
          });
          $total_negative = count($negative);
          $total_zero = count($zero);
          $total_positive = count($positive);

         $bagi_positive =  $total_positive / count($to_arr);
         $bagi_zero =   $total_zero / count($to_arr);
         $bagi_negative = $total_negative / count($to_arr);

         echo $bagi_positive;
         echo "\n";
         echo $bagi_negative;
         echo "\n";
         echo $bagi_zero;
  }
}
//minMaxfunc($input_1,$input_2_item);
//----------------------------beautiful-days-at-the-movies-------bisa
//$input_nya = trim(fgets(STDIN));
function beautifulDaysConsole($input) {
   $input_first_toarr = explode(" ",$input);
   $n = $input_first_toarr[0];
   $m = $input_first_toarr[1];
   $s = $input_first_toarr[2];
   $tot_result = array();//berisi yang tidak ada hasil
   for ($i=$n; $i <=$m; $i++) {
      $reverse = strrev($i);
      $diff = abs($i - $reverse); //dibolak balik sama saja
      $bagi = $diff / $s;
      $habis_dibagi = $diff % $s == 0 ? $bagi : '';
      array_push($tot_result,$habis_dibagi);
   }
   function myFilter($var){
     return ($var !== NULL && $var !== FALSE && $var !== "");
   }
   $result_after_filter = array_filter($tot_result, "myFilter");
   $final_result = count($result_after_filter);
   echo $final_result;
}

//beautifulDaysConsole($input_nya);
//-------------------------------------
//drawing-book
//echo "input jumlah halaman : ";
//$input_jumlah_halaman = trim(fgets(STDIN));
//echo "input halaman yang dituju : ";
//$halaman_dituju = trim(fgets(STDIN));

function howMuchFlip($length_page, $destination_page){
   //echo "panjang halaman ".$length_page. " destinations ".$destination_page;
   if (intval($destination_page) > intval($length_page)) {
      echo "!! Error input failed !! :";
      echo "\n";
      echo "destination more then length page";
   }else {

   }
}
//howMuchFlip($input_jumlah_halaman, $halaman_dituju);

//----------------------------------------electronics-shop
//must be buy keyboard and drive find expensive, result total expensive / negative if can't buying
// echo "first input : ";
// $first_input = trim(fgets(STDIN));//separtor space just 3 ex 10 2 3 first (10) is price, 2 and 3 length item
// echo "input list price keyboard : ";
// $model_keyboard = trim(fgets(STDIN)); //list price keyboad
// echo "input list price drive : ";
// $model_drive = trim(fgets(STDIN));

  function getMoneySpent($firts,$keyboard,$drive){
    $input_first_toarr = explode(" ",$firts);
    $price = intval($input_first_toarr[0]);
    if (count($input_first_toarr) != 3) {
      echo "!! ERROR !!";
      echo "\n";
      echo "first input must 3";
      die();
    }else {
        $tot_item_keyboard = intval($input_first_toarr[1]);
        $tot_item_drive = intval($input_first_toarr[2]);
        $list_price_keyboard = explode(" ",$keyboard);
        $list_price_drive = explode(" ",$drive);
        if (count($list_price_keyboard) != $tot_item_keyboard) {
            echo "!! ERROR !!";
            echo "\n";
            echo "TOTAL Item keyboard not same ";
            die();
        }
        if(count($list_price_drive) != $tot_item_drive) {
            echo "!! ERROR !!";
            echo "\n";
            echo "TOTAL Item drive not same ";
            die();
        }
        echo "\n";
    }
  }
  //getMoneySpent($first_input,$model_keyboard,$model_drive);

//-----------------------------find-digits

// echo "masukkan total input : ";
// $tot_input_bil = trim(fgets(STDIN));
// echo "masukkan bilangan : ";
// $decimal = trim(fgets(STDIN));
//echo $tot_input_bil;

function findDigits($tot,$bil){
  $ori = $bil;
  $arr_nya = str_split($bil); //
  $tot_aa = count($arr_nya);
  $arr_empty = array();
  foreach ($arr_nya as $key ) {
     $result = intval($ori) / intval($key);
     $res_2 = intval($ori) %  intval($key) == 0 ? $result : '';
     array_push($arr_empty,$res_2);
  }
  function myFilter($var){
    return ($var !== NULL && $var !== FALSE && $var !== "");
  }
  $result_after_filter = array_filter($arr_empty, "myFilter");
  //var_dump($result_after_filter);
  print_r(count($result_after_filter));
  echo "\n";
}
// findDigits($tot_input_bil,$decimal);

//----------------------------- the-hurdle-race
  //$input_chacacter = trim(fgets(STDIN));
  //$input_obstacle = trim(fgets(STDIN));

  function hitungBerhasil($prof,$rintangan){
    $to_ar_prof = explode(" ",$prof);
    if (count($to_ar_prof) != 2) {
       echo "Error First input most 2";
       die();
    }
    $to_ar_rin = explode(" ",$rintangan);
    $length_of_obstacle = $to_ar_prof[0];
    $max_jump = $to_ar_prof[1];

    $yang_dapat_dilompati = array();//kalau 0 berhasil semua
    $yang_tidak_dapat = array();
    $yang_tidak_dapat_100 = array();
    if ($length_of_obstacle != count($to_ar_rin)) {
       echo "Error ! obstacle must be same";
       die();
    }
     foreach ($to_ar_rin as $key) {
        if (intval($key) > intval($max_jump)) {
            if (count($to_ar_rin) > 99) {
               $res = count($to_ar_rin)-intval($max_jump);
               array_push($yang_tidak_dapat_100,$res);
            }else {
               array_push($yang_tidak_dapat,$key);
            }
        }
     }
     $final_res = count($yang_tidak_dapat_100) > 0 ? $yang_tidak_dapat_100[0] : count($yang_tidak_dapat);
     echo $final_res;
  }
//hitungBerhasil($input_chacacter,$input_obstacle);
//---------------------------------------------------
//https://www.hackerrank.com/challenges/quicksort1/problem?isFullScreen=true
   // $input_tot_arr = trim(fgets(STDIN));
   // $input_list_ar =  trim(fgets(STDIN));

   function urutkan($a,$b){
     $ar = explode(" ",$b);
     if (count($ar) != $a) {
        echo "Not same";
        die();
     }
     sort($ar);
     $arr_empty = array();
     for($x=0;$x<count($ar);$x++)
     {
        $urut =  $ar[$x];
        array_push($arr_empty,$urut);
     }
     $to_str = implode(" ",$arr_empty);
     echo $to_str;
   }
   //urutkan($input_tot_arr,$input_list_ar);
//----------------------------------------------
//https://www.hackerrank.com/challenges/migratory-birds/problem?isFullScreen=true
// $input_tot_arr = trim(fgets(STDIN));
// $input_list_ar =  trim(fgets(STDIN));
function migrationGroup($totalItem,$list){
  $arr = explode(" ",$list);
  if (count($arr) != $totalItem) {
      echo "ERROR NOT SAME";
      die();
  }
   $cc = array_count_values($arr); //menjadi item array jumlahnya berapa
   $max = max($cc);
   $new_arr = min(array_keys($cc, max($cc))); //membalik ->cari yang terkecil result mesti 1
   echo $new_arr;
}
// migrationGroup($input_tot_arr,$input_list_ar);
 ?>
