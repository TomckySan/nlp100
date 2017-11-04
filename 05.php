<?php

function nGram(string $str, int $n, string $type = 'char'): string
{
    $result = '';

    if ($type === 'char') {
        for ($i = 0; $i < mb_strlen($str); ++$i) {
            $result .= mb_substr($str, $i, $n) . "\n";
        }
        return $result;
    }
    
    if ($type === 'word') {
        $arr = explode(' ', $str);
        for ($i = 0; $i < count($arr); ++$i) {
            $result .= implode(' ', array_slice($arr, $i, $n)) . "\n";
        }
        return $result;
    }

    return "引数には'char'もしくは'word'を指定してください\n";
}

$str = 'I am an NLPer';
echo nGram($str, 2);
echo "\n";
echo nGram($str, 2, 'word');
