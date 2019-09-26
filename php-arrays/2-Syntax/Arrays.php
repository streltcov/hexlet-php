<?php

namespace App\Arrays;

function apply(array $arr, $operationName, $index = null, $value = null)
{
    // BEGIN (write your solution here)
    switch ($operationName) {
        case 'reset':
            $arr = [];
            break;
        case 'remove':
            unset($arr[$index]);
            break;
        case 'change':
            $arr[$index] = $value;
            break;
    }
    return $arr;
    // END
}
