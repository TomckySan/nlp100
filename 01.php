<?php

$str = 'パタトクカシーー';
$result = '';
for ($i = 0; $i < mb_strlen($str); ++$i) {
    $result .= ($i % 2 === 1) ? mb_substr($str, $i, 1) : '';
}
echo $result;
