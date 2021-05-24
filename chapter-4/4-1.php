<?php

$N = (int)trim(fgets(STDIN));

/**
 * 再帰関数（ブーメランみたい）
 *  Q1. 再帰関数の使い所
 *  A1. r重ループが必要な問題（ループの個数が動的に変わる）
 */
function func($N)
{
    echo "func(${N})を呼び出しました" . PHP_EOL;
    if ($N == 0) return 0;
    $result = $N + func($N - 1);

    echo "${N}までの和 = ${result}" . PHP_EOL;
    return $result;
}

echo func($N);


// function func(引数) {
//     if (ベースケース) {
//         return ベースケースに対する値;
//     }

//     func(次の引数);
//     return 答え;
// }