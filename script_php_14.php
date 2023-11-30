<?php
$list = fopen('./files/between30and50.csv', 'w');
$fp = fopen('./files/ExerciceCSVScript.csv', 'r');

$arr=[];
if ($fp !== FALSE) {
    while (($lines = fgetcsv($fp, 1000, ",")) !== FALSE) {
        if($lines[2]>=30 && $lines[2]<=40){
            $arr[] = array($lines[0], $lines[1]);
        }
    }
    fclose($fp);
}
foreach ($arr as $item){
    fputcsv($list, $item);
}
fclose($list);
