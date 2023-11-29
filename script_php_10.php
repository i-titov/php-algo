<?php
$arrSuperficial= [];
$amountOfRooms = intval(readline('Combien des chambres: '));
if ($amountOfRooms <= 0){
    echo 'Respectez le demande '.PHP_EOL;
    return;
}
function superficial(array &$arr)
{
    $length = intval(readline('Longueur du bien: '));
    $width = intval(readline('Largeur du bien: '));
    if($length <=0 && $width<=0){
        echo "Respetez le demande ".PHP_EOL;
        return;
    }
    $arr[] = $length*$width;
}

for ($i = 0; $i<$amountOfRooms;$i++){
    $room = $i+1;
    echo " Tappez le longueur et largueur pour la chambre ". $room .PHP_EOL;
    superficial($arrSuperficial);
}
foreach ($arrSuperficial as $key=>$value){
    $room = $key+1;
    echo "Superficie pour chambre $room et superficie est $value".PHP_EOL;
}


