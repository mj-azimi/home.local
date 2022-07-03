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


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function mkdir(Request $request)
    {
        $path = public_path('main'.$request->pach);
        File::makeDirectory($path,'777',1);

        return redirect()->back();
    }



    public function dldir(Request $request)
    {

        $dir = public_path('main/'.$request->dir);
        File::deleteDirectory($dir);
        return redirect()->back();
    }


}
