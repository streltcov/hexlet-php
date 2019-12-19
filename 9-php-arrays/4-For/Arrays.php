<?php

namespace App\Arrays;

// BEGIN (write your solution here)

function addPrefix($arr, $prefix)
{
    for ($i = 0; $i < count($arr); $i++) {
        $arr[$i] = $prefix . ' ' . $arr[$i];
    }
    return $arr;
}
// END
