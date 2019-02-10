<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$length = intval(fgets($_fp));
$a = array_map('intval', explode(' ', fgets($_fp)));

$map = [];

for ($i = 0; $i < count($a) - 1; $i++) {
    $map[$i] = ($a[$i] > $a[$i + 1]) ? 1 : 0;
}

//print_r($map);
$filtered = array_filter($map);
//print_r($filtered);

if (empty($filtered)) {
    echo '0';
}
else if (count($filtered) > 2) {
    echo '-1';
}
else {
    echo '1';
}

?>
