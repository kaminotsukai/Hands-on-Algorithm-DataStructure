<?php

$N = (int)trim(fgets(STDIN));
$M = (int)trim(fgets(STDIN));

/**
 * 最大公約数（再帰）
 */
function GCD($n, $m)
{
    // nの方が大きい状態にする
    if ($n < $m) list($n, $m) = [$m, $n];

    if ($n % $m == 0) return $m;
    return GCD($m, $n % $m);
}

echo GCD($N, $M);