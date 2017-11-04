<?php

$str = 'Now I need a drink, alcoholic of course, after the heavy lectures involving quantum mechanics.';
$arr = explode(' ', str_replace([',', '.'], '', $str));

$result = [];
foreach ($arr as $v) {
    $result[] = mb_strlen($v);
}

print_r($result);
