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
        $pattern = "/<$tag ?.*>(.*)<\/$tag>/";
        preg_match($pattern, $string, $matches);
        return $matches[1];
    }

    static function getParameter($string, $parameter)
    {
        $pattern = "#@$parameter=([^\s]+)#";
        preg_match($pattern, $string, $matches);
        switch ($parameter){
            case "team-doctor":
                if (isset($matches[1])) {
                    $filter=strip_tags(str_replace('-',' ',$matches[1]));
                    return isset($matches[1]) ? preg_replace($pattern,view('livewire.front.widget.doctor-team',compact('filter')),$string) : $string;
                }else{
                    return  $string;
                }
            default:
                return $string;
        }
    }
}
