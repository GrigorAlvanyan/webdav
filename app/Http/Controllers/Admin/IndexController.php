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
        $array = [
            'title' => 'Laravel Project',
            'data' =>[
                'one' => 'List 1',
                'two' => 'List 2',
                'three' => 'List 3',
                'four' => 'List 4',
                'five' => 'List 5'
            ],
            'dataI' =>['List 1', 'List 2', 'List 3', 'List 4', 'List 5'],

            'bvar' => true,
            'script' => "<script>alert('hello')</script>"
        ];


        if(view()->exists('default.index')) {


            return view('default.index', $array);
        }
        abort(404);

    }
}
