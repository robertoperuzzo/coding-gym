<?php

$a = array_map('intval', str_split(trim(fgets(STDIN))));
$length = count($a);
$a_nozero = array_filter($a);
$length_nozero = count($a_nozero);
sort($a_nozero);

$zero_count = $length - $length_nozero;
if ($zero_count > 0) {
    $first = array_shift($a_nozero);
    for ($i = 0; $i < $zero_count; $i++) {
        array_unshift($a_nozero, 0);
    }
    array_unshift($a_nozero, $first);
}

$result = implode($a_nozero);

$stdout = fopen('php://stdout', 'w');
fprintf($stdout, $result);
fclose($stdout);

?>
