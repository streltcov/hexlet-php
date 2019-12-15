<?php

namespace App\Solution;

use function Functional\sort as fsort;

// BEGIN (write your solution here)

/**
 * @param $collection
 *
 * @return mixed
 */
function sortByBinary($collection)
{
    $onesCount = function ($number) {
        return array_sum(str_split(decbin($number)));
    };

    return fsort($collection, function ($prev, $next) use ($onesCount) {
        return ($onesCount($prev) === $onesCount($next)) ? $prev <=> $next :
            $onesCount($prev) <=> $onesCount($next);
    });

    // return $sorted;
}

// END
