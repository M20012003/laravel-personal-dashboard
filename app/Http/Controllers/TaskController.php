<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
         $tasks = [
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
                'completed' => false,
            ],
        ];

        return view('tasks', [
            'tasks' => $tasks,
        ]);
    }
    public function show($id)  {
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
    }
}
