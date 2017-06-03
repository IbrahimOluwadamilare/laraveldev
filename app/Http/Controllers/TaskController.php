<?php

namespace App\Http\Controllers;

use App\Task;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use Request;

use Carbon\Carbon;

class TaskController extends Controller
{
    //
    public function index()
    {
        $tasks = Task::latest('publish_at')->get();
        return view('task',compact('tasks'));
    }

    public function task($id){
        $tasks= Task::findorfail($id);
        return view('taskid',compact('tasks'));
    }

    public function create(){
        return view('create');
    }

    public function store()
    {
        $input = Request::all();

        $input['publish_at'] = Carbon::now(); 

        Task::create($input);

        return redirect('task');
    }
}
