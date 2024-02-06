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



?>