<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
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

 