<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function store(Request $request) 
    {
        $title = $request->input('title');
        $completed = $request->input('completed');
        $task = new Task();
        $task->title = $title;
        $task->completed = $completed;
        $task->save();
        return response()->json([
            'title' => $title,
            'completed'=> $completed
        ]);
    }
    public function destroy($id) 
    { $task = Task::find($id);
    $task->delete();
    return response()->json([
        'message' => 'Task deleted successfully'
    ]);

  }
}
