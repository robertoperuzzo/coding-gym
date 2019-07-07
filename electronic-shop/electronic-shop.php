<?php

/*
 * Complete the getMoneySpent function below.
 */
function getMoneySpent($keyboards, $drives, $b, $n, $m) {
    $cost = -1;
    rsort($keyboards);
    sort($drives);

    for ($i = 0; $i < $n; $i++) {
        if ($keyboards[$i] < $b) {
            for ($k = 0; $k < $m; $k++) {
                $ammount = $keyboards[$i] + $drives[$k];
                if ($ammount <= $b) {
                    $cost = max($ammount, $cost);
                }
                else {
                    break;
                }
            }
        }
    }
    return $cost;
}

$line = trim(fgets(STDIN));
list($b, $n, $m) = array_map('intval', explode(' ', $line));

$line = trim(fgets(STDIN));
$keyboards = array_map('intval', explode(' ', $line));

$line = trim(fgets(STDIN));
$drives = array_map('intval', explode(' ', $line));

/*
 * The maximum amount of money she can spend on a keyboard and USB drive,
 * or -1 if she can't purchase both items
 */
$moneySpent = getMoneySpent($keyboards, $drives, $b, $n, $m);

$stdout = fopen('php://stdout', 'w');
fprintf($stdout, $moneySpent);
fclose($stdout);
