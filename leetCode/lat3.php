<?php


//ok solved
//https://leetcode.com/problems/neither-minimum-nor-maximum/
function NeitherMinMax($nums){
    $min = min($nums);
    $max = max($nums);
    $res = [];

    for ($i=0; $i < count($nums) ; $i++) { 
        if ($nums[$i] !== $max && $nums[$i] !== $min) {
           $res[] = $nums[$i];
           
        }else{
            $res[] = -1;
           
        }
    }
    
    return max($res);

}

// $arr = [1,2,3,4];
// print_r(NeitherMinMax($arr));


//https://leetcode.com/problems/find-the-peaks
//solved ok
function findPeaks($mountain) {
    
    $arrIndex = [];
    for ($i=0; $i < count($mountain) ; $i++) { 
       $cekPrev = $i == 0 ? 0 : $i-1;
       $cekNext = $i == count($mountain)-1 ? count($mountain)-1 : $i+1;
       if ($mountain[$i] > $mountain[$cekPrev] && $mountain[$i] > $mountain[$cekNext]) {
        $arrIndex[] = $i;
       }
    }

    return $arrIndex;


}
// $are = [1,4,3,8,5];
// findPeaks($are);

//https://leetcode.com/problems/sort-the-people/
//solved
function sortPeople($names, $heights){
    
    
     $list_name_sort = [];
     for ($a=0; $a < count($heights) ; $a++) { 
        $list_name_sort[$heights[$a]] = strtolower($names[$a]);
     }

    krsort($list_name_sort);     
    print_r($list_name_sort);
   
}
// $names = ["Mary","John","Emma"];
// $heights =[180,165,170];

// sortPeople($names,$heights);


//https://leetcode.com/problems/find-the-highest-altitude/description/
//solved,
//ada list array. array ori + 1 (index 0)
//jumlahkan ke samping kanan $arr[n]+ $arr[n+1], ambil cari yang paling besar
function largestAltitude($gain) {
        
    $res = [0];
    for ($i=0; $i < count($gain) ; $i++) { 
        if ($i != 0) {
            if (isset($res[$i])) {
                $res[] = $res[$i] + $gain[$i];
            }else{
                $res[] = $res[$i] + $gain[$i];
            }
        }else{
            $res[] = $gain[$i];
        }
        
    }
    print_r(max($res));
}
// $num = [-5,1,5,0,-7];
// largestAltitude($num);


//https://leetcode.com/problems/baseball-game/
//Solved ok
function calPoints($operations) {

    $arEmp=[];

    for ($i=0; $i <count($operations) ; $i++) { 
        $prev = count($arEmp)-1;
        if ($operations[$i] == "+") {
            if (count($arEmp) > 1) {
                $arEmp[] = $arEmp[$prev] + $arEmp[count($arEmp)-2];
            }
        }elseif($operations[$i] == "D"){
            $arEmp[] = $arEmp[$prev] * 2;
        }elseif($operations[$i] == "C"){
            //unset($arEmp[$prev]);
            array_splice($arEmp, $prev, 1);
        }else{
            $arEmp[] = $operations[$i];
        }
    }
    $total = count($arEmp) > 0 ? array_sum($arEmp) : 0;
    return $total;

}
// $opr = ["5","-2","4","C","D","9","+","+"];
// calPoints($opr);

//https://leetcode.com/problems/missing-number/
//solved ok
function missingNumber($nums) {
    sort($nums);
    $aa = 0;
    $res = 0;
    for ($i=0; $i <count($nums) ; $i++) { 
        $aa++;
        if ($nums[$i] +1 == $aa) {
           $res = $aa;
        }
    }
    echo $res;
    
   
}

// $nm = [0,2,1,4];
// missingNumber($nm);

function distributeCookies($cookies, $k) {
    $n = count($cookies);
    if ($k > $n) {
        return 0; // If k is greater than the length of the array, return 0.
    }

    // Calculate the sum of the first 'k' elements.
    $max_sum = 0;
    for ($i = 0; $i < $k; $i++) {
        $max_sum += 1;
        echo $i ."\n ";
    }

    echo $max_sum;

    // Initialize the current sum to the max_sum.
    $current_sum = $max_sum;

    // Use a sliding window to calculate the sum of other 'k' consecutive elements.
    // for ($i = $k; $i < $n; $i++) {
    //     $current_sum += $cookies[$i] - $cookies[$i - $k];
    //     $max_sum = max($max_sum, $current_sum);
    // }

    // var_dump($max_sum);
}

// $cookies = [6,1,3,2,2,4,1,2];
// $k = 2;
// distributeCookies($cookies,$k);


//https://leetcode.com/problems/check-if-array-is-sorted-and-rotated/description/
//not solved
function check($nums) {

    function abs_diff($v1, $v2) {
        $diff = $v1 - $v2;
        return $diff < 0 ? (-1) * $diff : $diff;
    }

    $aa = 0;
    $cek =0;
    for ($i=0; $i <count($nums) ; $i++) { 
        $next = $i != count($nums)-1 ? $i+1 : 0;
        $prev = $i > 0 ?  $i-1 : count($nums)-1;
        if ($nums[$i]+1 == $nums[$next] || $nums[$i] == $nums[$next]) {
            $cek = 1;
            break;
        }elseif($nums[$prev]-1 == $nums[$prev] && $nums[$i] == $nums[$prev]){
            $cek = 1;
            break;
        }else{
            if ($nums[$i] == max($nums) && $nums[$i]-1 == $nums[$next]) {
                $cek =1;
                break;
            }elseif($nums[$i] == min($nums) && $nums[$i]+1 == $nums[$next]){
                $cek =1;
                break;
            }
            else{
                $selisihPrev = abs($nums[$i]-$nums[$prev]);
                $selisihNext = abs($nums[$i]-$nums[$next]);
                if (count($nums) % 2 == 1) {
                    if ($selisihNext == $selisihPrev) {
                       $cek = 1;
                      
                    }else{
                      $cek = 0;
                    }
                    
                }else{
                    $cek = 0;
                    break;
                }
                
                
            }
            
        }
    }
    echo $cek;
        
}
//$nm = [6,10,6];
$nm = [1,1,1,1,1];//true
//$nm = [1,2]; //true
//$nm = [2,1];//true
//$nm = [3,4,5,1,2]; //true
//$nm = [2,1,3,4]; //false


//https://leetcode.com/problems/relative-sort-array/description/
//not solved

function relativeSortArray($arr1, $arr2) {
    $final = [];
    


}
// $arr1 =[2,3,1,3,2,4,6,7,9,2,19];
// $arr2 = [2,1,4,3,9,6];
// relativeSortArray($arr1,$arr2);

//https://leetcode.com/problems/find-common-characters/description/
//not solved
function commonChars($words) {
    $final = [];
    for ($i=0; $i <count($words) ; $i++) { 
        $toArr = str_split($words[$i]);
        for ($b=0; $b < count($toArr) ; $b++) { 
            for ($c=0; $c < count($words) ; $c++) { 
                
            }
            
        }
       
    }
    $commonChars = str_split(array_shift($words));
    foreach ($words as $word) {
        $wordChars = str_split($word);
        $pp = array_intersect($commonChars, $wordChars);
    }
    print_r($pp);
    //print_r($final);
        
}
// $nnn =["cool","lock","cook"];
// commonChars($nnn);

//https://leetcode.com/problems/count-elements-with-maximum-frequency/
//solved ok
function maxFrequencyElements($nums) {

    $tot = array_count_values($nums);
    $res = [];
    foreach ($tot as $key => $value) {
        $res[] = $value;
    }
    $maxnya = max($res);
    $hasil = 0;
    foreach ($res as $key => $value) {
        if ($value == $maxnya) {
           $hasil += $value;
        }
    }
    echo $hasil;
}
// $nums = [1,2,2,3,1,4];
// $num2 = [1,2,3,4,5];
// maxFrequencyElements($num2);

//https://leetcode.com/problems/delete-greatest-value-in-each-row/

//not solved
function deleteGreatestValue($grid) {

    $pp = [];
    for ($i=0; $i < count($grid) ; $i++) { 
        $loop1 = $grid[$i];
        for ($b=0; $b < count($loop1) ; $b++) { 
           
        }

        $cek = $grid[0] > $grid[1] ? $grid[0] : $grid[1];
        $pp[] = max($grid[$i]);
        //var_dump($pp);   
    }

    $dua = [max($pp)];

    var_dump($dua);
    
}
// $kasa =  [[1,2,4],[3,3,1]];
// $kasb =  [[7,4,2],[5,3,1]];
// deleteGreatestValue($kasa);

//https://leetcode.com/problems/left-and-right-sum-differences/description/
// solved
//
function leftRightSum($arr){

    $left = [];
    $right = [];
    $b = count($arr);
    $cc = 0;
    $bb =0;
    for ($i=0; $i <count($arr) ; $i++) { 
        $b--;
        $left[0] = 0;
        $right[0] = 0;
        $cc += $arr[$i];
        $bb += $arr[$b];
        if (count($left) < count($arr)) {
            $left[] = $cc;
            $right[] = $bb;
        } 
    }
    $reverse =   array_reverse($right);

    $result =[];
    for ($i=0; $i < count($arr) ; $i++) { 
        $cekSelisih = $left[$i] > $reverse[$i] ? $left[$i]-$reverse[$i] : $reverse[$i]-$left[$i];
        $result[] = $cekSelisih;
    }
    
    return $result;
   
    

}
//left = [0,10,14,22]
//right = [15,11,3,0]
// $arr = [10,4,8,3];
// leftRightSum($arr);


//https://leetcode.com/problems/majority-element/submissions/1351910898/
//ok solved
function majorityElement($nums) {
    
    $tot =  array_count_values($nums);
    $max = max($tot);
    $result = 0;
    foreach ($tot as $key => $value) {
        if ($value == $max) {
            $result+=$key;
        }
    }

    echo $result;
  
}
// $majority = [3,2,3,3,3,3,3,2,2,2];
// majorityElement($majority);


//https://leetcode.com/problems/count-the-number-of-consistent-strings/
function countConsistentStrings($allowed, $words) {
        $to_arr = str_split($allowed);
        $aa = [];
        for ($i=0; $i <count($to_arr) ; $i++) { 
            foreach ($words as $key => $value) {
                $to_arr_words = str_split($value);
                foreach ($to_arr_words as $key2 => $val_words) {
                    if ($val_words == $to_arr[$i]) {
                        $aa[] = $value;
                    }
                }
               
            }
        }

        print_r($aa);
}

// $aa = ["ad","bd","aaab","baa","badab"];
// countConsistentStrings("abc",$aa);

//var_dump(strspn("obadbasao", "so"));


//https://leetcode.com/problems/the-two-sneaky-numbers-of-digitville/description/
//ok solved
function getSneakyNumbers($nums) {
    $tot_ = array_count_values($nums);

    $res = [];
    foreach ($tot_ as $key => $value) {
        if ($value > 1) {
           $res[] = $key;
        }
    }
    return $res;
}
// $arr =[7,1,5,4,3,4,6,0,9,5,8,2];
// getSneakyNumbers($arr);

?>