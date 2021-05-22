<?php

$N = (int)trim(fgets(STDIN));
$Ai = array_map('intval', explode(' ', trim(fgets(STDIN))));
$V = (int)trim(fgets(STDIN));

/**
 * 線形探索法（最小値を求める）
 */
function linear_search_min($Ai)
{
    $min = PHP_INT_MAX;

    for ($i = 0; $i < count($Ai) - 1; $i++) {
        $min = min($Ai[$i], $Ai[$i + 1]);
    }

    return $min;
}

echo linear_search_min($Ai);