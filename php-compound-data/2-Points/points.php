<?php

namespace App\points;

use function \PhpPoints\Points\makePoint;
use function \PhpPoints\Points\getX;
use function \PhpPoints\Points\getY;
use function \PhpPoints\Points\toString;

// BEGIN (write your solution here)

/**
 * @param $point
 *
 * @return int|null
 */
function getQuadrant($point)
{
    if (getX($point) > 0) {
        if (getY($point) > 0) {
            return 1;
        }
        if (getY($point) < 0) {
            return 4;
        }
    }
    if (getX($point) < 0) {
        if (getY($point) > 0) {
            return 2;
        }
        if (getY($point) < 0) {
            return 3;
        }
    }
    return null;
}

/**
 * @param $point
 *
 * @return mixed
 */
function getSymmetricalPoint($point)
{
    return makePoint(- getX($point), - getY($point));
}

/**
 * @param $point_1
 * @param $point_2
 *
 * @return float
 */
function calculateDistance($point_1, $point_2)
{
    return sqrt(pow((getX($point_2) - getX($point_1)), 2) + pow((getY($point_2) - getY($point_1)), 2));
}

// END
