<?php

namespace App\Arrays;

// BEGIN (write your solution here)

function swap($arr, $index)
{
    if (array_key_exists($index - 1, $arr) && array_key_exists($index + 1, $arr)) {
        [$arr[$index - 1], $arr[$index + 1]] = [$arr[$index + 1], $arr[$index - 1]];
        return $arr;
    }
    return $arr;
}

// END
