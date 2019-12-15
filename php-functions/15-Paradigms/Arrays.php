<?php

namespace App\Arrays;

// BEGIN (write your solution here)

/**
 * @param array $collection
 * @param array $difference
 *
 * @return array
 */
function getDifference(array $collection, array $difference)
{
    return array_values(array_filter($collection, function ($item) use ($difference) {
        if (in_array($item, $difference)) {
            return false;
        }
        return true;
    }));
}

// END
