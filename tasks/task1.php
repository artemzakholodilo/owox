<?php

function checkBrackets($s) {
    $stack = array();
    $length = strlen($s);
    $bracket = array('(', ')', '[', ']');
    while ($length-- > 0) {
        $n = array_search($s[$length], $bracket);
        if ($n !== false) {
            if ($n % 2) {
                $stack[] = $bracket[$n - 1];
            } elseif ($stack[count($stack) - 1] === $bracket[$n]) {
                array_pop($stack);
            }
        }
    }
    return empty($stack);
}
