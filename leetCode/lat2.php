<?php

//https://leetcode.com/problems/left-and-right-sum-differences/description/
function leftRightDifference($nums) {
    //not solved
        
    $rightArr =array_merge(array(), $nums); 
    $rightArr[0] = 0;
    $leftArr = array_merge(array(), $nums); 

    function shiftRight(&$array) {
        $lastElement = array_pop($array); // Remove the last element
        array_unshift($array, $lastElement); // Add the last element to the beginning
    }
    
    $leftArr[count($leftArr)-1] = 0;
    echo "[10,4,8,3] "."\n";
    echo "[0,10,14,22]" ."\n"."\n";
    //right
    $right = [];
    for ($i=0; $i <count($rightArr) ; $i++) { 
        for ($j=0; $j <count($rightArr) ; $j++) { 
          //  echo "kanan ".$leftArr[$i] . "-"."\n";
        }
       
    }


    $left = [];
    //echo "-----------\n";
    $l = 0;
    shiftRight($leftArr);
    for ($i=0; $i <count($leftArr) ; $i++) {  //kiri ok
        
        $j = 0;
        $up = 0;
        while ($j <= $i) {
          //$left[$i] += $leftArr[$j];  
         // if (!isset( $left[$i])) {
            //$left[$i] += $leftArr[$j]; 
          //}
          $left[$l] += $leftArr[$j]; //offsett
          //echo "while ". $leftArr[$j] ."| ";
          $j++;
        }
        
           
            //$left[$k] = [];
           
           //echo "kiri i $i  ".$leftArr[$i] ."   "."\n";
        
        $l++;
        
     }
    var_dump($left);
}
// $arr = [10,4,8,3];
// leftRightDifference($arr);

//https://leetcode.com/problems/truncate-sentence/submissions/1185473644/
//solved ->ok
function truncateSentence($s, $k) {
    $toAr = explode(" ",$s);

    $final = [];
    for ($i=0; $i < $k ; $i++) { 
        $final[] = $toAr[$i];
    }
    if (count($final) > 0) {
        $arrToStr = implode(" ",$final);
        echo $arrToStr;
    }
   

}

// $str = "chopper is not a tanuki";
// $num = 4;
// truncateSentence($str,$num);

function numUniqueEmails($emails) {

    $sum = 0;
    $listAr = [];
    for ($a =0; $a < count($emails);  $a++) {
        $emailToArr = explode("@",$emails[$a]);
        for ($i=0; $i < count($emails) ; $i++) { 
            for ($j=0; $j <count($emails) ; $j++) { 
               $localName = $emailToArr[0];
               $domainName = $emailToArr[1];

               echo "a $a | ".$emails[$a] ."\n";
            }
          
        }
    //     var_dump($emailToArr);
    //    echo "\n";
    }
        
}
// $email = ["test.email+alex@leetcode.com",
// "test.e.mail+bob.cathy@leetcode.com",
// "testemail+david@lee.tcode.com",
// "dddd@leecode.com"];
// numUniqueEmails($email);


function kidsWithCandies($candies, $extraCandies) { //solved ok
    $max = max($candies);
    $list = [];
    for ($i=0; $i < count($candies) ; $i++) { 
        $res = $candies[$i] + $extraCandies >= $max ? "true" : "false"; 
        $list[] = $res;
       
    }
    var_dump($list);
}

// $candies = [12,1,12];
// $plus = 10;
// kidsWithCandies($candies,$plus);

//https://leetcode.com/problems/shortest-distance-to-a-character/description/
//not solved
function shortestToChar($s, $c) {
    $s = str_split($s);
    $pos = [];
    $result = [];
    
    foreach($s as $key=>$val){
        if($val == $c){
            $pos[] = $key; //add posisi index from c
        }
    }
    
    $lf = $rt = NULL;
    $keys = array_keys($s); //membuat array key dari array.
  
    for($i=0,$j=0;$i<sizeof($s); $i++){
        echo "i $i j $j $lf"."\n";
        if($i>$rt){
            $j++;
        }
        if(isset($pos[$j])) {$lf = $pos[$j];}
        if(isset($pos[$j+1])) {$rt = $pos[$j+1];}
              
        
        if(isset($rt)){
            $result[] = min(abs($keys[$i]-$lf), abs($keys[$i]-$rt));
        }else{
            $result[] = abs($keys[$i]-$lf);
        }
        
        
    }
    
    //var_dump($result);
    
}

$word = "loveleetcode";
$s = "e";
//shortestToChar($word,$s);


function nextGreaterElement($nums1, $nums2) {
    $final = [];
    for ($i=0; $i <count($nums1) ; $i++) { 
        //echo $nums1[$i] ."\n";
      
        for ($j=0; $j <count($nums2) ; $j++) { 
            $nextnya = $j+1 > count($nums2)-1 ? count($nums2)-1 : $j+1  ;
            if ($nums1[$i] == $nums2[$j]) {
                if ($nums2[$nextnya] > $nums1[$i]) {
                   $final[$i] = $nums2[$nextnya] ;
                }else{
                    $final[$i] = -1;
                }
                // echo $nums1[$i]."i $i"."|".$nums2[$j] ."j $j = $nextnya "."\n";
            }else{
                // $final[$i] = "aaa";
                $cari =  array_search($nums1[$i], $nums2); //result index arr2
                if ($cari > -1 ) {
                    $nextNo =  $cari+1 > count($nums2)-1 ? count($nums2)-1 : $cari+1  ;//index next arr 2
                    if ($nums2[$nextNo] > $nums1[$i]) {
                        $final[$i] = $nums2[$nextNo];
                    }else{
                        $nums2[$i] = -1;
                    }
                }else{
                    //$nums2[$i] = "aaa";
                }
               
            }
            
        }
    }
    var_dump($final);
}
// $aa = [4,1,2,10];
// $bb = [1,3,4,2];
// nextGreaterElement($aa, $bb);


//https://leetcode.com/problems/how-many-numbers-are-smaller-than-the-current-number/description/
function HowManyNumberSmaller($aa){
    $res = [];
    for ($i=0; $i < count($aa) ; $i++) { 
        $count = 0;
       for ($b=0; $b < count($aa) ; $b++) { 
           if ($i !== $b) {
                if ($aa[$i] > $aa[$b]) {
                    $count++;
                }
           }
       }
       array_push($res,$count);
    }

    //$ddd = array_count_values($res);
    
    var_dump($res);
}
$inptx = [8,1,2,2,3];
// HowManyNumberSmaller($inptx);

//https://leetcode.com/problems/left-and-right-sum-differences/description/
function sumleftRight($nums){

    $lefrAr = [];
    $rightArr = [];
    $tot = count($nums);
    $sum  = 0;
    for ($i=0; $i <count($nums) ; $i++) { 
        $plusLeft = 0;
        $mins = count($nums)-1;
        $sum+= $nums[$i];
    }
    var_dump($sum);

    //var_dump($lefrAr);
}
$ax = [10,4,8,3];
sumleftRight($ax);



?>