<?php

/**
 * 初期：0
 * 状態(dp[i])：iに移動するまでの移動コストの最小値
 * 遷移(漸化式)：
 *  dp[i] = min($dp[$i - 1] + abs($hi[$i] - $hi[$i - 1]), $dp[$i - 2] + abs($hi[$i] - $hi[$i - 2]))
 *
 * 貰うDPの場合は初期化必須
 */

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));

[$N] = $ints();
$hi = $ints();

$dp = [];
$dp[0] = 0;
$dp[1] = abs($hi[1] - $hi[0]);

for ($i = 2; $i < $N; $i++) {
    $dp[$i] = min($dp[$i - 1] + abs($hi[$i] - $hi[$i - 1]), $dp[$i - 2] + abs($hi[$i] - $hi[$i - 2]));
}

echo $dp[$N - 1] . PHP_EOL;