<?php

namespace App\Arrays;

/**
 * @param $arr1
 * @param $arr2
 * 
 * @return array
 */
function getIntersectionOfSortedArray($arr1, $arr2)
{
    // BEGIN (write your solution here)
    return array_values(array_intersect($arr1, $arr2));
    // END
}
