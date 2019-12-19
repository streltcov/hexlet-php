<?php

namespace App\Strings;

// BEGIN (write your solution here)

/**
 * @param array $definitions
 *
 * @return string
 */
function buildDefinitionList($definitions)
{
    if (count($definitions) === 0) {
        return '';
    }
    $result = '<dl>';
    foreach ($definitions as $definition) {
        $result .= '<dt>' . $definition[0] . '</dt><dd>' . $definition[1] . '</dd>';
    }
    return $result . '</dl>';
}

// END