<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class TasksController extends Controller
{
    public function index(){
        $tasks = Task::all();

        return view('Tasks.index',compact('tasks'));
    }

    public function show( Task $task)
    {
        return view('Tasks.show', compact('task'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $this->validate( request() , [
            'name' => 'required|min:2',
            'start_date' => 'required',
            'due_date' => 'required'
        ]);
        $task = new Task();
        $task->name =  request('name');
        $task->start_date =  request('start_date');
        $task->due_date =  request('due_date');
        $task->save();

        return redirect('/tasks');
    }
}
