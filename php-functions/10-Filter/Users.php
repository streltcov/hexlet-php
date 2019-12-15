<?php

namespace App\Users;

use function \Funct\Collection\flatten;

// BEGIN

/**
 * @param array $users
 *
 * @return array
 */
function getGirlfriends(array $users)
{
    $friends = array_map(function ($user) {
        return $user['friends'];
    }, $users);
    $friends = flatten($friends);
    $girlfriends = array_filter($friends, function ($user) {
        return $user['gender'] === 'female';
    });
    return array_values($girlfriends);
}

// END
