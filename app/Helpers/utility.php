<?php
if (!function_exists('limitChars')) {
    function limitChars($string, $char_limit) {
        if (strlen($string) > $char_limit) {
            return substr($string, 0, $char_limit) . '...';
        }
        return $string;
    }
}