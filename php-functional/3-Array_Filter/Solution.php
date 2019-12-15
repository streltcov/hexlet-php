<?php

namespace App\Solution;

require getenv('COMPOSER_HOME') . '/vendor/autoload.php';

use function Functional\select;
use function Functional\map;

// BEGIN (write your solution here)

/**
 * @param $array
 *
 * @return float|int
 */
function evenSquareSum($array) {
    return array_sum(array_map(function ($value) { return $value ** 2; }, array_filter($array, function ($value) {
        return $value % 2 === 0;
    })));
}

// END
