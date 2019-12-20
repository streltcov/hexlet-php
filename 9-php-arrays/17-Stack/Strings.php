<?php

namespace App\Strings;

// BEGIN (write your solution here)

/**
 * @param string $expression
 *
 * @return bool
 */
function checkIfBalanced($expression): bool
{
    $stack = [];
    $startSymbols = ['('];
    $pairs = ['()'];
    $expression = preg_replace(["/\s/", "/\+/", "/[0-9]/", "[\*]", "[-]", "[/]"], '', $expression);
    for ($i = 0, $len = strlen($expression); $i < $len; $i++) {
        $curr = $expression[$i];
        if (in_array($curr, $startSymbols)) {
            array_push($stack, $curr);
        } else {
            $prev = array_pop($stack);
            $pair = "{$prev}{$curr}";
            if (!in_array($pair, $pairs)) {
                return false;
            }
        };
    }
    return count($stack) == 0;
}

// END
