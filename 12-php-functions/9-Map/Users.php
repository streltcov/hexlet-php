<?php

namespace App\Users;

use function Funct\Collection\flatten;

// BEGIN

/**
 * @param array $users
 *
 * @return mixed
 */
function getChildren(array $users)
{
    return flatten(array_map(function ($user) {
        return $user['children'];
    }, $users));
}

// END