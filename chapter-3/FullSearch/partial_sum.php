<?php

$N = (int)trim(fgets(STDIN));
$Ai = array_map('intval', explode(' ', trim(fgets(STDIN))));
$W = (int)trim(fgets(STDIN));

/**
 * 部分和問題
 * Aiの「いくつかのペア」を選んで総和をWにできるか判定
 *
 * Point
 *  - 部分集合
 *      - 1, 2, 3 => {}, {1}, {2}, {3}, {1, 2}, {1, 3}, {2, 3}, {1, 2, 3} => 2**N
 *  - 「いくつかのペア」の場合には、bit演算子が有効（選択するかしないかの２択）
 */
function partial_sum($N, $Ai, $W)
{
    /**
     * 2のN乗回ループ
     */
    $ans = false;
    for ($bit = 0; $bit < pow(2, $N); $bit++) {

        $sum = 0;
        for ($i = 0; $i < $N; $i++) {

            /**
             * 全てに要素に対して存在確認をする
             * ビットが立っていたら加算する
             *
             * decbin(1 << 0) => "1"  = "001"
             * decbin(1 << 1) => "10" = "010"
             * decbin(1 << 2) => "100 = "100"
             */
            if ($bit & (1 << $i)) {
                $sum += $Ai[$i];
            }
        }

        if ($sum == $W) $ans = true;
    }

    return $ans;
}

echo partial_sum($N, $Ai, $W) ? 'Yes' : 'No';