@extends('layouts.app')

@section('content')

    <div class="tasks-page">

        <p class="page-label">
            MY DASHBOARD
        </p>

        <h1>My Tasks ✨</h1>

        <p class="page-description">
            Keep moving forward, one task at a time.
        </p>


        <div class="tasks-list">

            @foreach ($tasks as $task)

               <div class="task-card">

    <div class="task-content">

        <h2>
            {{ $task['title'] }}
        </h2>

        @if ($task['completed'])

            <span class="status completed">
                Completed ✓
            </span>

        @else

            <span class="status pending">
                Not Completed ⏳
            </span>

        @endif

    </div>

</div>

            @endforeach

        </div>


        <p class="total-tasks">
            Total Tasks: {{ count($tasks) }}
        </p>

    </div>

@endsection