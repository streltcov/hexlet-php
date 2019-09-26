<?php

namespace App\Arrays;

// BEGIN (write your solution here)

function get(array $arr, $index, $default = null)
{
    return array_key_exists($index, $arr) ? $arr[$index] : $default;
}

// END
