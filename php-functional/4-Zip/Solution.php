<?php

namespace App\Solution;

require getenv('COMPOSER_HOME') . '/vendor/autoload.php';

use function Functional\map;
use function Functional\zip;

// BEGIN (write your solution here)

/**
 * @param $firstclub
 * @param $secondclub
 *
 * @return array
 */
function bestAttempt($firstclub, $secondclub)
{
    return array_values(array_diff(zip($firstclub, $secondclub, function ($value1, $value2) {
        if ($value1['scored'] > $value2['scored']) {
            return $value1['name'];
        } elseif ($value1['scored'] < $value2['scored']) {
            return $value2['name'];
        } elseif ($value1['scored'] === $value2['scored']) {
            return null;
        }
    }), array(null)));
}

// END
