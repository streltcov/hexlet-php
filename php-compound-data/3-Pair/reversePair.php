<?php

namespace App\reversePair;

use function PhpPairs\Pairs\cons;
use function PhpPairs\Pairs\car;
use function PhpPairs\Pairs\cdr;
use function PhpPairs\Pairs\toString;

// BEGIN (write your solution here)

/**
 * @param $pair
 *
 * @return mixed
 */
function reversePair($pair)
{
    return cons(cdr($pair), car($pair));
}

// END