<?php

namespace App\Solution;

use function Functional\partition;

// BEGIN (write your solution here)

/**
 * @param $array
 *
 * @return array
 */
function separateEvenAndOddNumbers($array) {
    return list($odd, $notodd) = partition($array, function($item) {
        return ($item % 2 == 0);
    });
}

// END
