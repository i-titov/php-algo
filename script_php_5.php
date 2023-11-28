<?php
function showArrayInfo(){
    $amount = intval(readline("Type a number : "));
    if($amount <=0){
        echo'Wrong number '.PHP_EOL;
        return;
    }
    $arr = [];
    for ($i = 0; $i < $amount; $i++){
        $random = rand(20, 100);
        array_push($arr, $random);
    }

    //amount of elements in an array
    print_r(count($arr)).PHP_EOL;

    // sum of all elements
    print_r(array_sum($arr)).PHP_EOL;
    showArray($arr);

    sort($arr);
    //sorted
    showArray($arr);
}
function showArray(array $arr)
{
    foreach ($arr as $value)
    {
        echo "Value is $value".PHP_EOL;
    }
    echo "==============================";
}
showArrayInfo();
