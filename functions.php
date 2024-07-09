<?php

if (! function_exists('e')) {
    /**
     * Encode HTML special characters in a string.
     *
     * @param  string|int|float|null  $value
     * @param  bool  $doubleEncode
     * @return string
     */
    function e($value, $doubleEncode = true)
    {
        return htmlspecialchars($value ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8', $doubleEncode);
    }
}
