<?php

namespace App\Helper;
class BoedySoft
{
    public static function trans($text)
    {
        $filter = collect($text)->filter(function ($key,$value) {
            return $value==config('app.locale');
        })->first();
        return $filter;
    }

}
