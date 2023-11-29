<?php
$index= intval(readline('Amount between 5 and 20: '));
if($index <5 || $index > 20){
    echo "Respect an amount  ";
    return;
}
function sumArray(array $arr){
    $result=0;
    foreach ($arr as $value){
        $result +=$value;
    }
    return $result;
}
function setArray(){
    $steps = 50;
    $arr= [];
    $randomInt = rand(1,1000);
    for ($i=0;$i<$steps;$i++){
        $arr[] = $randomInt;
    }
    return $arr;
}
for ($i = 0;$i <$index;$i++){
    $arr = setArray();
    echo sumArray($arr).PHP_EOL;
}
