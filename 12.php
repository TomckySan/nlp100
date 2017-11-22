<?php

$col1 = '';
$col2 = '';
$explodedByNLC = explode("\n", file_get_contents($argv[1]));
foreach ($explodedByNLC as $index => $row) {
    if ($index === count($explodedByNLC) - 1) {
        break;
    }
    $explodedByTab = explode("\t", $row);
    $col1 .= $explodedByTab[0]."\n";
    $col2 .= $explodedByTab[1]."\n";
}
file_put_contents('./col1.txt', $col1, LOCK_EX);
file_put_contents('./col2.txt', $col2, LOCK_EX);
