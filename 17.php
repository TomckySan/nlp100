<?php

$result = [];
$fileRows = explode("\n", file_get_contents($argv[1]));
foreach ($fileRows as $row) {
    $columns = explode("\t", $row);
    if ($columns[0] === '') {
        break;
    }
    $result = array_merge($result, [$columns[0] => 0]);
}
var_dump(array_keys($result));
