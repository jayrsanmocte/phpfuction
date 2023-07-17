<?php
function convertDigitToWord($number) {
    $wordDict = [
        '0' => 'Zero',
        '1' => 'One',
        '2' => 'Two',
        '3' => 'Three',
        '4' => 'Four',
        '5' => 'Five',
        '6' => 'Six',
        '7' => 'Seven',
        '8' => 'Eight',
        '9' => 'Nine'
    ];
    
    $digits = str_split($number);
    $wordDigits = [];
    
    foreach ($digits as $digit) {
        if (is_numeric($digit)) {
            $wordDigits[] = $wordDict[$digit];
        }
    }
    
    return implode(' ', $wordDigits);
}


echo convertDigitToWord('69');

?>