<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo_Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <nav class="bg-gray-800 py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <a href="{{ route('tasks.index') }}" class="text-white font-bold text-lg">Task Manager</a>
            <ul class="flex space-x-4">
                <li><a href="{{ route('tasks.index') }}" class="text-white">Home</a></li>
                <li><a href="{{ route('tasks.create') }}" class="text-white">Create Task</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mx-auto py-8 px-4">
        @yield('content')
    </div>
</body>
</html>
