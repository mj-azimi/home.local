<?php

namespace App\Http\Controllers;

use App\Http\Classes\SearchInDir;
use App\Http\Classes\StrEdite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\DeclareDeclare;

class DirectoryController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function home(){

        $scan = collect( scandir(public_path('main') ) );


        list($pach, $scan) = SearchInDir::search($scan);


        $pach=explode('/public/main',$pach)[1];
        $pach = StrEdite::delSlash($pach);

        return view('index',['scan' => $scan ,'pach'=>$pach]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function dir(Request $request){

        $scan = collect( scandir(public_path('main/'.$request->dir) ) );

        list($pach, $scan) = SearchInDir::search($scan , $request->dir);


        $pach=explode('/public/main',$pach)[1];
        $pach = StrEdite::delSlash($pach);

        return view('index',['scan' => $scan ,'pach'=>$pach]);
    }


    public function mkdir(Request $request)
    {
//        dd($request->pach);
//        mkdir($request->pach);
        $path = public_path('main'.$request->pach.'/'.'testttt');
        File::makeDirectory($path,'777',1);
        dd('okkk');

    }


}
