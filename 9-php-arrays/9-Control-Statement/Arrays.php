<?php

declare(strict_types=1);

namespace App\Arrays;

// BEGIN (write your solution here)

/**
 * @param $arr
 * @param $search
 *
 * @return int|string
 */
function findIndex($arr, $search)
{
    foreach ($arr as $index => $value) {
        if ($value === $search) {
            return $index;
        }
    }
    return -1;
}

// END