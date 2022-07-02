<?php

namespace App\Http\Classes;

class StrEdite
{
    /**
     * @param $pach
     * @return array|mixed|string|string[]
     */
    public static function delSlash($pach)
    {
        while ( str_contains($pach ,'//') ){
            $pach = str_replace('//','/',$pach);
        }

        return $pach;
    }
}
