<?php

namespace App\Solution;

require getenv('COMPOSER_HOME') . '/vendor/autoload.php';
require_once 'User.php';

use function Functional\group;
use function Functional\flatten;
use function App\User\getAge;

// BEGIN (write your solution here)

/**
 * @param $userlist
 *
 * @return mixed
 */
function ages($userlist) {
    return flatten(group($userlist, function($item) {
        return getAge($item);
    }));
}

// END
