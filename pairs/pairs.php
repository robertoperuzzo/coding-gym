<?php

// Complete the pairs function below.
function pairs($k, $arr) {

    $sum = $arr;
    array_walk($sum, function(&$item, $key, $k) { $item += $k; }, $k);

    return count(array_intersect($arr, $sum));
}

$line = trim(fgets(STDIN));
list($n, $k) = array_map('intval', explode(' ', $line));

$line = trim(fgets(STDIN));
$arr = array_map('intval', explode(' ', $line));

$result = pairs($k, $arr);

$stdout = fopen('php://stdout', 'w');
fprintf($stdout, $result);
fclose($stdout);
