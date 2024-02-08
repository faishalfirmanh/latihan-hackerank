<?php

function getConcatenation($nums) {//solved

    $final = [];
    for ($i=0; $i < count($nums); $i++) { 
        array_push($final,$nums[$i]);
    }

    $merege =array_merge($nums,$final);
    return $merege;
        
}
// $num = [1,2,1];
// getConcatenation($num);
//https://leetcode.com/problems/two-sum/description/
function twoSum($nums, $target){
    $indexSum = [];
    for ($i=0; $i <count($nums) ; $i++) { 
    
        for ($a=0; $a < count($nums) ; $a++) { // a=0 : a dimulai looping dari index ke 0
            if ($a != $i) {
                $res = $nums[$i] + $nums[$a];
                if ($res == $target) {
                    $indexSum[$i] = $i;
                    //echo "i $nums[$i] b $nums[$a] = $res  index $i" ."\n";
                }
               
            }
           
        }
        
    }
    return $indexSum;
}
//8.58
// $num = [3,6,4,2,1];
// $tar = 6;
// twoSum($num,$tar);

//https://leetcode.com/problems/merge-two-sorted-lists/description/
function mergeArrSort($list1, $list2){
   // 2 buah list, digabungkan jadi 1, diurutkan asc
    for ($b=0; $b <count($list2) ; $b++) { 
        $list1[] = $list2[$b];
    }
    sort($list1);
}

// $arr = [1, 2, 3, 1];
// $arr2 = [2, 2, 3, 6,4,1];
// mergeArrSort($arr,$arr2);

//https://leetcode.com/problems/remove-duplicates-from-sorted-array/
function removeDuplicate($nums){
    // input array angka random dan double,
    // output angka berurutan, yang double diganti dengan _,_
    $tot_each = array_count_values($nums);

    $item_douplicate = [];
    $index_douplicate = [];
    $indexDummy = 0;
   foreach ($tot_each as $key => $value) { //cek total tiap item
        if ($value > 1) {
            for ($i=0; $i <count($nums) ; $i++) { 
               if ($nums[$i] == $key) {
                    $item_douplicate[$indexDummy] = $nums[$i];
                    $index_douplicate[] = $i;
                    //echo "index double $nums[$i] - key $key | indexAsli :".$i ." | dummy $indexDummy" ."\n";
                    $indexDummy++;
                }
              
            }
           
        }
   }
   $new_char = [];
   for ($b=0; $b <count($index_douplicate) ; $b++) { 
        $prev = $b != 0 ?  $item_douplicate[$b-1] : null;
        $next = $b != count($item_douplicate)-1 ? $item_douplicate[$b+1] : null;
        $original_index  = $index_douplicate[$b];
        if ($item_douplicate[$b] == $prev) { 
            //$nums[$original_index] = "_";//ganti index asli yg double dengan _;
            unset($nums[$original_index]);
            array_push($new_char,"_");
        }
   }
   //rsort($nums);
   sort($nums);
   for ($c2=0; $c2 <count($new_char) ; $c2++) { 
      $nums[] = $new_char[$c2];
   }
   $toStrFinal = implode(",",$nums);
   echo $toStrFinal;
}
//total 12,
// $arr = [0,0,1,1,1,2,2,3,3,4];
// removeDuplicate($arr);

//https://leetcode.com/problems/number-of-good-pairs/ ->ok solved
//cari semua bilangan kembar sama,
function numberOfGoodpain($ar1){
    $pair = [];
    $tot = 0;
    for ($i=0; $i <count($ar1) ; $i++) { 
        for ($j=0; $j <count($ar1) ; $j++) { 
            if ($i !== $j) {
                if ($ar1[$i] == $ar1[$j] && $j < $i) {
                    $pair[] = [$ar1[$i],$ar1[$j]];
                    $tot++;
                }
            }
            
           
        }
    }
    //echo $tot;
}

// $in = [1,2,3];
// numberOfGoodpain($in);

//https://leetcode.com/problems/best-time-to-buy-and-sell-stock/description/ //not solved time limit
//pilih item  terkecil (a)
//pilih item terbesar (b), dengan sarat index > a
//result jika ada b-a, jika tidak 0
function buyAndSell($list){
  
    echo implode(" ",$list)."\n"."\n";
  
    $jual = [];
   
    for ($i=0; $i <count($list) ; $i++) { 
        for ($j=0; $j <count($list) ; $j++) { 
            if ($j !== $i ) {
                if ($list[$i] < $list[$j]) {
                    if ($i < $j) {
                        $tot = $list[$j] - $list[$i]; 
                        $jual[] = $tot;
                    }
                    
                }
               
            }
            
        }
    }

    $cek = count($jual) > 0 ? max($jual) : 0;
    echo $cek;
   
   
}
// $a =  [7,6,4,3,1];
// buyAndSell($b);

//https://leetcode.com/problems/maximum-number-of-words-found-in-sentences/ solved ok
function mostWordsFound($sentences) {
    $itemTotal = [];
    foreach ($sentences as $key => $value) {
        $toNum = explode(" ",$value);
        $itemTotal[] = count($toNum);
    }
   echo max($itemTotal);
}
// $word =  ["alice and bob love leetcode", "i think so too", "this is great thanks very much"];
// mostWordsFound($word);

function isPalindrome($x) { //palindrome number //ok solved
   
    $toArr = str_split($x,1);
    $last = count($toArr);
    $tot = 0;
    for ($i=0; $i <count($toArr) ; $i++) { 
        $last--;
        if ($toArr[$i] == $toArr[$last] && $last < $i) {
            $tot++;
        }
    }
   
    $pasangan = count($toArr) / 2;
    if ($tot == floor($pasangan)) {
       echo "sama";
    }else{
        echo "tidak sama";
    }
   
}
// isPalindrome(1233217);
//https://leetcode.com/problems/roman-to-integer/ not solved
//input string //I, V, X, L, C, D and M.
function romanToInt($s) {
    $valItem = [
        "C"=>100,
        "D"=>500,
        "I"=>1,
        "L"=>50,
        "M"=>1000, 
        "V"=>5,
        "X"=>10,
    ];
    $convert = array_values($valItem);
    echo "s ".$s ."\n";
    //var_dump($convert);
    echo "\n"."\n";
    $toArr = str_split($s,1);
    $totItem = [];
    for ($i=0; $i <count($toArr) ; $i++) { 
        $item = strtoupper($toArr[$i]);
        $cekNextKey = $i !== count($toArr) -1 ? $i+1 : $i;
        $keyNextNya = $toArr[$cekNextKey];//C
        $lastItemAnggota = count($valItem)-1;
        $lastItemInput = count($toArr)-1;
        
        if (isset($valItem[$item])) {
            $indexOri = array_search($valItem[$item], $convert);
            $NextIndexOri =  array_search($valItem[$toArr[$cekNextKey]], $convert);
            $nextKeyOri = $valItem[$toArr[$cekNextKey]];
            
            if ($i == 0) {
                $totItem[] = $valItem[$item];
                echo "ini index 0 ".$valItem[$item] ."\n";
            }else{
              
                if ($indexOri > $NextIndexOri) {
                    $res = $nextKeyOri - $valItem[$item];
                    if ($res > 0) {
                        $totItem [] = $res;
                        echo "lebih dari  ".$valItem[$item] ."-".$nextKeyOri ."= $res"."\n";
                    }else{
                        $totItem [] = $valItem[$item];
                        echo "moree $indexOri - $NextIndexOri"."\n";
                    }
                  
                    
                }
                else if ($NextIndexOri > $indexOri){
                    $res = $nextKeyOri - $valItem[$item];
                    if ((int)$res > 0) {
                        $totItem [] = $res;
                        echo "kurang dari ".$nextKeyOri ."-".$valItem[$item]."= $res"."\n";
                    }
                  
                } else if ($indexOri == $NextIndexOri && $i !== $lastItemInput){
                    //$res = $nextKeyOri + $valItem[$item];
                    $totItem [] = $valItem[$item];
                    echo "SAMA dengan dari ".$indexOri ."-".$NextIndexOri." key now $item key next $keyNextNya "."= $indexOri."." last item ".$lastItemInput."\n";
                }
            }
        //    $totItem[] = $valItem[$item];
           // echo "$i item ".$item ."| key "."|valNext "."| index ".$indexOri ."- indexNext ".$NextIndexOri."| valOri ".$valItem[$item]."       | val next ".$nextKeyOri."\n";
       }
    }

    echo "\n"."\n";
    var_dump($totItem);
    echo count($totItem) > 0 ? array_sum($totItem) : 0;
   
}

// romanToInt("LVIII");

function restoreString($s,$indices){ //solved
    $toAr =  str_split($s,1);

    if (count($indices) !== count($toAr)) {
       echo "not same";
       die();
    }

    $com = array_combine($indices,$toAr);
    $ll = []; // manual pengganti array_combine
    foreach ($toAr as $key => $value) {
       $ll[$indices[$key]] = $value;
    }
    $ccc = [];
    for ($i=0; $i < count($com) ; $i++) { 
       $ccc[] = $com[$i];
    }
    $toStr = implode("",$ccc);
    echo $toStr;
    // var_dump($ll);
}

// $str = "codeleet";
// $arr =  [4,5,6,7,0,2,1,3];
// restoreString($str,$arr);

//11.22
function vowelStrings($words, $left, $right) { //solved ok
//https://leetcode.com/problems/count-the-number-of-vowel-strings-in-range/submissions/1169419385/
//cari string yang ada huruf konsonan, totalkan. tiap kata
    $arr = ['a', 'e', 'i', 'o', 'u'];
    $tot = 0;
    $itemWord = 0;
    for ($i=$left; $i <= $right ; $i++) { //looping kata berdasarakan range
        $itemWord++;
        $str_arr =  str_split(strtolower($words[$i]) ,1);
        for ($j=0; $j <count($str_arr) ; $j++) {  //looping string word ke huruf
            $first = $str_arr[0];
            $last = $str_arr[count($str_arr)-1];
            if ($j == 0 || $j == count($str_arr)-1 && $i > $j) { //cek huruf pertama dan terakhir
                if (in_array($first, $arr) && in_array($last, $arr) ) { //cek huruf konsonan
                      $tot++;
                    //echo "i $i j: $j ".$first ."| ".$last . " | kata ".strtolower($words[$i])." | "."\n";
                    break;// menghindari douplicate i
                }
              
            }
           
        }
    }
   

    echo $tot;
        
}
// $word =["hey","aeo","mu","ooo","artro"] ;
// vowelStrings($word,1,4);

?>