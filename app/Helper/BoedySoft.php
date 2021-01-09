<?php

namespace App\Helper;

use phpDocumentor\Reflection\Types\This;

class BoedySoft
{
    public static function trans($text)
    {
        $filter = collect($text)->filter(function ($key, $value) {
            return $value == config('app.locale');
        })->first();
        if (!$filter) {
            $filter = collect($text)->filter(function ($key, $value) {
                return $value == 'en';
            })->first();
            return $filter;
        } else {
            return $filter;
        }
    }

    static function getTagValue($string, $tag)
    {
        $regex = '#<dokter>(.*?)</dokter>#';
        preg_match($regex, $string, $matches);
        return isset($matches[1]) ? $matches[1] : '';
    }
}
