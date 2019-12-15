<?php

namespace App\Solution;

require getenv('COMPOSER_HOME') . '/vendor/autoload.php';

use function Functional\map;

function powerOfString($str)
{
    // BEGIN (write your solution here)

    return array_sum(array_map(function ($value) {
        return ord($value); }, str_split($str)));

    // END
}
