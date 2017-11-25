<?php

$fileRows = explode("\n", file_get_contents($argv[1]));
for($i = (count($fileRows)-1) - $argv[2]; $i < (count($fileRows)-1); $i++) {
    echo $fileRows[$i]."\n";
}
