<?php

declare(strict_types=1);

namespace App\Arrays;

// BEGIN (write your solution here)

/**
 * @param $days
 *
 * @return mixed
 */
function getIndexOfWarmestDay($days)
{
    [$max, $number] = [0, null];
    foreach ($days as $index => $day) {
        [$max, $number] = max($day) >= $max ? [max($day), $index] : [$max, $number];
    }
    return $number;
}

// END
