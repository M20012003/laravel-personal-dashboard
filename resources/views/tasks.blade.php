@extends('layouts.app')

@section('content')

 <div class="task_page">
    <p class="page_label">
        My Dashboard

    </p>
    <h1>My Tasks✨</h1>
<p class="page_description">
    Keep moving forward, one task at a time. 
</p>

<form method="POST" action="/tasks">
    @csrf 
    <input type="text" name="title">
    <button type="submit">Add Tasks</button>
</form>
<div class="tasks_list">
    @foreach ($tasks as $task)
    <div class="task_card">
        <div class="task_content">
            <h2>
                {{ $task->title }}
            </h2>
            @if ($task->completed)
            <span class="status completed">
                completed✓
            </span>
            @else 
            <span class="status pending">
                Not Completed ⏳
            </span>
            <form method="POST" action="/tasks/{{ $task->id }}">
                @csrf 
                @method('PUT')

                <button type="submit">
                    complete
                </button>
           </form>
           <form method="POST" action="/tasks/{{ $task->id }}">
            @csrf 
            @method('DELETE')
            <button type="submit" class="delete-button">
                delete
            </button>
        </form>
    @endif
         </div>
    </div>
   @endforeach
  </div>
  <p class="total-task">
    Total Task: {{ count($tasks) }}
  </p>
 </div>
@endsection







