<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\DeclareDeclare;

class DirectoryController extends Controller
{
    public function home(){

        $scan = collect( scandir(public_path('main') ) );

        $pach =str_replace('\\','/',public_path('main'));
        $scan = $scan->map(function ($item) use ($pach){
            if (strpos($item,'.')){
                return [
                    'file',
                    $pach.$item
                ];
            }else{
                return [
                    'dir',
                    $pach.$item
                ];
            }
        });


      return response()->json([
          $scan
      ], 200);
    }
}
