<?php

namespace App\Arrays;

// BEGIN (write your solution here)

/**
 * @param array $collection
 * @param mixed ...$exclusions
 *
 * @return array
 */
function without(array $collection, ...$exclusions)
{
    return array_values(array_filter($collection, function ($item) use ($exclusions) {
        if (in_array($item, $exclusions)) {
            return false;
        }
        return true;
    }));
}

// END
