<?php

function nGram(string $str, int $n = 2): array
{
    $result = [];
    for ($i = 0; $i < mb_strlen($str); ++$i) {
        $result[] = mb_substr($str, $i, $n);
    }
    return array_values(array_unique($result));
}

function union(array $x, array $y): array
{
    return array_values(array_unique(array_merge($x, $y)));
}

function intersection(array $x, array $y): array
{
    return array_intersect($x, $y);
}

function difference(array $x, array $y): array
{
    return array_diff($x, $y);
}

function inBigram(array $arr, string $str): bool
{
    return in_array($str, $arr, true);
}

$x = nGram('paraparaparadise');
$y = nGram('paragraph');

echo "X is \n";
print_r($x);
echo "\n";

echo "Y is \n";
print_r($y);
echo "\n";

echo "Union is \n";
print_r(union($x, $y));
echo "\n";

echo "Intersection is \n";
print_r(intersection($x, $y));
echo "\n";

echo "Difference(x-y) is \n";
print_r(difference($x, $y));
echo "\n";

echo "Difference(y-x) is \n";
print_r(difference($y, $x));
echo "\n";

echo "'se' in X \n";
var_export(inBigram($x, 'se'));
echo "\n";

echo "'se' in Y \n";
var_export(inBigram($y, 'se'));
echo "\n";
