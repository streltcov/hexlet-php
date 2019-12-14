<?php

namespace App\Math;

// BEGIN (write your solution here)

/**
 * @param mixed ...$values
 *
 * @return float|int|null
 */
function average(...$values)
{
    if (count($values) === 0) {
        return null;
    }
    $sum = 0;
    foreach ($values as $value) {
        $sum += (float) $value;
    }
    return $sum / count($values);
}

// END
