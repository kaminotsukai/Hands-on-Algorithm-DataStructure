<?php

/**
 * 配るDP
 */

$ints = fn () => array_map('intval', explode(' ', trim(fgets(STDIN))));

[$N] = $ints();
$hi = $ints();

$dp = array_fill(0, $N, INF);
$dp[0] = 0;

for ($i = 0; $i < $N; $i++) {

    if ($i + 1 < $N) {
        $dp[$i + 1] = min($dp[$i + 1], $dp[$i] + abs($hi[$i] - $hi[$i + 1]));
    }
    if ($i + 2 < $N) {
        $dp[$i + 2] = min($dp[$i + 2], $dp[$i] + abs($hi[$i] - $hi[$i + 2]));
    }
}

echo $dp[$N - 1] . PHP_EOL;