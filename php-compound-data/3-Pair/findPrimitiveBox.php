<?php

namespace App\findPrimitiveBox;

use function PhpPairs\Pairs\cons;
use function PhpPairs\Pairs\car;
use function PhpPairs\Pairs\cdr;
use function PhpPairs\Pairs\isPair;
use function PhpPairs\Pairs\toString;

// BEGIN (write your solution here)

/**
 * @param $box
 *
 * @return mixed
 */
function findPrimitiveBox($box)
{
    if (isPair(car($box))) {
        return findPrimitiveBox(car($box));
    }
    if (isPair(cdr($box))) {
        return findPrimitiveBox(cdr($box));
    }
    return $box;
}

// END