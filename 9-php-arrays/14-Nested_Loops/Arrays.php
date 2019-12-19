<?php

namespace App\Arrays;

// BEGIN (write your solution here)

/**
 * @param $first
 * @param $second
 *
 * @return int
 */
function getSameCount($first, $second)
{
    return count(array_unique(array_intersect($first, $second)));
}

// END
