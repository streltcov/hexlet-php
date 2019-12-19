<?php

// BEGIN

/**
 * @param array $users
 *
 * @return mixed
 */
function getMenCountByYear(array $users): array
{
    $men = array_filter($users, function ($user) {
        return $user['gender'] === 'male';
    });
    $years = array_map(function ($user) {
        return date('Y', strtotime($user['birthday']));
    }, $men);

    return array_reduce($years, function ($carry, $year) {
        if (!array_key_exists($year, $carry)) {
            $carry[$year] = 1;
        } else {
            $carry[$year] += 1;
        }
        return $carry;
    }, []);
}

// END
