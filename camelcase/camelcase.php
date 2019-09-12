<?php

// Complete the camelcase function below.
function camelcase($s) {
    preg_match_all('/([A-Z])/', $s, $matches);
    return count($matches[1]) + 1;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

$s = '';
fscanf($stdin, "%[^\n]", $s);

$result = camelcase($s);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
