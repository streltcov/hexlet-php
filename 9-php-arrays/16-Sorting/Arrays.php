<?php

namespace App\Arrays;

// BEGIN (write your solution here)

/**
 * @param array $collection
 *
 * @return array
 */
function bubbleSort(array $collection)
{
    $size = count($collection);
    do {
        $swapped = false;
        for ($i = 0; $i < $size - 1; $i++) {
            if ($collection[$i] > $collection[$i + 1]) {
                $temp = $collection[$i];
                $collection[$i] = $collection[$i + 1];
                $collection[$i + 1] = $temp;
                $swapped = true;
            }
        }
        $size--;
    } while ($swapped);
    return $collection;
}

// END
