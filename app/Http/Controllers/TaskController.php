<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index() {
        
        $tasks = Task::all();
        return view('tasks', ['tasks' => $tasks]);
    }
    public function store(Request $request) {
        $title = $request->input('title');
        $task = new Task();
        $task->title = $title;
        $task->completed = false;
        $task->save();

       return redirect('/tasks');

    }
    public function update($id) {
        $task = Task::find($id);
        $task->completed = true;
        $task->save();
        return redirect('/tasks');

    }
    public function destroy($id) {
        $task = Task::find($id);
        $task->delete();
        return redirect('/tasks');
    }
}
    
