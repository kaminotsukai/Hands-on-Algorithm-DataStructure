<?php




$N = (int)trim(fgets(STDIN));
$Ai = array_map('intval', explode(' ', trim(fgets(STDIN))));
$Bi = array_map('intval', explode(' ', trim(fgets(STDIN))));
$K = (int)trim(fgets(STDIN));

/**
 * 全探索（ペア）
 * 問題 - a + b >= kのペア数
 *
 * Point
 * - 2重ループ
 * - しらみつぶしに全て調べ上げる
 * - O(N**2)
 */
function count_up_min_pair($N, $Ai, $Bi, $K)
{
    $min_value = PHP_INT_MAX;

    for ($i = 0; $i < $N; $i++) {
        $a = $Ai[$i];
        for ($j = 0; $j < $N; $j++) {
            $b = $Bi[$j];
            if ($a + $b >= $K) $min_value = min($a + $b, $min_value);
        }
    }

    return $min_value;
}

echo count_up_min_pair($N, $Ai, $Bi, $K);