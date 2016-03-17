<?php

/**
 * @param $k int
 * @return int|number
 */
function luckyTickets($k)
{
    if ($k % 2 !== 0) {
        throw new \InvalidArgumentException("Number must be even");
    }

    $cnk = function($n, $k) {
        static $f = array(1, 1);
        if (!isset($f[$n])) {
            for ($i = 2; $i <= $n; $i++) {
                $f[$i] = $f[$i - 1] * $i;
            }
        }
        return  $f[$n] / ($f[$k] * $f[$n - $k]);
    };
    $s = 0;
    $c = $k / 2;
    $n = $c * 9;
    for ($i = 0; $i < $c; $i++) {
        $s += pow(-1, $i) * $cnk($k - 1 + $n - $i * 10, $k - 1) * $cnk($k, $i);
    }
    return $s;
}
