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
//2, hanya dapat mengubah dari d->c dan c tidak bisa diubah ke d
//

?>