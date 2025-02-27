@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <i class="ion ion-clipboard mr-1"></i>
                To Do List
            </h3>
        </div>
        <div class="container mt-5">
            <div class="row">
                @foreach ($tasks as $task)
                    <div>
                        <h5>{{ $task->title }}</h5>
                    </div>
                    <div>
                        <p>{{ $task->description }}</p>
                    </div>
                    <div>
                        <p>{{ $task->type }}</p>
                    </div>
                    <div>
                        <p>{{ $task->duedate }}</p>
                    </div>
                    <div>
                        <h5>Assigned to {{ $task->user->name ?? 'no one' }}</h5>
                    </div>
                    <div>
                        <a class="btn btn-info" href="{{ route('tasks.show', $task->id) }}">Show the
                            post</a>
                    </div>
                    <br>
                    <hr>
                @endforeach
            </div>
        </div>
    @endsection
