<?php
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}
function generateContent(int $lines, int $colons):array{
    $arr = [];
    $random = rand(1, 20);
    for($i = 0; $i < $colons; $i++){
        for ($x =0; $x<$lines;$x++){
            $arr[$x][$i] = generateRandomString($random);
        }
    }
    return $arr;
}
$arr = generateContent(100,10);

$fp = fopen('./files/file.csv', 'w');

foreach ($arr as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp);

