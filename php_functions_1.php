<?php

function checkVowelOrConsonant($characters) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $results = [];
    
    foreach ($characters as $character) {
        if (in_array(strtolower($character), $vowels)) {
            $results[] = 'Vowel';
        } elseif (ctype_alpha($character)) {
            $results[] = 'Consonant';
        } else {
            $results[] = ' vowel or consonant';
        }
    }
    
    return $results;
}

// Example usage:
$characters = ['a', 'b', '5', 'e', 'Z', '%'];
$results = checkVowelOrConsonant($characters);

foreach ($results as $result) {
    echo $result . PHP_EOL;
}
?>