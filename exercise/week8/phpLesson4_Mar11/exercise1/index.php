<?php
    function countWords($str) {
        $arrExplode=explode(" ",$str);
        $arrResult=array();
        $countArrExplode = count($arrExplode);
        for($i=0; $i<$countArrExplode; $i++) {
            $count=0;
            foreach($arrExplode as $value) {
                if($arrExplode[$i] == $value) {
                    $count++;
                }
            }
            $arrResult[$arrExplode[$i]]=$count;
        }
        return $arrResult;
    }
    $str = 'Write a function countWords($str) that takes any string of characters and finds the number of times each string occurs.';
    foreach(countWords($str) as $key => $valueCount) {
        echo "[$key] => $valueCount <br>";
    }
?>