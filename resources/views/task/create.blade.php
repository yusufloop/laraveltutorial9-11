@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <h5>Create a task</h5>
        </div>
        <div>
            <form action="{{ route('task.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" required name="title">
                </div>
                <div class="form-group">
                    <label for="description">description</label>
                    <textarea type="text" class="form-control" id="description" required name="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" id="type" required name="type">
                </div>
                <div class="form-group">
                    <label for="duedate">Due Date</label>
                    <input type="date" class="form-control" id="duedate" required name="duedate">
                </div>
                <div class="form-group">
                    <label for="user_id">Assign into user</label>
                    <select name="user_id" id="user_id" class="form-control" required>
                        <option value="" disabled selected> Select a user</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
