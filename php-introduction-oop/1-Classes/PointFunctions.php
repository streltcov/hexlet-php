<?php

namespace App\PointFunctions;

use App\Point;

// BEGIN (write your solution here)

function getMidpoint(Point $point_1, Point $point_2)
{
    $point = new Point();
    $point->x = ($point_1->x + $point_2->x) / 2;
    $point->y = ($point_1->y + $point_2->y) / 2;
    return $point;
}

// END
