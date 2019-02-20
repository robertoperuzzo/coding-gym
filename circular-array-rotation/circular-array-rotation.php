<?php

// Complete the circularArrayRotation function below.
function circularArrayRotation($a, $k, $queries, $n) {
    foreach ($queries as $i) {
        print $a[($i + $n - $k) % $n] . "\n";
    }
}

$line = trim(fgets(STDIN));
list($n, $k, $q) = explode(' ', $line);

$line = trim(fgets(STDIN));
$a = array_map('intval', explode(' ', $line));

$queries = [];

for ($i = 0; $i < $q; $i++) {
    fscanf(STDIN, "%d\n", $queries_item);
    $queries[] = $queries_item;
}

circularArrayRotation($a, $k, $queries, $n);
