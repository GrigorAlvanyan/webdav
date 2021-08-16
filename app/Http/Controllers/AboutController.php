<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show()
    {
        if(view()->exists('default.about')) {
            return view('default.about')->withTitle('Hello World');
        }
        abort(404);    }
}
