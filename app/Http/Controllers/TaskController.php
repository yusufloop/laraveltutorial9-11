<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        //validation
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'type' => 'required',
            'duedate' => 'required',
            'user_id' => 'required|exists:users,id'
        ]);
        // Task::create($request->all()); #for all request
        //create orm / object releational maping

        dd($request);
        Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'type' => $request->type,
            'duedate' => $request->duedate,
            'user_id' => $request->user_id
        ]);

        //return kepada route create
        return redirect()->route('task.create')->with('success', 'Task Created successfully.');
    }

    public function create()
    {
        //orm 
        $users = User::all();

        return view('task.create', compact('users'));
    }

    public function index()
    {
        //
        $tasks = Task::with('user')->get();
        return view('task.index', compact('tasks'));
    }
    public function edit($id)
    {
        $task = Task::find($id);
        $users = User::all();
        return view('tasks.edit', compact('task', 'users'));
    }
}
