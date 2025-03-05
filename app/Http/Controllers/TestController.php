<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function firstAction(){
       

            $local='hello raneem';
            return view('test' ,['name'=> $local ,'books' =>['html','js','react']]);
        
    }
    public function secondAction(){
        return 'laravel';
    }
}