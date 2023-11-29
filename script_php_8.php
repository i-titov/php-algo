<?php
$index= intval(readline('Amount between 5 and 20: '));
if($index <5 || $index > 20){
    echo "Respect an amount  ";
    return;
}
$a = rand(300,1000);
$b = rand(300,1000);
$c = rand(300,1000);
function sumInt(int $a, int $b, int $c)
{
    return $a + $b + $c;
}

for ($i = 0; $i<$index; $i++){
    echo sumInt($a, $b, $c).PHP_EOL;
}
