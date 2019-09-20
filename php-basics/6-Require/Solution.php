<?php

// phpcs:disable PSR1.Files.SideEffects

// BEGIN (write your solution here)

require_once 'Strings.php';

function isPalindrome(string $word): bool
{
    return $word === reverse($word);
}
// END
