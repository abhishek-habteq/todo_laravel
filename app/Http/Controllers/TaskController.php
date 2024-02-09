<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        $tasks = $query ? Task::where('title', 'like', '%' . $query . '%')
                           ->orWhere('description', 'like', '%' . $query . '%')
                           ->paginate(9) : Task::paginate(9);

        return view('index', compact('tasks', 'query'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Task::create($request->only(['title', 'description']));

       return redirect('/');
    }

    public function show($id)
    {
        $task = Task::findOrFail($id);

        return view('show', compact('task'));
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id);

        return view('edit', compact('task'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $task = Task::findOrFail($id);

        $task->update($request->only(['title', 'description']));

return redirect('/');
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect('/');
    }
}