<?php

$result = [];
$rows = explode("\n", file_get_contents($argv[1]));
foreach ($rows as $row) {
    if ($row === '') {
        break;
    }
    $col1 = explode("\t", $row)[0];
    if (count($result) === 0 || !array_key_exists($col1, $result)) {
        $result[$col1] = 0;
        continue;
    }
    foreach ($result as $key => $value) {
        if ($key === $col1) {
            $result[$col1] = $result[$col1] + 1;
        }
    }
}
arsort($result);
var_dump($result);
