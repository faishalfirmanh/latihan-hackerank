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

?>