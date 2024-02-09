@extends('app')

@section('content')
    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-bold mb-6">Task List</h1>
        <form action="{{ route('tasks.index') }}" method="GET" class="mb-4">
            <input type="text" name="query" value="{{ $query }}" placeholder="Search tasks..." class="px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500">
            <button type="submit" class="ml-2 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Search</button>
        </form>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($tasks as $task)
                <div class="bg-white shadow-md rounded-md p-6">
                    <h2 class="text-xl font-semibold mb-2">{{ $task->title }}</h2>
                    <p class="text-gray-600 mb-4">{{ Str::limit($task->description, 100) }}</p>
                    <div class="flex justify-end">
                        <a href="{{ route('tasks.show', $task->id) }}" class="text-blue-500 hover:underline mr-2">View</a>
                        <a href="{{ route('tasks.edit', $task->id) }}" class="text-gray-500 hover:text-gray-700 hover:underline">Edit</a>
                    </div>
                </div>
            @empty
                <p class="text-gray-600">No tasks found.</p>
            @endforelse
        </div>
        <div class="mt-8">
            {{ $tasks->links() }} 
        </div>
    </div>
@endsection
