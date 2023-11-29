<?php
$tab[] = null;
$value = null;

while($value !='q')
{
printf("saisir une valeur numérique ou tapez 'q' pour quitter : ");
$value = readline();
if ($value == 'q')
{
continue;
}
array_push($tab, $value );

echo "nombre de valeurs inscrites : " . count($tab) . "\n";
echo "somme des valeurs : " . array_sum($tab) . "\n";

echo "liste des valeurs du tableau : \n";
foreach ($tab as $element)
{
echo $element . "\n";
}

sort($tab);

echo "liste des valeurs triées du tableau : \n";
foreach ($tab as $element)
{
echo $element . "\n";
}

}