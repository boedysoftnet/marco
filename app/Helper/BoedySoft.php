<?php

namespace App\Helper;
class BoedySoft
{
    public static function trans($text)
    {
        $filter = collect($text)->filter(function ($key,$value) {
            return $value==config('app.locale');
        })->first();
        if ($text) {
            $filter = collect($text)->filter(function ($key,$value) {
                return $value=='en';
            })->first();
            return $filter;
        }
        return $filter;
    }

}
