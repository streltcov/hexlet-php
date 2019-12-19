<?php

declare(strict_types=1);

namespace App\Arrays;

// BEGIN (write your solution here)

/**
 * @param array $sequence
 *
 * @return bool
 */
function isContinuousSequence($sequence): bool
{
    if (count($sequence) <= 1) {
        return false;
    }
    $check = array_shift($sequence);
    foreach ($sequence as $item) {
        if (($item - 1) != $check) {
            return false;
        }
        $check = $item;
    }
    return true;
}

// END
