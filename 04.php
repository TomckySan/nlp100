<?php

$str = 'Hi He Lied Because Boron Could Not Oxidize Fluorine. New Nations Might Also Sign Peace Security Clause. Arthur King Can.';
$arr = explode(' ', str_replace([',', '.'], '', $str));

$targetIndex = [1,5,6,7,8,9,15,16,19];

$result = [];
foreach ($arr as $k => $v) {
    $result[in_array($k + 1, $targetIndex, true) ? mb_substr($v, 0, 1) : mb_substr($v, 0, 2)] = $k + 1;
}

print_r($result);
