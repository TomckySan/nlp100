<?php

function cipher(string $str): string
{
    $result = '';
    for ($i = 0; $i < mb_strlen($str); ++$i) {
        $char = mb_substr($str, $i, 1);
        $result .= ctype_alpha($char) && ctype_lower($char) ? chr(219 - ord($char)) : $char;
    }
    return $result;
}

echo cipher("Hello, Peter. I'm Ken. Nice to meet you.");
