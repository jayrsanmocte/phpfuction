<?php
function deleteRecurringElements($array) {
    return array_values(array_unique($array));
}


$strings = ['nokia', 'apple', 'samsung', 'samsung', 'xiaomi', 'xiaomi', 'xiaomi', 'infinix', 'rog'];
$filteredArray = deleteRecurringElements($strings);

foreach ($filteredArray as $element) {
    echo $element . PHP_EOL;
}
?>