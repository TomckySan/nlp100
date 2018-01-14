<?php

function typoglycemia(string $sentence): string
{
    $result = '';
    $wordList = explode(' ', $sentence);
    foreach ($wordList as $word) {
        if (mb_strlen($word) < 4) {
            $result .= $word;
        } else {
            $result .= mb_substr($word, 0, 1);
            $result .= str_shuffle(mb_substr($word, 1, (mb_strlen($word) - 2)));
            $result .= mb_substr($word, (mb_strlen($word) - 1), 1);
        }
        $result .= ' ';
    }
    return $result;
}

$sentence = "I couldn't believe that I could actually understand what I was reading : the phenomenal power of the human mind .";

echo typoglycemia($sentence);
