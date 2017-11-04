<?php

$s1 = 'パトカー';
$s2 = 'タクシー';
$len = mb_strlen($s1) > mb_strlen($s2) ? mb_strlen($s1) : mb_strlen($s2);
$result = '';
for ($i = 0; $i < $len; ++$i) {
    $result .= (mb_substr($s1, $i, 1) . mb_substr($s2, $i, 1));
}
echo $result;
