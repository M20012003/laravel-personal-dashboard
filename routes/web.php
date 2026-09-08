<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function (Request $request) {
    $name = $request->query('name');
    $country = $request->query('country');
  
    return view('home' , [
        'name' => $name,
        'country' => $country,
    ]);
});

Route::get('/tasks' , function() {
    $tasks =[
        [
            'title' => 'Learn PHP',
            'completed' => true,
        ],
        [
            'title' => 'Learn Laravel',
            'completed' => true,
        ],
        [
            'title' => 'go to the gym',
            'completed' => false,
        ],
        [
            'title' => 'practice CSS',
            'completed' => true,
        ],

    ];
    return view('tasks' , [
        'tasks' => $tasks,
    ]);
});

Route::get('/tasks/{id}' , function($id) {
    $tasks = [
       1 => [
            'title' => 'Learn PHP',
            'completed' => true,
        ],
       2=> [
            'title' => 'Learn Laravel',
            'completed' => true,
        ],
       3=> [
            'title' => 'go to the gym',
            'completed' => false,
        ],
        4=>[
            'title' => 'practice CSS',
            'completed' => true,
        ],

    ];
    return $tasks[$id]['title'];
});