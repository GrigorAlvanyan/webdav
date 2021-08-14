<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function show(){

//        return view('default.template',['title'=>'Hello world']);
//        $data = ['title'=>'Hello world'];
//        return view('default.template', $data);
//        return view('default.template')->with('title','Hello world');
//        $view = view('default.template');
//
//        $view->with('title','Hello world');
//        $view->with('title2','Hello world2');
//        $view->with('title3','Hello world3');



        if(view()->exists('default.template')) {

//            view()->name('default.template','myview');
//            return view()->of('myview')->withTitle('Hello World'); //error

//            $view = view('default.template',['title'=>'Hello World'])->render();
//            echo $view;

//            echo view('default.template',['title'=>'Hello World'])->getPath(); //path

//              return;
//            $path = config('view.paths');
//            return view()->file($path[0].'/default/template.php')->withTitle('Hello World');

            return view('default.template')->withTitle('Hello World');
        }
        abort(404);

    }
}
