<?php

$N = (int)trim(fgets(STDIN));
$Ai = array_map('intval', explode(' ', trim(fgets(STDIN))));
$V = (int)trim(fgets(STDIN));

/**
 * 線形探索法（条件を満たすものがある場所も知る）
 *
 * Point
 * - indexを保持する
 */
function linear_search_found_index($Ai, $V)
{
    // ありえない値をいれる
    $found_id = -1;

    foreach ($Ai as $key => $a) {
        if ($a === $V) {
            $found_id = $key;
            break;
        }
    }

    return $found_id;
}

echo linear_search_found_index($Ai, $V);