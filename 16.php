<?php

$fileRows = explode("\n", file_get_contents($argv[1]));
$contents = '';
$fileNameCount = 0;
for($i = 0; $i < count($fileRows); $i++) {
    $contents .= ($fileRows[$i]."\n");
    if (($i % $argv[2]) === ($argv[2] - 1)) {
        file_put_contents('./16_'.$fileNameCount.'.txt', $contents, LOCK_EX);
        $contents = '';
        $fileNameCount++;
    }
}
