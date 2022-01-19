<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class PaginasController extends Controller
{
    public function test(){
        return view('app');
    }

    public function test2(){
        return view('test2');
    }

    public function test3(){
        return ('test3');
    }
}
