<?php

// Complete the maxMin function below.
function maxMin($k, $arr, $n) {
    sort($arr);
    $unfairness = PHP_INT_MAX;
    for ($i = 0; $i <= $n - $k; $i++) {
        $unfairness = min($unfairness, $arr[$i + $k - 1] - $arr[$i]);
    }

    return $unfairness;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%d\n", $k);

$arr = array();

for ($i = 0; $i < $n; $i++) {
    fscanf($stdin, "%d\n", $arr_item);
    $arr[] = $arr_item;
}

$result = maxMin($k, $arr, $n);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
