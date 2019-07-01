<?php

// Complete the squares function below.
function squares($a, $b) {
    return (floor(sqrt($b)) - ceil(sqrt($a))) + 1;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $q);

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    fscanf($stdin, "%[^\n]", $ab_temp);
    $ab = explode(' ', $ab_temp);

    $a = intval($ab[0]);

    $b = intval($ab[1]);

    $result = squares($a, $b);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
