@extends('app')

@section('content')
    <div class="container mx-auto mt-8">
        <div class="bg-white shadow-md rounded-md p-6">
            <h1 class="text-3xl font-bold mb-4">{{ $task->title }}</h1>
            <p class="text-gray-600 mb-6">{{ $task->description }}</p>
            <div class="flex justify-end">
                <a href="{{ route('tasks.edit', $task->id) }}" class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-600 transition duration-200">Edit</a>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="ml-4">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white font-semibold py-2 px-4 rounded-md hover:bg-red-600 transition duration-200">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
