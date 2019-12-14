<?php

namespace App\Users;

use function Funct\Collection\firstN;

// BEGIN (write your solution here)

/**
 * @param array $users
 * @param int $number
 *
 * @return array
 */
function takeOldest(array $users, int $number = 1)
{
    $sortByAge = function ($userOne, $userTwo) {
        if (strtotime($userOne['birthday']) === strtotime($userTwo['birthday'])) {
            return 0;
        }
        return strtotime($userOne['birthday']) > strtotime($userTwo['birthday']) ? 1 : -1;
    };
    usort($users, $sortByAge);
    return array_slice($users, 0, $number);
}

// END
