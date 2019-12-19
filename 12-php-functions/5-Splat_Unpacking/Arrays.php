<?php

namespace App\Arrays;

/**
 * @param $first
 * @param mixed ...$rest
 *
 * @return array
 */
function union($first, ...$rest)
{
    // BEGIN (write your solution here)
    if (count($rest) > 0) {
        return array_values(array_unique(array_merge($first, ...$rest)));
    }
    return $first;
    // END
}
