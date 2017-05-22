<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //

    public function index(){
        $name = 'Project Rose Gold';
        return view('about', compact('name'));
    }

}
