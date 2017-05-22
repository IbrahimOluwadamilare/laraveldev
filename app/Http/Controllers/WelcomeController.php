<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(){
        return view('welcome');
    }

    public function contact(){
        $name = "Project Rose Gold";
        return view('contact')-> with ('name',$name);
    }
     
}