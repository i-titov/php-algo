<?php
function salaryCount(){
    $limitMax = 3000;
    $limitMin = 1500;
    $salary = intval(readline("You salary is (has to be between $limitMin and $limitMax) : "));
    $days = intval(readline('Amount of days is : '));
    if($salary == 0 && $days == 0){
        echo 'Data is not correct ';
        return;
    }
    if($salary < $limitMin || $salary > $limitMax){
        echo 'Respect of limits pls ';
        return;
    }
    $day = 1;
    while($day <= $days):
        $amountRand = rand(1, 100);
        if($salary <=0 && $day < $days){
            echo 'Money is over. Rest is ' . $salary. ' and day is ' . $day .PHP_EOL;
            return;
        }
        if($salary >=0 && $day == $days){
            echo 'Congratulations you didnt spent all of you moneys. Rest is ' . $salary. ' and day is ' . $day .PHP_EOL;
            return;
        }
        $salary -= $amountRand;
        echo  'Day is '. $day . ' and my salary is ' . $salary .PHP_EOL;
        $day++;
    endwhile;
}
salaryCount();
