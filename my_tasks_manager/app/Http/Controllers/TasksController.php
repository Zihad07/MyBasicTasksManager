<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddTaskRequest;
use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(){
        return view('tasks')->with('tasks',Task::orderBy('created_at')->get());
    }

    public function store(AddTaskRequest $request){
        $task = new Task();
        $task->name = $request->name;
        $task->save();

        return redirect('/')->with('success','New Task added successfully. :)');
    }

    public function destroy($task){
        Task::findOrFail($task)->delete();
        
        return redirect('/')->with('success','One Task Delted Succfully');
    }
}
