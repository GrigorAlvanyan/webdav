<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Core extends Controller
{
    public function __construct() {
//        $this->middleware('mymiddle');
    }

    public function getArticles() {
        echo __METHOD__;
    }

    public function getArticle($id) {
        echo $id;
    }
}

