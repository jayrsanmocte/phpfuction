<?php
function isDivisibleBy3($number) {
    $digits = str_split($number);
    $sumOfDigits = array_sum($digits);
    return $sumOfDigits % 3 === 0;
}


$number1 = 10;
$number2 = 9;

$result1 = isDivisibleBy3($number1);
$result2 = isDivisibleBy3($number2);

if ($result1) {
    echo $number1 . ' is divisible by 3 and ';   
} else {
    echo $number1 . ' is not divisible by 3 and ';
}

if ($result2) {
    echo $number2 . ' is divisible by 3 and ';
} else {
    echo $number2 . ' is not divisible by 3 and ';  
}
?>