<?php

namespace App\Strings;

/**
 * @param string $text
 *
 * @return mixed|null
 */
function run(string $text)
{
    // BEGIN (write your solution here)
    $last = function ($text) {
        return strlen($text) > 0 ? $text[strlen($text) - 1] : null;
    };
    // END
    return $last($text);
}
