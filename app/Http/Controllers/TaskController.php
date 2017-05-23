<?php

namespace App\Http\Controllers;

use App\Task;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index()
    {
        $tasks = Task::all();
        return view('task',compact('tasks'));
    }

    public function task($id){
        $tasks= Task::findorfail($id);
        return view('taskid',compact('tasks'));
    }
}
