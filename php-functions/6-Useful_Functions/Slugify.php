<?php

namespace App\Slugify;

use Funct\Strings;
use Funct\Collection;

// BEGIN (write your solution here)

/**
 * @param $text
 *
 * @return string
 */
function slugify($text)
{
    return implode('-', array_diff(explode(' ', strtolower($text)), [null]));
}

// END
