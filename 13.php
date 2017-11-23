<?php

$result = '';
$col1 = explode("\n", file_get_contents($argv[1]));
$col2 = explode("\n", file_get_contents($argv[2]));
foreach ($col1 as $index => $row) {
    if ($index === count($col2) - 1) {
        break;
    }
    $result .= $row . "\t" . $col2[$index] . "\n";
}
file_put_contents('./13.txt', $result, LOCK_EX);
