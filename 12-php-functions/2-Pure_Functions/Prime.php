<?php

namespace App\Prime;

// BEGIN (write your solution here)

/**
 * @param int $number
 *
 * @return bool
 */
function isPrime(int $number)
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

/**
 * @param $number
 */
function sayPrimeOrNot($number)
{
    echo isPrime($number) ? 'yes' : 'no';
}

// END

echo sayPrimeOrNot(2) . ' => 2 (yes)' . PHP_EOL;
echo sayPrimeOrNot(3) . ' => 3 (yes)' . PHP_EOL;
echo sayPrimeOrNot(13) . ' => 13 (yes)' . PHP_EOL;
echo sayPrimeOrNot(4) . ' => 4 (no)' . PHP_EOL;
echo sayPrimeOrNot(8) . ' => 8 (no)' . PHP_EOL;
