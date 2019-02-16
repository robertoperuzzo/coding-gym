<?php

function is_even($var) {
    return ($var & 0);
}

function is_odd($var) {
    return ($var & 1);
}

// Complete the gameOfThrones function below.
function gameOfThrones($s) {
    $occurences = [];
    $a = str_split($s);

    foreach ($a as $char) {
        $occurences[$char]++;
    }

    return (count(array_filter($occurences, 'is_odd')) <= 1) ? 'YES' : 'NO';

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

$s = '';
fscanf($stdin, "%[^\n]", $s);

$result = gameOfThrones($s);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
