<?php

$result = [];
$rows = explode("\n", file_get_contents($argv[1]));
foreach ($rows as $row) {
    if ($row === '') {
        break;
    }
    $col3 = explode("\t", $row)[2];
    if (count($result) === 0) {
        $result[] = $row;
        continue;
    }
    foreach ($result as $index => $value) {
        if (explode("\t", $value)[2] < $col3) {
            array_splice($result, $index, 0, $row);
            break;
        }
        if (count($result) - 1 === $index) {
            $result[] = $row;
        }
    }
}
var_dump($result);
