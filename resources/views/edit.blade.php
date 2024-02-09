@extends('app')

@section('content')
    <div class="container mx-auto mt-8">
        <div class="max-w-md mx-auto bg-white shadow-md rounded-md p-6">
            <h1 class="text-2xl font-bold mb-4">Edit Task</h1>
            <form action="{{ route('tasks.update', $task->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" name="title" id="title" value="{{ $task->title }}" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" id="description" rows="3" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ $task->description }}</textarea>
                </div>
                <div class="flex justify-between items-center">
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Update Task</button>
                    <a href="{{ route('tasks.show', $task->id) }}" class="text-gray-600 hover:text-blue-500">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
