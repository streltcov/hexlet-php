<?php

namespace App\Strings;

// BEGIN (write your solution here)

/**
 * @param $text
 *
 * @return int
 */
function countUniqChars($text)
{
    $unique = [];
    foreach (array_diff(str_split($text), [null]) as $char) {
        if (!in_array($char, $unique)) {
            $unique[] = $char;
        }
    }
    return count($unique);
}

// END
