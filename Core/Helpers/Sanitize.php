<?php

namespace Core\Helpers;

class Sanitize
{
    public static function StripTags($str)
    {
        if (isset($str) && !is_null($str)) {
            return trim(strip_tags($str));
        }else {
            return false;
        }
    }
}