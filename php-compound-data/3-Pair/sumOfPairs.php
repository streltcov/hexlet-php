<?php

namespace App\sumOfPairs;

use function PhpPairs\Pairs\cons;
use function PhpPairs\Pairs\car;
use function PhpPairs\Pairs\cdr;
use function PhpPairs\Pairs\toString;

// BEGIN (write your solution here)

/**
 * @param $firstPair
 * @param $secondPair
 *
 * @return mixed
 */
function sumOfPairs($firstPair, $secondPair)
{
    return cons(car($firstPair) + car($secondPair), cdr($firstPair) + cdr($secondPair));
}

// END
