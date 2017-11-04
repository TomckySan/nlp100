<?php

$str = 'パタトクカシーー';
$result = '';
foreach (range(0, mb_strlen($str)) as $i) {
    $result .= ($i % 2 === 1) ? mb_substr($str, $i, 1) : '';
}
echo $result;

// マルチバイト文字を扱うときはmb_系の関数を使うこと
// str_splitは文字単位でなくバイト単位での分割
