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
        $view = view('default.template');

        $view->with('title','Hello world');
        $view->with('title2','Hello world2');
        $view->with('title3','Hello world3');

        return $view;
    }
}
