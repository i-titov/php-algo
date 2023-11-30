<?php
$list = fopen('./files/moreThan5000.csv', 'w');
$fp = fopen('./files/ExerciceCSVScript.csv', 'r');

$arr=[];
if ($fp !== FALSE) {
    while (($lines = fgetcsv($fp, 1000, ",")) !== FALSE) {
        $lines[4]>= 5000 ? $arr[] = $lines : "  ";
    }

    fclose($fp);
}
foreach ($arr as $item){
    fputcsv($list, $item);
}
fclose($list);
