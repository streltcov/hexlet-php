<?php

namespace App\PointFunctions;

use App\Point;

// BEGIN (write your solution here)

function dup(Point $point)
{
    $newPoint = new Point();
    $newPoint->x = $point->x;
    $newPoint->y = $point->y;
    return $newPoint;
}

// END
