<?php

namespace App;

// BEGIN (write your solution here)
class Segment
{
    /**
     * @var Point $beginPoint
     */
    public $beginPoint;

    /**
     * @var Point $endPoint
     */
    public $endPoint;

    /**
     * @param Point $beginPoint
     * @param Point $endPoint
     */
    public function __construct(Point $beginPoint, Point $endPoint)
    {
        $this->beginPoint = $beginPoint;
        $this->endPoint = $endPoint;
    }
}
// END
