<?php

namespace App\SegmentFunctions;

use App\Point;
use App\Segment;

// BEGIN (write your solution here)
function reverse(Segment $segment)
{
    return new Segment(
        new Point($segment->endPoint->x, $segment->endPoint->y),
        new Point($segment->beginPoint->x, $segment->beginPoint->y)
    );
}
// END
