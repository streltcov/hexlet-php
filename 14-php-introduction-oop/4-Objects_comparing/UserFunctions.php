<?php

namespace App\UserFunctions;
use App\User;

// BEGIN (write your solution here)
function areUsersEqual(User $user1, User $user2)
{
    return ($user1->id === $user2->id);
}
// END
