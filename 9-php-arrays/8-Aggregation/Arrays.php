<?php

declare(strict_types=1);

namespace App\Arrays;

/**
 * @param $arr
 * @return array|float|int
 */
function calculateAverage($arr)
{
    return count($arr) === 0 ? null : array_sum($arr) / count($arr);
}
