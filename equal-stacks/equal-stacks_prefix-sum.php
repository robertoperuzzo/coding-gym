<?php

<?php
/*
 * Complete the equalStacks function below.
 */
function equalStacks($h1, $h2, $h3, $n1, $n2, $n3) {

    array_push($h1, 0);
    array_push($h2, 0);
    array_push($h3, 0);

    for ($i = $n1; $i > 0; $i--) {
        $h1[$i - 1] += $h1[$i];
    }
    for ($i = $n2; $i > 0; $i--) {
        $h2[$i - 1] += $h2[$i];
    }
    for ($i = $n3; $i > 0; $i--) {
        $h3[$i - 1] += $h3[$i];
    }

    return max(array_intersect($h1, $h2, $h3));
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

$result = equalStacks($h1, $h2, $h3, $n1, $n2, $n3);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
