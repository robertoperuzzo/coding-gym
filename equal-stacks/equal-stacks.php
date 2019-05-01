<?php

<?php
/*
 * Complete the equalStacks function below.
 */
function equalStacks($h1, $h2, $h3) {
    $sum1 = array_sum($h1);
    $sum2 = array_sum($h2);
    $sum3 = array_sum($h3);

    while (($sum1 != $sum2 || $sum2 != $sum3) && (count($h1) != count($h2) || count($h2) != count($h3))) {

        $min_value = min($sum1, $sum2, $sum3);

        if ($sum1 > $min_value) {
            $sum1 -= array_shift($h1);
        }
        if ($sum2 > $min_value) {
            $sum2 -= array_shift($h2);
        }
        if ($sum3 > $min_value) {
            $sum3 -= array_shift($h3);
        }
    }

    return $sum1;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $n1N2N3_temp);
$n1N2N3 = explode(' ', $n1N2N3_temp);

$n1 = intval($n1N2N3[0]);

$n2 = intval($n1N2N3[1]);

$n3 = intval($n1N2N3[2]);

fscanf($stdin, "%[^\n]", $h1_temp);

$h1 = array_map('intval', preg_split('/ /', $h1_temp, -1, PREG_SPLIT_NO_EMPTY));

fscanf($stdin, "%[^\n]", $h2_temp);

$h2 = array_map('intval', preg_split('/ /', $h2_temp, -1, PREG_SPLIT_NO_EMPTY));

fscanf($stdin, "%[^\n]", $h3_temp);

$h3 = array_map('intval', preg_split('/ /', $h3_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = equalStacks($h1, $h2, $h3);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
