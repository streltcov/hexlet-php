<?php

namespace App\Emails;

const FREE_EMAIL_DOMAINS = [
    'gmail.com', 'yandex.ru', 'hotmail.com'
];

// BEGIN (write your solution here)

function getFreeDomainsCount(array $emails)
{
    if (count($emails) < 1) {
        return [];
    }
    $emailsCount = [];
    foreach (FREE_EMAIL_DOMAINS as $domain) {
        $emailsCount[$domain] = array_reduce($emails, function ($carry, $item) use ($domain) {
            $carry += preg_match("/$domain/", $item) ? 1 : 0;
            return $carry;
        });
    }
    return $emailsCount;
}

// END
