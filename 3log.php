<?php
//https://www.hackerrank.com/challenges/equality-in-a-array/problem?isFullScreen=true ->ok solved
function MinumumDeleted($input,$listAr){
    $toArr = explode(" ",$listAr);
    sort($toArr);
    if ($input != count($toArr)) {
       echo "ERROR TIDAK SAMA";
       die();
    }
    
    //cek tiap array berapa banyak
    $totSame = array_count_values($toArr);

    //cek max total
    $max = max($totSame);
    $allTotNumber = 0;
    foreach ($totSame as $key => $value) {
       $allTotNumber += $value;
    }
    
    $finalResult = $allTotNumber - $max;
    echo $finalResult;
 
 }
//  $input = trim(fgets(STDIN));
//  $listAr = trim(fgets(STDIN));
//  MinumumDeleted($input,$listAr);





function palindrome($s){ //polindrome ->sukses

   if (strpos($s, ' ') !== false) { //kalimat yang mengandung spasi
     $cccc =  preg_replace('/\s+/', '', strtolower($s));
     $toAr =  str_split($cccc,1);
  } else { //kata
     $toAr = str_split($s,1);
  }
  
   $length = count($toAr);

   $b = $length-1;
   $totSame = 0;
   for ($i=0; $i < count($toAr) ; $i++) { 
      $kiri =  preg_replace('/\s+/', '', strtolower($toAr[$i]));
      $kanan = preg_replace('/\s+/', '', strtolower($toAr[$b]));
      if ($kiri == $kanan ) {
         $totSame++;
      }
      $b--;
   }
   
   $cekResult = $length == $totSame ? 'poliandrome' : 'not';
 
   echo $cekResult;
 
}
// $inputstr = "Was it a rat i sawXZ";
// palindrome($inputstr);


//https://www.hackerrank.com/challenges/the-love-letter-mystery/problem?isFullScreen=true -> not solved
//love letter mistery
//hanya dapat mengubah 1 x tiap perubagab
//2, hanya dapat mengubah dari d->c dan 
//c tidak bisa diubah ke d atau d to b
//

//https://www.hackerrank.com/challenges/missing-numbers/problem -> not ok kene timelimit
function missingNumber($inputa,$listA,$inputb,$b){
      $arr_a = explode(" ",$listA);
      $arr_b = explode(" ",$b);

     
      if (count($arr_a) != $inputa) {
         echo "TIDAK SAMA A ".count($arr_a) ." $inputa";
         die();
      }

      if (count($arr_b) != $inputb) {
         echo "TIDAK SAMA b";
         die();
      }


      sort($arr_a);
      sort($arr_b);

      $val_a =array_count_values($arr_a);
      $val_b = array_count_values($arr_b);

      $tidakSama = [];
      foreach ($arr_b as $key => $value) {
         $carinya = array_search($value, $arr_a);
         if ($carinya !== false) {
            if ($val_a[$value] != $val_b[$value]) {
               $tidakSama[$key] = $value;
            }
      } else {
          $tidakSama[$key] = $value;
         }
      }

      sort($tidakSama);
      $finalResult = array_unique($tidakSama);
      $to_str = implode(" ",$finalResult);
      echo $to_str;

}

// $totA = 10;// trim(fgets(STDIN));
// $a = "11 4 11 7 13 4 12 11 10 14";//"203 204 205 206 207 208 203 204 205 206";//trim(fgets(STDIN));
// $inputb = 15; // trim(fgets(STDIN));
// $b = "11 4 11 7 3 7 10 13 4 8 12 11 10 14 12"; //trim(fgets(STDIN));
// missingNumber($totA,$a,$inputb,$b);
//jika ada angka double jumlahnya harus sama 1 dan 2
//list angka asc
//tidak boleh ada item yang double
//max min <= 100


//https://www.hackerrank.com/challenges/between-two-sets/problem?isFullScreen=true
function betweentwoset($a,$b){
   $toArra = explode(" ",$a);
   $toArrb = explode(" ",$b);

}
//1. Elemen-elemen array pertama adalah semua faktor bilangan bulat yang dipertimbangkan
//2. Bilangan bulat yang dipertimbangkan adalah faktor dari semua elemen larik kedua

// $inptA = "2 6";
// $inptB = "24 36";
// betweentwoset($inptA,$inptB);

//https://www.hackerrank.com/challenges/jumping-on-the-clouds/problem?isFullScreen=true ->ok Solved
function jumpingOnTheCloud($tot,$c){
   $toAr = explode(" ",$c);

   if ($tot != count($toAr)) {
      echo "tidak sama";
      die();
   }

   $jumping_Index2 = [];
   $index = 0;
   $lastIndex = count($toAr)-1;
   for ($b=0; $b < count($toAr) ; $b+=2) {    //kelipatan 2 
      if ($toAr[$b] != 1) {
         $jumping_Index2[$b] = $b;
      }
      else{
         if ($b != 0) {//jika bukan index pertama (ke 0)
            if ($toAr[$b-=1] != 1) {
              $jumping_Index2[$b] = $b;
            }
          }
      }
   }

   for ($i=0; $i < count($toAr) ; $i++) { //kelipatan ke 1
      if ($index == $lastIndex) { 
         if ($toAr[$i] != 1) { //jika last item masih 0
            $jumping_Index2[$i] = $i;
          }
      }
      $index++;
   }
 
   $final = count($jumping_Index2)-1;
   echo $final;
 
}
// $tot = trim(fgets(STDIN));
// $input =  trim(fgets(STDIN));
//jumpingOnTheCloud($tot,$input);

//

?>