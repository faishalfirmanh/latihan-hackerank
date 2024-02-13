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

//https://leetcode.com/problems/counting-words-with-a-given-prefix/description/
//cari prefix (huruf pertama) pada list kata array, -> jika ada di totalkan
function prefixCount($words, $pref) { //solved ok
   
    $arr_frefix = str_split($pref,1);
    $tot_pref = count($arr_frefix);
    $tot = 0;
    foreach ($words as $key => $value) {
        $arr_word = str_split($value ,1);
        for ($i=0; $i < $tot_pref ; $i++) { 
            // $letter_word = strtolower($arr_word[$i]);
            // $letter_pref = strtolower($arr_frefix[$i]);
            $count_word = count($arr_word)+1;
            $word_remove = substr_replace($value, '', $tot_pref, $count_word - $tot_pref); //ambil huruf pertama -> total prefix
            if ($word_remove == $pref) {
                $tot++;
                break;
            }
           
        }
       
    }

    echo "".$tot;
        
}

// $word = ["leetcode","win","loops","success"];
// $pref  = "code";
// prefixCount($word,$pref);

//https://leetcode.com/problems/form-smallest-number-from-two-digit-arrays/ 
//cari bilangan terkecil di 2 array, apa bilsa sama print 1
//jika tidak sama abmil terkecil dari masing2 array, lalau di gabung
//6.05
function minNumber($nums1, $nums2) { //solved ok

    $min1 = min($nums1);
    $min2 = min($nums2);

    $ada = [];
    $tidak = [];
    for ($i=0; $i < count($nums1) ; $i++) { 
        for ($j=0; $j < count($nums2) ; $j++) { 
            $cek = in_array($nums1[$i],$nums2,TRUE) ? 1 : 0;
            if ($cek > 0) {
                //echo $nums1[$i] . " ada |".$cek ."\n";
                $ada[] = $nums1[$i];
                break;
            }else{
                if($nums1[$i] == $min1 && $nums2[$j] == $min2){
                    $res =  $min1 > $min2 ?  $min2.$min1 : $min1.$min2;;
                    //echo $res . "tida ada |".$cek ."\n";
                    $tidak[]= $res;
                    break;
                }
            }
            
        }
    }

    if(count($ada) > 0 && count($tidak) >0){
        echo min($ada);
    }elseif(count($ada)<1 && count($tidak) > 0){
        echo min($tidak);
    }else{
         if (count($ada) > 0) {
           echo min($ada);
        }
    }
        
}

// $ar1 =[7,5,6];
// $ar2 =  [1,4];
// minNumber($ar1, $ar2);

//6.10
//jika target ada kembalikan lebih besar
//jika tidak ada kembalikan karakter huruf pertama
//https://leetcode.com/problems/find-smallest-letter-greater-than-target/submissions/1171842296/
function nextGreatestLetter($letters, $target) { // not solved
    $letterAll = array("a","b","c","d","e",
                       "f","g","h","i","j",
                       "k","l","m","n","o",
                       "p","q","r","s","t",
                       "u","v","w","x","y","z");
    strtolower($target);
    sort($letters);
        $huruf = [];
        $pp = 1;
       // echo "target ".$target ."\n"."\n";
        for ($i=0; $i <count($letters) ; $i++) { 
            for ($j=0; $j <count($letterAll) ; $j++) { 
                $indexTarget = array_search($target,$letterAll);//index target
               
                $cek = in_array($target,$letters,TRUE) ? 1 : 0;
                if ($target == $letters[$i]) { //jika huruf ada, maka next huruf paling besar
                    $nextTarget = $indexTarget + ($pp++);
                    $cekFinalNext = $nextTarget > 24 ? 25 : $nextTarget; 
                    //index maxValue
                    $maxIndexValueNow = array_search($letters[count($letters)-1],$letterAll);           
                    if (in_array($letterAll[$cekFinalNext],$letters,TRUE)) {
                        $huruf[] = $letterAll[$cekFinalNext];
                        echo "huruf  : ". $letters[$i] ."| index target ".$letterAll[$cekFinalNext] ."| " ."\n";
                    }
                    else{
                        if ($cekFinalNext > $maxIndexValueNow) {
                           echo "tidak ada ".$cekFinalNext ."\n";
                            $huruf[] = $letters[0];
                       }
                       
                    }
                  
                  
                }else{
                    //pp max = count(letter);
                    $cekNext = $j == count($letterAll) ? $j - 1 : $j;
                    //jika next ada di letter, dan tidak ada.
                    if ($letterAll[$cekNext] == $letters[$i] && $cek == 0) {
                        if ($indexTarget != 25) { //jika tidak z
                            $aa = ($pp++) + $indexTarget;
                            if ($aa >= 25) { //jika target posisinya paling besar && tidak ada di list letter
                                $huruf[] = $letters[0];
                                echo "target posisinya paling besar && tidak ada di list letter"."\n";
                            }else{
                                if (in_array($letterAll[$aa],$letters,TRUE)) { //jika huruf tidak ada
                                    $huruf[] =  $letterAll[$aa];
                                    echo  $letters[$i] ."- indext huruf ".$aa ." = $letterAll[$aa]"  ."\n";
                                }
                            }
                              
                        }else{ //jika huruf z
                            $huruf[] = $letters[0];
                            echo "z "."\n";
                        }
                        
                    }else{
                        $nextTarget = $indexTarget + ($pp++);
                        $cekFinalNext = $nextTarget > 24 ? 25 : $nextTarget; 
                        $maxIndexValueNow = array_search($letters[count($letters)-1],$letterAll);   
                        if ($cekFinalNext > $maxIndexValueNow) {
                            $huruf[] = $letters[0];
                            echo "463 "."\n";
                        }
                        
                       
                    }
                    
                }
                //echo "letter item ".$letters[$i] ."| ".$nextLetter ."|".$letters[$i]."\n";
            }
          
        }
       
        if (count($huruf) > 0) {
            echo $huruf[0];
        }
       
}
// $ar = ["c","f","j"];//["q","c","j","b","h","l","g"];
// $target = "d"; //c
// nextGreatestLetter($ar, $target);

//https://leetcode.com/problems/delete-columns-to-make-sorted/description/ not solved
//looping, luar
//looping item.
//sort array

function minDeletionSize($fff) {
    $letterAll = array("a","b","c","d","e",
                       "f","g","h","i","j",
                       "k","l","m","n","o",
                       "p","q","r","s","t",
                       "u","v","w","x","y","z");
    $firstLoop = 0;
    // sort($fff);
    $strs = [];
    for ($ar1=0; $ar1 < count($fff) ; $ar1++) { 
        $stringParts = str_split($fff[$ar1]);
        sort($stringParts);
        $finalSort = implode($stringParts);
        $strs[] = $finalSort;
    }
    
   
    for ($i=0; $i < count($strs) ; $i++) { 
        $toArr1 =  str_split($strs[$i],1);
        sort($toArr1);
        $axx = implode(" ",$toArr1);
        $aa = str_replace(' ', '', $axx);
        $str2 =  str_split($aa,1);
        $nextIndex = count($str2);
        for ($j=0; $j < count($str2); $j++) { 
            $nextIndex--;
            $cekJNext = $j >= count($str2)-1 ? $j : $j+1; //jika last index, panggil indexnya sendiri
            $cekOriginIndext = array_search(strtolower($str2[$j]),$letterAll);
            $cekOriginIndextNext = $cekOriginIndext >= count($letterAll) ? 
                array_search($str2[count($letterAll)-1],$letterAll) : $cekOriginIndext;
            $cekLastIndexIsNotZ = $cekOriginIndextNext >= 25 ? 25 : $cekOriginIndextNext+1;
            //next item
            //$cekItemLastJ = array_search(strtolower($str2[$cekJNext]),$letterAll);
            
            $exsist = isset($str2[$j+1]) ? $str2[$j+1] : $letterAll[$cekLastIndexIsNotZ];//cek index di huruf
            $cekPrev = $j == 0 ? 0 : $j-1;
            if ( $j >= count($str2)-1 && $i != count($strs)-1) {
                
               
                $aa = $strs[$i+1][0]; //cek index di item / dibawahnya
                $prev = $strs[$i][$cekPrev];
                
                 
               
            }else{
                $aa = $exsist;
                if ($j == 0 && $i == 0) { //jika index 0 0
                    $exsistPrev =  isset($str2[$cekPrev]) ? $str2[$cekPrev] : $letterAll[$cekLastIndexIsNotZ];
                }else if($j == 0 && $i != 0){
                    $exsistPrev = $strs[$i-1][$j-1];
                }else{
                    $exsistPrev = $strs[$i][$j-1];
                }
                
                $prev = $exsistPrev;
              
            }
            

            $originIndexPrev = array_search(strtolower($prev),$letterAll);
        //    if ($exsist != $aa ) {//$cekOriginIndext < $originIndexPrev
        //         $firstLoop++;

                echo "$prev | loop1 $i  |.loop 2 ".$str2[$j] ."->".$strs[$i]."->".$exsist ." -++".$str2[$cekJNext]." | prev .$originIndexPrev - now $cekOriginIndext  . $aa"."\n";
            //     break;
            // } else if ($cekOriginIndext < $originIndexPrev && $i > 1){
            //     $firstLoop++;
            // }
           
           
        }
       
    }

    echo $firstLoop;
}
//$arx = ["cba","daf","ghi"];
//$arx = ["a","b"];
//$arx=  ["zyx","wvu","tsr"];//  ["cba","fde","lon","xzwy","igh"];
// $arx = ["rrjk","furt","guzm"];
// minDeletionSize($arx)

//6/36
//https://leetcode.com/problems/find-words-containing-character/submissions/1172697794/
//cari huruf di array, ada di index array pertama, ke berapa.
function findWordsContaining($words, $x) {

    $tot = [];
    for ($i=0; $i < count($words) ; $i++) { 
       $strAr = str_split($words[$i],1);
       for ($j=0; $j < count($strAr) ; $j++) { 
          if ($strAr[$j] === $x ) {
             $tot[] = $i;
             break;
          }
       }
     
    }
    var_dump($tot);
        
}

// $wordlArr =["abc","bcd","aaaa","cbc"];
// $find = "a";
// findWordsContaining($wordlArr,$find);
//https://leetcode.com/problems/find-the-middle-index-in-array/description/ not solved
function findMiddleIndex($nums) {
    rsort($nums);
    //echo count($nums) % 2 ."\n";
    //var_dump(sort($nums));
    echo "\n";
    $maxLooping = count($nums)-1;
    $tot = 0;
    for ($i=0; $i <count($nums) ; $i++) { 
        $stengahNext = floor(count($nums) / 2) + 1;
        $stengahPrev = floor(count($nums) / 2) - 1;
        $cekNextBawah = $i == count($nums)-1 ? $i : $i +1;
        if (count($nums) % 2 != 0) {
            for ($j=$nums[$i]; $j <= $stengahNext ; $j++) { 
                if ($j != $i ) {
                    echo "$i | ".$nums[$i]."= $maxLooping |nextbawah : " ."\n";
                    $tot +=$nums[$i];
                    break;
                }
              
            }
            $maxLooping--;
        }
    }
    $before = $tot;

        
}

// $arrNum = [1,-1,4];
// findMiddleIndex($arrNum);

//https://leetcode.com/problems/check-if-a-string-is-an-acronym-of-words/submissions/1174127117/
//cari array words index ke 0, apa sama dengan s
function isAcronym($words, $s) { //ok solved
    $stringToar = str_split(strtolower($s),1);

   
    $totWord = count($words)-1;
    $totStr =  count($stringToar)-1;
    $tot = 0;
    for ($i=0; $i < count($words) ; $i++) { 
        $toArrWords = str_split(strtolower($words[$i]),1);
        for ($j=0; $j < count($toArrWords) ; $j++) { 
            if ($totWord == $totStr) {
                if ($stringToar[$i] == $words[$i][0]) {
                    $tot ++;
                    break;
                 }
               
           }
        }
       
    }
    $cek = count($stringToar) == $tot ? "true" : "false";
    echo $cek;

    
}

// $ar =  ["afqcpzsx","icenu"];
// $kata = "yi";
// isAcronym($ar,$kata);

?>