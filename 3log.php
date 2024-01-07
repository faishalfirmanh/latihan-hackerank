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




?>