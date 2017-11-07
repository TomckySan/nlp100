<?php

function template($x, $y, $z): string
{
    return printf('%s時の%sは%s', $x, $y, $z);
}

$x = 12;
$y = '気温';
$z = 22.4;
template($x, $y, $z);
