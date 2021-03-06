<?php

$N = (int)trim(fgets(STDIN));
$Ai = array_map('intval', explode(' ', trim(fgets(STDIN))));
$V = (int)trim(fgets(STDIN));

/**
 * 線形探索法（基本）
 * = 検索のアルゴリズムの一つ。 リストや配列に入ったデータに対する検索を行うにあたって、 先頭から順に比較を行い、それが見つかれば終了する。（wiki）
 *
 * Point
 * - 判定問題はオンオフを切り替えるフラグを持たせる
 * - しらみつぶしに全て調べ上げる
 */
function linear_search($Ai, $V)
{
    $ans = false;
    foreach ($Ai as $a) {
        if ($a === $V) $ans = true;
    }
    return $ans ? 'Yes' : 'No';
}

echo linear_search($Ai, $V);

