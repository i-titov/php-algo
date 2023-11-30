<?php
$arr = [1,8,10,2,23,21,54,723,6,3];
function bubbleSort(array $arr){
    for ($i=0;$i<count($arr)-1;$i++){
        for ($j = 0; $j <count($arr)-$i-1;$j++){
            if($arr[$j]>$arr[$j+1]){
                $tem=$arr[$j+1];
                $arr[$j+1]=$arr[$j];
                $arr[$j]=$tem;
            }
        }
    }
    var_dump($arr);
}
bubbleSort($arr);