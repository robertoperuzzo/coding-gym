<?php

// Complete the jimOrders function below.
function jimOrders($orders) {
    $out = array_map('array_sum', $orders);
    asort($out);
    return array_keys($out);
}



$handle = fopen(__DIR__ . "/input/test7.in", "r");
fscanf($handle, "%d\n", $n);

$orders = [];

for ($i = 1; $i <= $n; $i++) {
    fscanf($stdin, "%[^\n]", $orders_temp);
    $orders[$i] = array_map('intval', preg_split('/ /', $orders_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = jimOrders($orders);

$stdout = fopen('php://stdout', 'w');
fwrite($stdout, implode(" ", $result) . "\n");

fclose($stdin);
fclose($stdout);
