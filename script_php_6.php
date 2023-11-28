<?php
function showArrayInfo(){
    $arr = [];
    for ($i = 0; $i < 30; $i++){
        $random = rand(20, 100);
        array_push($arr, $random);
    }
    echo 'Array:  '.PHP_EOL;
    showArray($arr);

    sort($arr);
    echo 'Array sorted :  '.PHP_EOL;
    showArray($arr);

    rsort($arr);
    echo 'Array revers sorted :  '.PHP_EOL;
    showArray($arr);
}

function showArray(array $arr)
{
    foreach ($arr as $value)
    {
        echo "Value is $value".PHP_EOL;
    }
}
showArrayInfo();
