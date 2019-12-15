<?php

namespace App\Solution;

require getenv('COMPOSER_HOME') . '/vendor/autoload.php';

use function Functional\map;
use function Functional\partial_any;
use const Functional\…;

// BEGIN (write your solution here)

/**
 * @param $array
 * @param $power
 *
 * @return mixed
 */
function mapWithPower($array, $power) {
    return map($array, function($item) use($power) {
        return pow($item, $power);
    });
}

// END
