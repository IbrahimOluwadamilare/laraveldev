<?php

namespace App\Http\Controllers;

use App\Task;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index(){
        $task = Task::all();
        return $task;

    }
}
