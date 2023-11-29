<?php
$realEstateLoan = 2/100;
$creditNormal = 8/100;
$maxPercentageToSpend =33/100;
$salary = intval(readline('Your salary is: '));
$credit = intval(readline('Choose amount of credit: '));
$timeOfCredit = intval(readline('Write a time of credit (you have to choose between 5,10,15,20 and 25 years) : '));
if($salary <=0 && $timeOfCredit <=0 && $credit<=0 ){
    echo "Respect an amount";
    return;
}
function maxSpendOfSalary(int $salary, float $maxPercentageToSpend):int{
    return $salary * $maxPercentageToSpend;
}
function amountOfMoneyMonthly(int $credit, int $timeOfCredit,float $percentage){
    $months = $timeOfCredit * 12;
    $creditTotal = $credit + ($credit*$percentage);
    return intval($creditTotal/$months);
}
function canPayCredit(int $moneyOfClient, int $moneyOfBank){
    if($moneyOfClient < $moneyOfBank ){
        echo "we cant give you money";
        return;
    }
    echo "Yes, you can get money. You will pay monthly ". $moneyOfClient.PHP_EOL;
}
switch ($timeOfCredit){
    case 25:
    case 20:
    case 15:
        $client = maxSpendOfSalary($salary,$maxPercentageToSpend);
        $bank = amountOfMoneyMonthly($credit,$timeOfCredit,$realEstateLoan);
        canPayCredit($client,$bank);
        break;
    case 10:
    case 5 :
        $client = maxSpendOfSalary($salary,$maxPercentageToSpend);
        $bank = amountOfMoneyMonthly($credit,$timeOfCredit,$creditNormal);
        canPayCredit($client,$bank);
        break;
    default:
        echo "Something gone wrong";
        break;
}

