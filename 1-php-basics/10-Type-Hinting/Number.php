<?php

namespace App\Number;

// BEGIN (write your solution here)

function reverse(int $number): int
{
    return $number > 0 ? (int) strrev($number) : -1 * (int) strrev($number);
}

// END
