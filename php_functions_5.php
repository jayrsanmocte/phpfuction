<?php
function isArmstrongNumber($number) {
    $digits = str_split($number);
    $numDigits = count($digits);
    $sumOfCubes = 0;
    
    foreach ($digits as $digit) {
        $sumOfCubes += $digit ** $numDigits;
    }
    
    $output = "$number, ";
    $output .= implode(' + ', array_map(function($digit) use ($numDigits) {
        return $digit . '**' . $numDigits;
    }, $digits));
    $output .= ' = ' . $sumOfCubes;
    $output .= ($sumOfCubes === $number) ? ' is an Armstrong number' : ' is not an Armstrong number';
    
    return $output;
}

// Example usage:
$output1 = isArmstrongNumber(153);
$output2 = isArmstrongNumber(324);
$output3 = isArmstrongNumber(5523);

echo nl2br($output1 . "\n");
echo nl2br($output2 . "\n");  
echo nl2br($output3 . "\n"); 

?>