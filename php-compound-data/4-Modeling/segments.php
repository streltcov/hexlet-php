<?php

namespace App\segments;

use function PhpPairs\Pairs\cons;
use function PhpPairs\Pairs\car;
use function PhpPairs\Pairs\cdr;

use function \PhpPoints\Points\makePoint;
use function \PhpPoints\Points\getX;
use function \PhpPoints\Points\getY;
use function \PhpPoints\Points\toString as pointToString;

// BEGIN (write your solution here)

/**
 * @param $point_1
 * @param $point_2
 * 
 * @return mixed
 */
function makeSegment($point_1, $point_2)
{
    return cons($point_1, $point_2);
}

/**
 * @param $segment
 *
 * @return mixed
 */
function startSegment($segment)
{
    return car($segment);
}

/**
 * @param $segment
 *
 * @return mixed
 */
function endSegment($segment)
{
    return cdr($segment);
}

/**
 * @param $segment
 *
 * @return string
 */
function segmentToString($segment)
{
    return '[' . pointToString(car($segment)). ', ' . pointToString(cdr($segment)) . ']';
}

/**
 * @param $segment
 *
 * @return array
 */
function middlePointSegment($segment)
{
    return [
        'x' => (car($segment)['x'] + cdr($segment)['x']) / 2,
        'y' => (car($segment)['y'] + cdr($segment)['y']) / 2
    ];
}

// END
