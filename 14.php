<?php

for($i = 0; $i < $argv[2]; $i++) {
    echo explode("\n", file_get_contents($argv[1]))[$i]."\n";
}
