<?php

namespace App\Http\Classes;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class SearchInDir
{
    /**
     * @param Collection $scan
     * @param $dir
     * @return array
     */
    public  static  function search(Collection $scan , $dir = null): array
    {
        $pach = str_replace('\\', '/', public_path('main/'.$dir));
        $scan = $scan->map(function ($item) use ($dir) {

            if (strpos($item, '.')) {
                if ($dir){
                    return [
                        'file',
                        $dir.'/'.$item,
                        $item
                    ];
                }else{
                    return [
                        'file',
                        $item,
                        $item

                    ];
                }
            } else {
                return [
                    'dir',
                    $item
                ];
            }
        });

         unset($scan[0]);
        $scan->values();
        return array($pach, $scan);
    }
}
