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