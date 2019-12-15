<?php

namespace App\Users;

use Funct\Collection;

// BEGIN (write your solution here)

/**
 * @param $users
 *
 * @return array|null
 */
function getManWithLeastFriends($users)
{
    if (count($users) === 0) {
        return null;
    }
    return Collection\minValue($users, function ($user) {
        return count($user['friends']);
    });
}

// END
