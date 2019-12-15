<?php

namespace App\Solution;

require getenv('COMPOSER_HOME') . '/vendor/autoload.php';

use function Functional\reduce_left;

// BEGIN (write your solution here)

/**
 * @param $array
 *
 * @return array
 */
function wordsCount($array)
{
    $result = [];
    foreach ($array as $key => $word) {
        $result[$word] = 0;
    }
    foreach ($array as $value) {
        foreach ($result as $key => $data) {
            if ($key === $value) {
                $result[$key] += 1;
            }
        }
    }
    return $result;
}

// END
