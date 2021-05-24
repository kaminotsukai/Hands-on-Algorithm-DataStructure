<?php

/**
 * 1 から N までの総和を計算する再帰関数
 */

$N = (int)trim(fgets(STDIN));
$Ai = array_map('intval', explode(' ', trim(fgets(STDIN))));
$W = (int)trim(fgets(STDIN));

/**
 * 現在位置、合計
 */
function func($current, $sum)
{
    global $Ai, $W;

    // 最後まで行った時に判定をする
    if ($current == count($Ai)) return $sum === $W;

    return func($current + 1, $sum) || func($current + 1, $sum + $Ai[$current]);
}

echo func(0, 0) ? 'Yes' : 'No';
