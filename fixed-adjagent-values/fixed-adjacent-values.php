<?php
$line = trim(fgets(STDIN));
list($n, $t) = array_map('intval', explode(' ', $line));

$line = trim(fgets(STDIN));
$a = array_map('intval', explode(' ', $line));

$tests = [];
for ($i = 0; $i < $t; $i++) {
    fscanf(STDIN, "%d\n", $n);
    $tests[] = $n;
}

foreach ($tests as $value) {
    if ($result = array_search($value, $a)) {
        print $result;
    }
    else {
        print -1;
    }
    print "\n";
}

?>
