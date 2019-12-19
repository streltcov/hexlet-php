<?php

namespace App\Strings;

// BEGIN (write your solution here)

/**
 * @param $text
 * @param $stopWords
 *
 * @return string
 */
function makeCensored($text, $stopWords)
{
    return implode(' ', array_map(function ($item) use ($stopWords) {
        if (in_array($item, $stopWords)) {
            return '$#%!';
        }
        return $item;
    }, explode(' ', $text)));
}

// END
