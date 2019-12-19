<?php

namespace App;

class Segment
{
    private $beginPoint;
    private $endPoint;

    public function __construct($beginPoint, $endPoint)
    {
        $this->beginPoint = $beginPoint;
        $this->endPoint = $endPoint;
    }

    // BEGIN (write your solution here)
    public function __toString(): string
    {
        return "[$this->beginPoint, $this->endPoint]";
    }
    // END
}
