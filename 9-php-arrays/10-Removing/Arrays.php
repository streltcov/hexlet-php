<?php

declare(strict_types=1);

namespace App\Arrays;

// BEGIN (write your solution here)

/**
 * @param $arr
 *
 * @return array
 */
function getSameParity($arr): array
{
    if (!empty($arr)) {
        $oddEven = ($arr[0] % 2) === 0;
        return array_values(array_filter($arr, function ($item) use ($oddEven) {
            return ($item % 2) != $oddEven;
        }));
    }
    return [];
}

// END
