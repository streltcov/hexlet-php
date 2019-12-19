<?php

namespace App\Text;

// BEGIN (write your solution here)

function isPalindrome($word)
{
    $length = strlen($word) - 1;
    for ($i = 0; $i < $length; $i++) {
        if ($word[$i] != $word[$length - $i]) {
            return false;
        }
    }
    return true;
}

// END
