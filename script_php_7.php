<?php
function showArrayInfo(){
    $arr = [];
    for ($i = 0; $i < 30; $i++){
        $random = rand(20, 100);
        array_push($arr, $random);
    }
    foreach ($arr as $key=>$value){
        if($key%2==0)
        {
            unset($arr[$key]);
        }
    }
    showArray($arr);
    $addArr =['one'=>1,"two"=>2,"three"=>3];
    array_push($arr,$addArr);
    showArray($arr);

}
function showArray(array $arr)
{
    foreach ($arr as $value)
    {
        if(gettype($value)==='array'){
            print_r($value).PHP_EOL;
        }else{
            echo "Value is $value".PHP_EOL;
        }
    }
}

showArrayInfo();
